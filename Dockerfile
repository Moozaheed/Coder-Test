FROM php:8.2-fpm

# Install nginx + required tools
RUN apt-get update && apt-get install -y \
    nginx \
    && docker-php-ext-install pdo_mysql

# Remove default nginx config
RUN rm /etc/nginx/sites-enabled/default

# Add custom nginx config
COPY /nginx/default.conf /etc/nginx/conf.d/default.conf

# Copy project
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 8083
EXPOSE 8083

# Start PHP-FPM and Nginx together
CMD service nginx start && php-fpm
