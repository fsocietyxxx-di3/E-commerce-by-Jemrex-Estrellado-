FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    default-mysql-client \
    unzip \
    wget \
    libzip-dev \
    zip \
    vim \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite
