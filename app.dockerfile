FROM php:7.2-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    default-mysql-client --no-install-recommends \
    && pecl install mcrypt-1.0.2 \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-enable mcrypt 

# Install xdebug for development
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Copy the configuration file into xdebug, if running phpinfo() you see the loaded file is not this one, change the path accordingly. 
COPY xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
