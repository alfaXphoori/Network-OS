
## Docker

#### Add Docker Repository
```bash
sudo yum config-manager --add-repo=https://download.docker.com/linux/centos/docker-ce.repo
```
* Check docker on Repository
```bash
sudo yum repolist -v
```
* List docker version
```bash
yum list docker-ce --showduplicates | sort -r
```

#### Install Docker
```bash
sudo yum install docker-ce
```

#### Start & Enable Docker 
```bash
systemctl enabled docker
systemctl start docker
systemctl status docker
```

#### Add User to Docker
* user = user on cent os
```bash
sudo usermod -aG docker $(whoami)
sudo usermod -ag docker user
```

### Test Run Docker Container
```bash
docker run hello-world
```

#### Congrats
