#!/bin/bash
set -e

cd /var/www/html

mkdir -p storage/logs
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p bootstrap/cache

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

if [ ! -f vendor/autoload.php ]; then
    composer install --no-interaction --prefer-dist
fi

if [ -f .env ]; then
    if ! grep -q "^APP_KEY=base64:" .env; then
        php artisan key:generate --force || true
    fi
fi

php artisan optimize:clear || true

service nginx start
exec php-fpm
