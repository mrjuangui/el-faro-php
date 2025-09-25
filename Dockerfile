# Imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias para Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar mod_rewrite en Apache
RUN a2enmod rewrite

# Copiar el proyecto al contenedor
COPY . /var/www/html

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Copiar configuración de Apache
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf
