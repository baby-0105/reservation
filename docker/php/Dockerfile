FROM php:8.1-apache

# 必要なパッケージをインストール
RUN apt-get update && apt-get install -y \
    unzip \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install pdo_mysql gd

# Apache の設定
RUN a2enmod rewrite
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

