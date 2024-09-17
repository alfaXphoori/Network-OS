## MongoDB Docker Compose

#### Create Docker Compose
```bash
cd /home/xxx/Docker
touch docker-compose-mongo.yml
```

#### Add Environment for Auth
```bash
    environment:
      MONGO_INITDB_ROOT_USERNAME: admin
      MONGO_INITDB_ROOT_PASSWORD: user1234
```

#### Run Docker compose MongoDB
```bash
docker compose -f docker-compose-mongo.yml up -d
```