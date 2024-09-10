
## MariaDB Server
#### Install MariaDB Packages on Cent OS
```bash
sudo yum install mariadb-server mariadb
```
#### Run service of MariaDB server
```bash
systemctl enable mariadb
systemctl start mariadb
systemctl status mariadb
```
#### Config mysql
```bash
mysql_secure_installation
```
* Switch to unix socket authentication [Y/n] n
* Change the root password? [Y/n] n
* Remove anonymous users? [Y/n] Y
* Disallow root login remotely? [Y/n] Y
* Remove test database and access to it? [Y/n] Y
* Remove test privilege tables now? [Y/n] Y

### Add New user MariaDB
#### Login mysql
```bash
mysql -u root -p
```
#### Create user
```bash
CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
```
* Change username & password
#### Grant user privilege
```bash
GRANT ALL PRIVILEGES ON *.* TO 'username'@localhost IDENTIFIED BY 'userpassword';
```
```bash
FLUSH PRIVILEGES;
```
#### Show user of MariaDB
```bash
SELECT User FROM mysql.user;
```
#### Show user privilege
```bash
SHOW GRANTS FOR 'username'@localhost;
```
#### Congrats
