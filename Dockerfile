FROM ubuntu:22.04

ENV DEBIAN_FRONTEND="noninteractive" TZ="Europe/Lisbon"
ENV APACHE_RUN_USER  www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR   /var/log/apache2
ENV APACHE_PID_FILE  /var/run/apache2/apache2.pid
ENV APACHE_RUN_DIR   /var/run/apache2
ENV APACHE_LOCK_DIR  /var/lock/apache2

RUN apt-get update && apt-get install -y --no-install-recommends \
    apache2 \
    software-properties-common \
    supervisor \
    && apt-get clean \
    && rm -fr /var/lib/apt/lists/* \
    && apt install \
    && apt-get update \
    && apt-get install -y \
    apache2 \
    curl \
    git \
    libapache2-mod-php8.1 \
    vim \
    netcat \
    php8.1 \
    php8.1-common \
    php8.1-mysql \
    php8.1-zip \
    php8.1-gd \
    php8.1-mbstring \
    php8.1-curl \
    php8.1-xml \
    php8.1-bcmath \
    phpunit \
    s3cmd \
    unzip \
    && phpenmod mcrypt \
    && apt-get clean \
    && a2enmod rewrite \
    && chown -R www-data:www-data /var/www \
    && curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && mkdir -p $APACHE_RUN_DIR \
    && mkdir -p $APACHE_LOCK_DIR \
    && mkdir -p $APACHE_LOG_DIR \
    && rm -rf /etc/apache2/sites-available/000-default.conf \
    && rm -rf /etc/apache2/apache2.conf

ADD config/httpd.conf /etc/apache2/sites-available/000-default.conf
ADD config/apache2.conf /etc/apache2/

EXPOSE 8070
EXPOSE 3396
CMD ["/usr/sbin/apache2", "-D",  "FOREGROUND"]