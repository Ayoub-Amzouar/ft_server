#!/bin/bash

# Here we install the basic packages

apt-get update && apt-get install build-essential -y

# And here we install nginx

apt-get install nginx -y
mv -f /default /etc/nginx/sites-available/

# Installing wget command

apt-get install -y wget

rm -rf /var/lib/apt/list/*

# Installing phpmyadmin and php

apt-get install php php-fpm php-mysql php-gettext php-mbstring -y

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-english.tar.xz

tar -xf phpMyAdmin-4.9.7-english.tar.xz

mv phpMyAdmin-4.9.7-english phpmyadmin

mv /phpmyadmin /var/www/html
