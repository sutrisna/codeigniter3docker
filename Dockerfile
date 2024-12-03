FROM php:7.4-apache
LABEL Name=sekolah Version=0.0.2
RUN apt-get -y update && apt-get install -y fortunes

# Install ekstensi PHP yang dibutuhkan CodeIgniter
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Salin kode aplikasi ke dalam container
COPY . /var/www/html

# Setel hak akses untuk folder
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Aktifkan modul Apache rewrite untuk CodeIgniter
RUN a2enmod rewrite