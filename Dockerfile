FROM php:8.2-fpm

# Install Nginx
RUN apt-get update && apt-get install -y nginx && rm -rf /var/lib/apt/lists/*

# Copy Nginx configuration
COPY nginx/default.conf /etc/nginx/sites-available/default

# Copy project files
COPY . /var/www/html/

# Copy and set permissions for entrypoint script
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Set permissions for web root
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["/usr/local/bin/entrypoint.sh"]
