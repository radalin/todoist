FROM php:fpm-alpine

# Let's add xdebug for easier development,
# On production we might want to get rid of this though..
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-2.9.8 \
    && docker-php-ext-enable xdebug

CMD ["php-fpm"]

EXPOSE 9000