FROM php:8.1-fpm
# COPY app/ /var/www/app
WORKDIR /var/www/app
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install -j$(nproc) pdo pdo_mysql mysqli \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug