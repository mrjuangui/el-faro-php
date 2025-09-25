# Usar PHP 8.2 con Apache
FROM php:8.2-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_pgsql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Copiar todo el proyecto al contenedor
COPY . /var/www/html

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# Después de composer install
RUN php artisan migrate --force

# Dar permisos de escritura a storage y bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache



# Expone el puerto 10000 (o 8080)
EXPOSE 10000


# Define el directorio público como raíz del servidor
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
