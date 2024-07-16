
## DHCP Server
Install DHCP Server on Cent OS
```bash
yum update
yum install dhcp-server -y
```
Config DHCP
```bash
nano /etc/dhcp/dhcpd.conf
```
Insert cmd in dhcpd.conf
```bash
subnet 192.168.100.0 netmask 255.255.255.0 {
        range 192.168.100.10 192.168.100.100;
        option subnet-mask 255.255.255.0;
        option broadcast-address 192.168.100.255;
        option routers 192.168.100.1;
        option domain-name-servers 8.8.8.8;
        default-lease-time 600;
        max-lease-time 7200;
}
```
Start DHCP Server
```bashnmc
systemctl start dhcpd
systemctl enable dhcpd
```
Config Firewall
```bash
sudo firewall-cmd --add-service=dhcp --permanent
sudo firewall-cmd --reload
```
Config Hostname & Network Card
```bash
sudo nmtui
```
