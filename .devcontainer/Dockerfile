FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
  unzip wget vim default-mysql-client \
  libzip-dev zip \
  && docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite
