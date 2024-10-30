# Dockerfile

# Use an official PHP image with necessary extensions
FROM php:7.4-fpm

# Set the working directory in the container
WORKDIR /var/www/html/

# Install necessary extensions and dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copy the CodeIgniter app into the container
COPY . /var/www/html/

# Set appropriate permissions for CodeIgniter
RUN chown -R www-data:www-data /var/www/html
