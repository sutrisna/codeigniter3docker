FROM php:7.4-apache
LABEL Name=sekolah Version=0.0.2
RUN apt-get -y update && apt-get install -y fortunes

# Install ekstensi PHP yang dibutuhkan CodeIgniter
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Salin file composer.json dan composer.lock
COPY composer.json /var/www/html/
COPY composer.lock /var/www/html/

# Install dependensi yang tercantum di composer.json
RUN composer install --no-autoloader --no-scripts

# Salin kode aplikasi ke dalam container
COPY . /var/www/html

# Setel hak akses untuk folder
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Aktifkan modul Apache rewrite untuk CodeIgniter
RUN a2enmod rewrite