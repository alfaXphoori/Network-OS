## NFS Server

#### Install NFS Packages on Cent OS
```bash
sudo yum -y install nfs-utils
```
#### Create share folder using root
```bash
cd ~
mkdir -p /nfs/nfs-sv-1
```
#### Edit file Exports in /etc
```bash
sudo nano /etc/exports
```
+ Add configure
```bash
/nfs/nfs-sv-1 192.168.100.0/24(rw,sync,no_subtree_check)
```
#### Test configure /etc/exports
```bash
sudo exportfs -rav
```
### Config Firewall
```bash
sudo firewall-cmd --permanent --add-service=nfs
sudo firewall-cmd --reload
```
#### Start Nfs Server
```bash
sudo systemctl start nfs-server
sudo systemctl enable nfs-server
```
### Test on Windows 11
+ Start -> Run -> ip/url
```bash
\\nfs.ce.local\nfs\nfs-sv-1\
```
#### We did it
