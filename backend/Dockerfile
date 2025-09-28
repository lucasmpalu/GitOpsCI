FROM php:8.0-fpm

RUN docker-php-ext-install pdo pdo_mysql mysqli

WORKDIR /var/www/html

COPY . /var/www/html

# Opcional: cambiar permisos (evita problemas de escritura en algunos casos)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
