## FTP Server

#### Install Vsftpdf Packages on Cent OS
```bash
sudo yum -y install vsftpd
```
#### Test Vsftpdf installed
```bash
netstat -antup | grep ftp
```
#### Edit file vsftpd
```bash
sudo nano /etc/vsftpd/vsftpd.conf
```
+ Add configure
```bash
write_enable=YES
chroot_local_user=YES
chroot_list_enable=YES
chroot_list_file=/etc/vsftpd.chroot_list
allow_writeable_chroot=YES
```
#### Create file vsftpd.chroot_list
```bash
sudo touch /etc/vsftpd.chroot_list
```
#### Create Ftp user
```bash
sudo adduser ftpuser
sudo passwd ftpuser
```
#### Config Firewall
```bash
sudo firewall-cmd --zone=public --add-service=ftp --permanent
sudo firewall-cmd --reload
```
#### Start Nfs Server
```bash
sudo systemctl start nfs-server
sudo systemctl enable nfs-server
```
#### Test on Windows 11
+ Using Fife zilla client software  https://filezilla-project.org/
```bash
user : ftpuser
pass : user1234
port : 21
```
#### We did it
