FROM php:8.2-apache

RUN apt-get update
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli pdo