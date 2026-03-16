FROM php:8.4-fpm

RUN apt-get update && apt-get install -y wget libpq-dev zip \
    && docker-php-ext-install pdo pdo_pgsql \
    && wget https://getcomposer.org/composer-stable.phar -O /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer
