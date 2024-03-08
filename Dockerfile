FROM php:8.3-fpm

RUN apt-get update && \
    apt-get install -y git libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /app

WORKDIR /app

COPY ./.env.example ./.env

# RUN composer install

CMD php -S 0.0.0.0:8000 -t public/