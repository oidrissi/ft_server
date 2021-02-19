FROM debian:buster 

ENV AUTOINDEX on

RUN apt-get update
RUN apt-get install -y nginx wget vim mariadb-server php php-common openssl php-cli php-fpm php-json php-pdo php-mysql php-zip php-gd  php-mbstring php-curl php-xml php-pear php-bcmath
RUN wget https://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz && mv wordpress /var/www/html/ && rm -rf latest.tar.gz
COPY srcs/wordpress/wp-config.php /var/www/html/wordpress
COPY srcs/wordpress/wordpress.sql /
COPY srcs/default && srcs/default_off /etc/nginx/sites-available/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz && tar -xzvf phpMyAdmin-5.0.4-all-languages.tar.gz && mv phpMyAdmin-5.0.4-all-languages/ /var/www/html/phpmyadmin && rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz
COPY srcs/phpmyadmin/config.inc.php /var/www/html/phpmyadmin
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=MA/ST=rhamna/L=Benguerir/O=1337/CN=localhost' -keyout key.pem -out cert.pem
RUN mv *.pem /etc/ssl
COPY srcs/*.sh ./
CMD bash setup.sh