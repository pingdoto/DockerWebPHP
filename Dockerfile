#Tugas

FROM php:7.2-apache
COPY content/index.php /var/www/html/

EXPOSE 80/tcp

