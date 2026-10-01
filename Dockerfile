FROM php:8.4-cli

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer Node.js 20
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copier les fichiers de dépendances
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

COPY package.json package-lock.json ./
RUN npm ci

# Copier tout le reste
COPY . .

# Build les assets Vite
RUN npm run build && rm -rf node_modules

# Permissions storage
RUN chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Variables d'environnement
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/tmp/database.sqlite
ENV SESSION_DRIVER=file
ENV CACHE_STORE=file
ENV LOG_CHANNEL=stderr

# Préparer la base SQLite
RUN mkdir -p /tmp && touch /tmp/database.sqlite

EXPOSE 8000

CMD php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear && \
    php artisan migrate --force --no-interaction && \
    php artisan serve --host=0.0.0.0 --port=8000
