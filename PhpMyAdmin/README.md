## PhpMyAdmin
#### Install PHP
```bash
sudo yum install php php-mysqlnd php-json php-mbstring
```
#### Check PHP version
```bash
php -version
```
#### Test php in apache. Create file info.php 
```bash
sudo cd /var/www/html
sudo nano info.php
```
* Insert code in info.php 
```bash
<?php
phpinfo();
?>
```
Open browser and go URL/info.php
#### Enable EPEL repository
```bash
sudo yum config-manager --set-enabled crb
sudo yum install epel-release epel-next-release
```
#### Test EPEL repository
```bash
sudo yum repolist
```
#### Install PhpMyAdmin
```bash
sudo yum install phpmyadmin
```
#### Config phpmyadmin Require all granted
```bash
sudo nano /etc/httpd/conf.d/phpMyAdmin.conf
```
* Insert code below <Directory /usr/share/phpMyAdmin/> Require local (line 14) in phpMyAdmin.conf
```bash
Require all granted
```
#### Restart Apache
```bash
sudo systemctl restart httpd
```
#### Test PhpMyAdmin
* Open web browser and go URL/phpmyadmin

#### Congrats
