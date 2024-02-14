FROM php:cli-alpine as vendor

WORKDIR /usr/src/app

# Install Composer <https://getcomposer.org>
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

COPY composer.* ./
RUN composer install --no-interaction && \
  apk update && \
  apk upgrade && \
  apk add build-base && \
  apk add --no-cache --update --virtual buildDeps autoconf && \
  pecl install xdebug && \
  pecl install apcu && \
  docker-php-ext-enable xdebug && \
  docker-php-ext-enable opcache && \
  docker-php-ext-enable apcu && \
  apk del buildDeps

COPY . .

ENV XDEBUG_MODE=coverage
CMD pwd && composer -V && composer run-script test
