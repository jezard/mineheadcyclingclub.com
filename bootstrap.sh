#!/usr/bin/env bash

# Fedora:
# yum update -y
# yum install -y nano
# yum install -y httpd
# yum install -y php php-mysql
# service httpd start

# Ubuntu:
apt-get install -y apache2
apt-get install -y php5
apt-get install -y libapache2-mod-php5
apt-get install -y php5-mysql
apt-get install -y php5-curl
a2enmod rewrite
awk '/<Directory \/var\/www\/>/,/AllowOverride None/{sub("None", "All",$0)}{print}' /etc/apache2/apache2.conf > testfile.tmp && mv testfile.tmp /etc/apache2/apache2.conf
apachectl restart

#php -d error_reporting= -r '$res = ini_get("error_reporting"); var_dump($res)' E_ALL


#set vagrant dir to web root
if ! [ -L /var/www/html ]; then
  rm -rf /var/www/html
  ln -fs /vagrant /var/www/html
fi