FROM php:fpm-alpine

RUN cd /var/www
RUN composer install

CMD ["php-fpm"]

EXPOSE 9000