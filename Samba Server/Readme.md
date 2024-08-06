
## Samba Server

#### Install Samba Server on Cent OS
```bash
sudo yum -y install samba samba-client
```
#### Start and enable smb service
```bash
rpm -qa| grep smb
```
#### Start and enable smb service 
```bash
systemctl start smb
systemctl enable smb
```
#### Config Firewall
```bash
sudo firewall-cmd --add-service=samba --permanent
sudo firewall-cmd --reload
```
#### Create a directory to be shared
```bash
cd /
sudo mkdir -p /samba/Share
```
#### Change type to samba_share_t of shared directory
```bash
sudo chcon -t samba_share_t /samba/Share
```
#### Config smb.conf file
```bash
sudo nano /etc/samba/smb.conf
```
+ Add configure
```bash
[Samba Share]
        comment = Share Drive
        path = /samba/Share
        browseable = yes
        writeable = yes
        guest ok = yes
        guest only = yes
        read only = no
        valid users = smbuser
```
#### Create a user on samba 
```bash
useradd -s /sbin/nologin smbuser
```
+ Assign  password for user
```bash
smbpasswd -a smbuser
```
#### Restart smb service
```bash
systemctl restart smb
```
