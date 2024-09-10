## Docker MySQL & PhpMyAdmin
#### Pull Docker image MySQL
```bash
dcoker pull mysql
```

#### Run Docker MySql
```bash
docker run --name=dockersql -e MYSQL_ROOT_PASSWORD=user1234 -e MYSQL_DATABASE=CeUser -p 13306:3306 -d mysql
```

#### Test Exec Docker
* xxx = Container ID
```bash
docker exec -it xxx bash
```
* Login Mysql & Show database
```bash
mysql -u root -p
```
```bash
show databases;
```

#### Pull Docker image PhpMyAdmin
```bash
dcoker pull phpmyadmin/phpmyadmin
```

#### Run Docker PhpMyAdmin
```bash
docker run --name phpmyadmin -d --link dockersql:db -p 18080:80 phpmyadmin/phpmyadmin
```

#### Test PhpMyAdmin
* Go Website port 18080
```bash
http://www.ce.local:18080
```
