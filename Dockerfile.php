FROM php:7.1-apache

ADD --chmod=0755 ./install-php-extensions /usr/local/bin/
RUN install-php-extensions gd mysqli zip

RUN apt update && \
    apt install -y cron

RUN a2enmod headers && \
    a2enmod rewrite && \
    cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

ADD ./php.ini /usr/local/etc/php/conf.d/minthcm.ini

ADD --chmod=0755 run.sh /

CMD ["/run.sh"]
