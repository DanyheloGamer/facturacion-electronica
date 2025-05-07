# Usa una imagen base con PHP 8.4, Composer y extensiones comunes
FROM php:8.4-apache

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libssl-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring xml curl

# Habilita mod_rewrite de Apache (Laravel lo necesita)
RUN a2enmod rewrite

# Copia archivos del proyecto al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala las dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Da permisos a Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto 80
EXPOSE 80

# Comando de arranque
CMD ["apache2-foreground"]
