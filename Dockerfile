# Imagen base oficial de PHP con Apache
FROM php:8.2-apache

# Instala dependencias necesarias para Laravel y extensiones de PHP
RUN apt-get update && apt-get install -y \
    libpq-dev unzip git curl libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Habilitar mod_rewrite en Apache (Laravel lo necesita)
RUN a2enmod rewrite

# Configurar Apache para usar /public como DocumentRoot
WORKDIR /var/www/html
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Cambiar DocumentRoot a public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Generar caché de configuración
RUN php artisan config:cache || true

EXPOSE 80
CMD ["apache2-foreground"]
