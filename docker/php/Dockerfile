FROM phpdockerio/php74-fpm:latest

ARG UID
ARG GID

RUN usermod --non-unique --uid ${UID} www-data
RUN groupmod --non-unique --gid ${GID} www-data

RUN apt-get update -yqq
RUN apt-get install -yqq apt-utils 2>/dev/null
RUN apt-get upgrade -yqq

# php extension
RUN apt-get install -yqq \
    php7.4-memcache memcached \
    php7.4-mbstring \
    php7.4-pgsql \
    php7.4-intl

# composer
RUN apt-get install -yqq git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# crontab
RUN apt-get install -yqq cron nano

# supervisor
RUN apt-get install -yqq supervisor
ENTRYPOINT ["supervisord"]
CMD ["-n", "-c", "/etc/supervisor/supervisord.conf"]

# clean
RUN rm -rf /var/lib/apt/lists/*
RUN apt-get autoremove -yqq
RUN apt-get clean
