FROM php:8.2-apache
RUN a2enmod rewrite
COPY . /var/www/html/a-b-f4tu.onrender.com
RUN chown -R www-data:www-data /var/www/html/a-b-f4tu.onrender.com
EXPOSE 80