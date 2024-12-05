FROM php:7.4-apache
LABEL Name=sekolah-app Version=0.0.2
RUN apt-get -y update && apt-get install -y fortunes libzip-dev unzip

# Install ekstensi PHP yang dibutuhkan CodeIgniter
RUN docker-php-ext-install mysqli pdo pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Salin kode aplikasi ke dalam container
COPY . /var/www/html
WORKDIR /var/www/html

# Install dependensi yang tercantum di composer.json
RUN composer require fzaninotto/faker

# Setel hak akses untuk folder
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Aktifkan modul Apache rewrite untuk CodeIgniter
RUN a2enmod rewrite