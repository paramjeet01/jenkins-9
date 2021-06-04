# Base image
FROM php:7.3.3-apache

# Php-Mysql Package installation
RUN apt-get update && apt-get upgrade -y 
RUN docker-php-ext-install mysqli

# Exposed port
EXPOSE 80

