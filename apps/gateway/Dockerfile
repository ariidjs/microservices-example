FROM php:7.4-fpm
RUN apt-get update && apt-get install -y

USER root

RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# lumen/laravel packages
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www/gateway


# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory contents
COPY . /var/www/gateway

# Copy existing application directory permissions
COPY --chown=www:www . /var/www/gateway

# Expose port 9000 and start php-fpm server
EXPOSE 8087
CMD ["php-fpm"]
