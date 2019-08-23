From php:7.2-fpm
RUN apt-get update && apt-get install -y \
  # libfreetype6-dev \
  # libjpeg-dev \
  # libjpeg62-turbo-dev \
  libpng-dev \
  zlib1g-dev \
  default-mysql-client \
  libpq-dev \
  gcc \
  unzip \
  git \
  curl \
  unzip \
  gnupg \
  vim \
  make \
&& docker-php-ext-install -j$(nproc) iconv \
# && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \  # Err
&& docker-php-ext-install -j$(nproc) gd \
&& docker-php-ext-install zip pdo_mysql
# composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
# laravel
RUN composer global require "laravel/installer"
# redis
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis
# node.js
RUN curl -sL https://deb.nodesource.com/setup_6.x | bash - \
    && apt-get update \
    && apt-get install -y nodejs
WORKDIR /var/www