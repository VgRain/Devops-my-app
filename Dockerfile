# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy all your project files to Apache's web root
COPY . /var/www/html/

# Enable Apache mod_rewrite if you're using .htaccess
RUN a2enmod rewrite

# Set permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for HTTP
EXPOSE 80
