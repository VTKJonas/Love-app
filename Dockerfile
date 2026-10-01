FROM php:8.4-apache

# Activer mod_rewrite pour Laravel
RUN a2enmod rewrite

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
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copier les fichiers de dépendances
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

COPY package.json package-lock.json ./
RUN npm ci

# Copier tout le reste
COPY . .

# Build les assets Vite
RUN npm run build && rm -rf node_modules

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Préparer la base SQLite
RUN mkdir -p /tmp && touch /tmp/database.sqlite && chown www-data:www-data /tmp/database.sqlite

# Config Apache — pointer sur public/
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Variables d'environnement par défaut
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/tmp/database.sqlite
ENV SESSION_DRIVER=file
ENV CACHE_STORE=file
ENV LOG_CHANNEL=stderr

# Script de démarrage
RUN echo '#!/bin/bash\n\
php artisan config:clear\n\
php artisan route:clear\n\
php artisan view:clear\n\
php artisan migrate --force --no-interaction\n\
apache2-foreground' > /start.sh && chmod +x /start.sh

EXPOSE 80

CMD ["/start.sh"]
