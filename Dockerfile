FROM phpdockerio/php74-fpm:latest

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    nano \
    curl \
    # php ext
    zlib1g-dev \
    libpng-dev \
    libzip-dev \
    libxml2-dev \
    zip \
    unzip \
    php-zip \
    php7.4-mysql \
    libpng-dev \
    libonig-dev \
    libxml2-dev
    # unzipdock

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
# RUN docker-php-ext-install pdo_mysql gd xml zip
# mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Set working directory
WORKDIR /var/www

ADD . /var/www/

RUN cp .env.example .env

RUN composer install

#RUN php artisan key:generate

#RUN php artisan storage:link

#RUN composer dumpautoload

#RUN chmod -R 777 storage/
#RUN chmod -R 777 bootstrap/
#RUN chmod -R 777 database/


#USER $user