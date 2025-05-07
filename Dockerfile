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

# Establece DocumentRoot en public/
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Actualiza el archivo de configuración de Apache con la nueva raíz
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf

# Copia los archivos del proyecto al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala dependencias de Laravel en producción
RUN composer install --no-dev --optimize-autoloader

# Da permisos correctos a las carpetas necesarias de Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponer el puerto 80
EXPOSE 80

# Comando de arranque del contenedor
CMD ["apache2-foreground"]
