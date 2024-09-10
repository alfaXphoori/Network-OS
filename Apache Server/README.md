
## Apache Web Server

#### Install Apache Packages on Cent OS
```bash
sudo yum install httpd httpd-tools -y
```
#### Run service of Apache server
```bash
systemctl enable httpd
systemctl start httpd
systemctl status httpd
```
#### Config Firewall
```bash
firewall-cmd --permanent --zone=public --add-service=http
firewall-cmd --permanent --zone=public --add-service=https
firewall-cmd --reload
```
#### Check Apache version
```bash
httpd -v
```
#### Create first website
```bash
cd /var/www/html
sudo nano index.html
```
* Insert code in index.html
```bash
<!DOCTYPE html>
<html>
<head>
<title>CE.local</title>
</head>
<body>

<h1>CE.local Website</h1>
<p>My first website.</p>

</body>
</html>
```
Open browser and insert URL server
#### Congrats
