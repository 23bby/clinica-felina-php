# Usiamo un'immagine ufficiale PHP con Apache
FROM php:8.2-apache

# Installiamo le estensioni per il database (es. PDO MySQL)
RUN docker-php-ext-install pdo pdo_mysql

# Copiamo i file del tuo progetto nel container
COPY . /var/www/html/

# Diamo i permessi corretti
RUN chown -R www-data:www-data /var/www/html