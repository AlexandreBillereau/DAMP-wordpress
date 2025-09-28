FROM php:8.2-apache

# Installer outils nécessaires
RUN apt-get update && apt-get install -y \
    unzip git libzip-dev default-mysql-client \
    && docker-php-ext-install zip mysqli pdo pdo_mysql

# Installer Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Copier php.ini perso
COPY conf/php.ini /usr/local/etc/php/php.ini

# Copier le code
COPY htdocs/ /var/www/html/

# Assurer que Apache/PHP peut écrire dans le dossier
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Activer mod_rewrite pour WordPress
RUN a2enmod rewrite

# Exposer le port Apache
EXPOSE 80

# Faire tourner le container avec www-data
USER www-data
