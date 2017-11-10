# Creación LAMP LXD #
lxc image copy images:ubuntu/xenial/amd64 local: --alias=ubuntu1604
lxc launch ubuntu1604 lamp
lxc exec lamp -- apt-get install lamp-server^
lxc config device add lamp osdash disk source=/home/marcelo/Dropbox/Repos/OSTicket-dashboard path=/var/www/html/osdash
lxc file push sql/osticket.sql lamp/root/

#VHOST#
lxc file push 010-osdash.bydefault.dev.conf lamp/etc/apache2/sites-available/

#/etc/apache2/sites-available/010-osdash.bydefault.dev.conf
#<VirtualHost *:80>
#        ServerName osdash.bydefault.dev
#        ServerAdmin webmaster@localhost
#        DocumentRoot /var/www/html/osdash
#
#        ErrorLog ${APACHE_LOG_DIR}/error.log
#        CustomLog ${APACHE_LOG_DIR}/access.log combined
#</VirtualHost>


(lxc exec lamp -- /bin/bash)

#HOSTS#
#/etc/hosts
echo "127.0.1.1 lamp bydefault.dev osdash.bydefault.dev" >> /etc/hosts

#A2ENSITE#
a2ensite 010-osdash.bydefault.dev && service apache2 restart

#BASE DE DATOS#
mysql -u root -p -e "create database osticket;" 
mysql -u root -p osticket < /root/osticket.sql

