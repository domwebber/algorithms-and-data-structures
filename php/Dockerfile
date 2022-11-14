FROM php:cli-alpine as vendor

WORKDIR /usr/src/app

# Install Composer <https://getcomposer.org>
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

COPY composer.json composer.json
COPY composer.lock composer.lock
COPY . .

RUN composer install --no-interaction

RUN apk update && apk upgrade
RUN apk add build-base

ENV XDEBUG_MODE=coverage
RUN apk add --no-cache --update --virtual buildDeps autoconf \
    && pecl install xdebug \
    && pecl install apcu \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-enable opcache \
    && docker-php-ext-enable apcu \
    && apk del buildDeps

CMD pwd && composer -V && composer run-script test