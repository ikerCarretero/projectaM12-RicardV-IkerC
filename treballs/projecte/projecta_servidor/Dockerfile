FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git curl zip unzip nginx \
    libpng-dev libonig-dev libxml2-dev libzip-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-autoloader

COPY . .
RUN composer dump-autoload --optimize

COPY docker/nginx.conf /etc/nginx/sites-enabled/default
COPY docker/start.sh /start.sh
RUN chmod +x /start.sh

RUN chown -R www-data:www-data storage && chmod -R 775 storage

EXPOSE 80
CMD ["/start.sh"]