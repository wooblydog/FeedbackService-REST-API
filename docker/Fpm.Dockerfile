FROM php:8.2-fpm

RUN apt-get update && apt-get install -y curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD docker/php.ini /usr/local/etc/php/conf.d/40-custom.ini
WORKDIR /var/www/public

CMD ["php-fpm"]
