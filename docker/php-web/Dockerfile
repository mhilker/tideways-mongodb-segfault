FROM composer:1.8.5 as composer

# ===== BASE =====================================
FROM php:7.4.3-fpm-buster as base

WORKDIR /app/

RUN chown -R www-data:www-data /app/

RUN apt-get update \
 && apt-get install -y \
        git unzip \
        libzip-dev \
        # MongoDb
        libicu-dev libcurl4-openssl-dev pkg-config libssl-dev \
 && rm -rf /var/lib/apt/lists/* \
 && pecl install -o -f mongodb \
 && rm -rf /tmp/pear \
 && docker-php-ext-enable mongodb

# PHP Configs kopieren
COPY ./docker/php-web/php-custom.ini /usr/local/etc/php/conf.d/
COPY ./docker/php-web/fpm-pool.conf /usr/local/etc/php-fpm.d/www.conf

# ===== BUILD ====================================
FROM base as build

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY composer.* /app/

# composer install
RUN chown www-data: /var/www/
USER www-data
RUN composer global require hirak/prestissimo
RUN composer install --no-progress

USER root

# ===== DEVELOPMENT ==============================
FROM base as development

# Install xdebug
RUN apt-get update \
 && apt-get install --no-install-recommends --assume-yes --quiet ca-certificates curl git \
 && rm -rf /var/lib/apt/lists/* \
 && pecl install xdebug-2.9.1 \
 && docker-php-ext-enable xdebug
COPY ./docker/php-web/php-xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini
EXPOSE 9000

# tideways
RUN apt-get update && apt-get install -yq --no-install-recommends gnupg2 curl sudo ca-certificates
RUN echo 'deb http://s3-eu-west-1.amazonaws.com/tideways/packages debian main' > /etc/apt/sources.list.d/tideways.list && \
    curl -sS 'https://s3-eu-west-1.amazonaws.com/tideways/packages/EEB5E8F4.gpg' | apt-key add - \
  && apt-get update \
  && apt-get install tideways-php

COPY ./docker/php-web/tideways.ini /usr/local/etc/php/conf.d/tideways.ini

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY --from=build /app /app

COPY . /app

USER 1000:1000
