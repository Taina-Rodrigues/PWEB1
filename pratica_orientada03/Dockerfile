FROM php:8.2-apache
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y --no-install-recommends zip unzip && rm -rf /var/lib/apt/lists/*

ENV APACHE_DOCUMENT_ROOT /var/www/html/frontend
RUN sed -ri 's!DocumentRoot /var/www/html!DocumentRoot ${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri 's!<Directory /var/www/html>!<Directory ${APACHE_DOCUMENT_ROOT}>!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

<<<<<<< HEAD
RUN printf 'Alias /backend /var/www/html/backend\n<Directory /var/www/html/backend>\n    Require all granted\n</Directory>\n' > /etc/apache2/conf-available/backend.conf && a2enconf backend

=======
>>>>>>> 6e34ab8 (Docker configurado)
COPY . /var/www/html

EXPOSE 80
