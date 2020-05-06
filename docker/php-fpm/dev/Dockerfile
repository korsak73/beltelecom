FROM php:7.2.11-fpm-alpine3.8

RUN apk add --no-cache --virtual .persistent-deps \
    freetype \
    tzdata \
    util-linux \
    bash

RUN set -xe \
	&& apk add --no-cache --virtual .build-deps \
		$PHPIZE_DEPS \
        freetype-dev \
        mysql-dev \
        libpng \
        libpng-dev \
        libjpeg-turbo \
        libjpeg-turbo-dev

RUN apk update && apk add --no-cache fontconfig curl curl-dev git

# Install Supervisor
RUN set -xe \
    && apk add --no-cache -u python py-pip \
    && pip install supervisor==3.3.1

# Install required PHP extensions
RUN set -xe \
    && docker-php-ext-install bcmath \
    && docker-php-ext-configure gd \
        --with-freetype-dir=/usr/lib/ \
        --with-png-dir=/usr/lib/ \
        --with-jpeg-dir=/usr/lib/ \
        --with-gd \
    && docker-php-ext-install mysqli pdo_mysql gd zip  \
    && pecl install xdebug-2.7.1

RUN  set -xe \
    && { \
        echo 'zend_extension=xdebug.so'; \
        echo 'xdebug.idekey=xdebug'; \
        echo 'xdebug.max_nesting_level=500'; \
        echo 'xdebug.remote_enable=On'; \
        echo 'xdebug.remote_connect_back=1'; \
        echo '/home/korsak/projects/saservicexdebug.remote_port=9001'; \
    } > $PHP_INI_DIR/conf.d/xdebug.ini

RUN set -ex \
    && cd /tmp \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer \
    && wget http://phar.phpunit.de/phpunit-6.5.phar \
    && mv phpunit-6.5.phar /usr/local/bin/phpunit \
    && chmod +x /usr/local/bin/phpunit

COPY ./docker/php-fpm/dev/php.ini $PHP_INI_DIR/
COPY ./docker/php-fpm/dev/php-fpm/www.conf $PHP_INI_DIR/php-fpm.d/

COPY ./docker/php-fpm/dev/supervisord.conf /etc/supervisord.conf

ADD . /var/www/html

#RUN set -xe \
#    && cd /var/www/html \
#    && composer install

# Set the container entrypoint
COPY ./docker/php-fpm/dev/entrypoint.sh /
RUN chmod 755 /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["/entrypoint.sh"]

VOLUME /var/www