#!bin/bash

service nginx start

service php7.3-fpm start

service mysql start

# create wordpress database & set our user wordpress

mysql -u root -proot -e "CREATE DATABASE wordpress"
mysql -u root -proot -e "CREATE USER 'sesco' IDENTIFIED BY 'password'"
mysql -u root -proot -e "GRANT ALL PRIVILEGES ON *.* TO 'sesco'"
mysql -u root -proot wordpress < localhost.sql

/bin/bash
