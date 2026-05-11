FROM php:8.2-fpm

# Install any necessary PHP extensions
RUN docker-php-ext-install pdo_mysql

# Set permissions for web root
RUN chown -R www-data:www-data /var/www/html

# Project files will be mounted or copied here
COPY . /var/www/html/
