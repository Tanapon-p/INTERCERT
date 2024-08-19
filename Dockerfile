# Use the official PHP image with Apache
FROM php:8.2-apache

# Enable the necessary Apache modules
RUN a2enmod rewrite

# Copy custom Apache configuration to allow .htaccess
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Install any additional PHP extensions as needed (example)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Restart Apache to apply changes
CMD ["apache2-foreground"]