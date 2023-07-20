FROM php:latest

WORKDIR /var/www/html

COPY . /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]