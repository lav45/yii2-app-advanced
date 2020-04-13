FROM phpdockerio/php74-fpm:latest

ARG UID
ARG GID

RUN usermod --non-unique --uid ${UID} www-data
RUN groupmod --non-unique --gid ${GID} www-data

RUN apt-get update -yqq
RUN apt-get install -yqq apt-utils
RUN apt-get upgrade -yqq

# php extension
RUN apt-get install -yqq \
    php-memcache memcached \
    php-pgsql \
    php-intl

# composer
RUN apt-get install -yqq git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# supervisor
RUN apt-get install -yqq supervisor
ENTRYPOINT ["supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]

# clean
RUN rm -rf /var/lib/apt/lists/*
RUN apt-get autoremove -y
RUN apt-get clean
