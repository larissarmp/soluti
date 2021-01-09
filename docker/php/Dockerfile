FROM php:7.4.1-fpm

RUN apt update
RUN apt install -y wget git unzip libpq-dev

RUN apt install -y npm \
  && npm install n -g \
  && n 8

RUN apt install -y zlib1g-dev mariadb-client libzip-dev libonig-dev libpng-dev libpango1.0-dev
RUN docker-php-ext-install -j$(nproc) zip pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer self-update

WORKDIR /var/www

RUN chown -R www-data:www-data /var/www

RUN composer global require "laravel/installer"
