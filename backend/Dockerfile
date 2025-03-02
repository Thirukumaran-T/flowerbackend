# Use the official PHP image with Apache
FROM php:8.1-apache

# Enable mod_rewrite for better URL handling (optional)
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy all files from the backend folder to the container
COPY . .

# Expose port 80 for web access
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
