# Use the official PHP image as the base
FROM php:apache

# Install the MySQLi extension
RUN docker-php-ext-install mysqli

# Set the working directory
WORKDIR /var/www/html

# Copy your application code into the container
COPY . /var/www/html
