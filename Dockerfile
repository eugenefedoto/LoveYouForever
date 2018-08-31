FROM php:7.2-apache
COPY . /var/www/

# Change DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/public/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN chmod -R 777 /var/www/storage
RUN a2enmod rewrite