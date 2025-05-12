# Use PHP with Apache
FROM php:8.2-apache

# Install mysqli
RUN docker-php-ext-install mysqli

# Optional: Enable mod_rewrite (if you're using .htaccess)
RUN a2enmod rewrite

# Optional: Suppress Apache ServerName warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy your site files
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose default Apache port
EXPOSE 80
