
## DNS Server
Install DNS Server on Cent OS
```bash
yum install bind -y
```
Config file resolv.conf
```bash
sudo nano /etc/resolv.conf
```
Insert cmd in resolv.conf
```bash
search localdomain
nameserver 192.168.100.2
```
Config file named.conf
```bash
sudo nano /etc/named.conf
```
Insert cmd in named.conf\
:Line 11 Add Ip address 
```bash
listen-on port 53 { 127.0.0.1; 192.168.100.2;};
```
:Line 19 Add Ip address
```bash
allow-query     { localhost; 192.168.100.0/24;};
```
:Line 57 Add Zone
```bash
zone "ce.ksu" IN{
        type master;
        file "ce.ksu.direct";
        allow-update {none;};
};
zone "100.168.192.in-addr.arpa" IN {
        type master;
        file "ce.ksu.inverse";
        allow-update {none;};
};
```
Go to /var/named
```bash
sudo su
cd /var/named/
```

Copy file named.localhot to ce.ksu.direct
```bash
cp named.localhost ce.ksu.direct
```

Edit file ce.ksu.direct
```bash
$TTL 1D
@       IN SOA  server.ce.ksu.          root.ce.ksu. (
                                        0       ; serial
                                        1D      ; refresh
                                        1H      ; retry
                                        1W      ; expire
                                        3H )    ; minimum
        IN      NS              server.ce.ksu.
server  IN      A               192.168.100.2
www     IN      CNAME           server.ce.ksu.
```

Copy ce.ksu.direct to ce.ksu.inverse
```bash
cp ce.ksu.direct ce.ksu.inverse
```

Edit file ce.ksu.inverse
```bash
$TTL 1D
@       IN SOA  server.ce.ksu.          root.ce.ksu. (
                                        0       ; serial
                                        1D      ; refresh
                                        1H      ; retry
                                        1W      ; expire
                                        3H )    ; minimum
        IN      NS              server.ce.ksu.
server  IN      A               192.168.100.2
100     IN      PTR           server.ce.ksu.
```

Check named 
```bash
named-checkzone ce.ksu /var/named/ce.ksu.direct
named-checkzone ce.ksu /var/named/ce.ksu.inverse
```
Set Premission file
```bash
chmod 640 ce.ksu.direct 
chmod 640 ce.ksu.inverse
chown -R named:named ce.ksu.direct
chown -R named:named ce.ksu.inverse
```

Start Service 
```bash
systemctl restart named
systemctl enable named
```

Check Service Running
```bash
systemctl status named
```

Config Firewall
```bash
sudo firewall-cmd --add-service=dns --permanent
sudo firewall-cmd --reload
```