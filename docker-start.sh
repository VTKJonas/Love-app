#!/bin/bash
set -e

# Port par défaut si non défini
export PORT=${PORT:-80}

echo "Starting on port $PORT"

# Mettre à jour le port Apache
sed -i "s/Listen \${PORT}/Listen $PORT/" /etc/apache2/ports.conf
sed -i "s/*:\${PORT}/*:$PORT/" /etc/apache2/sites-available/000-default.conf

# Laravel
php artisan config:clear
php artisan route:clear  
php artisan view:clear
php artisan migrate --force --no-interaction

# Démarrer Apache
apache2-foreground
