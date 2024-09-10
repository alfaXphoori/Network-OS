
## Docker Php-apache
#### Create Directory
*user = user in cent os
```bash
cd /home/user
mkdir Docker
```

#### Create Docker File
```bash
sudo nano Dockerfile
```

#### Create index.php 
```bash
sudo nano index.php
```

#### Build Docker image by Dockerfile
```bash
docker build . -t php-img
```

#### Run Docker image in Container
```bash
docker run -d -p 80:80 php-img
```

#### List Process container on Doker 
```bash
docker ps
```

#### Kill Process container on Doker 
* xxx = Container ID
```bash
docker kill xxxx
```
