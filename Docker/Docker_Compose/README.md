
## Docker

#### Install Docker Compose
```bash
sudo yum update
sudo yum install docker-compose-plugin
```
* Check Docker Compose Version
```bash
docker compose version
```

#### Create docker-compose.yml file in Docker Dir
* xxx = user in linux
```bash
cd /home/xxx/Docker
touch docker-compose.yml
```

#### Config docker-compose.yml
* Read Doc on https://docs.docker.com/compose/ 
```bash
sudo nano docker-compose.yml
```

#### Run Docker compose
```bash
docker compose up
```

* if use custom name yml file run with:
```bash
docker compose -f xxx.yml up
```

* if run backgroud insert -d
```bash
docker compose -f xxx.yml up -d
