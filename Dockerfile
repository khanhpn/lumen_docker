FROM php:8.0.15-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
