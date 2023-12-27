FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set up the Apache virtual host configuration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default

# Set up permissions
RUN chown -R www-data:www-data /var/www/html

# Install PHP extensions
RUN apt-get update && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable mysqli pdo && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Copy .htaccess file from the project root to the Apache web server directory
COPY .htaccess /var/www/html/.htaccess