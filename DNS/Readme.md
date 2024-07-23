
## DNS Server
#### Install DNS Server on Cent OS
```bash
yum install -y bind bind-utils
```
#### Test Package install bind
```bash
rpm -qa| grep bind
```
#### Start dns server 
```bash
systemctl start named
systemctl enable named
```
#### Change Hostname 
+ Change hostname to ns1.ce.local
```bash
nmtui
```

#### Config file named.conf
```bash
sudo nano /etc/named.conf
```
#### Insert ip Address in named.conf
+ Ip address in Line 
```bash
listen-on port 53 { 127.0.0.1; 192.168.100.2;};
```
+ Add Ip address
```bash
allow-query     { localhost; 192.168.100.0/24;};
```
#### Create Forward and Reverse Lookup Zone file.
```bash
sudo nano /etc/named.rfc1912.zones
```
+ Forward Zone
```bash
zone "ce.local" {
        type master;
        file "forward.ce.local";
};
```
+ Reverse Zone
```bash
zone "100.168.192.in-addr.arpa" {
        type master;
        file "reverse.ce.local";
};
```

#### Create forward lookup file
```bash
sudo nano /var/named/forward.ce.local
```
+ Add config file
```bash
$TTL 604800
@               IN      SOA     ns1.ce.local. root.ns1.ce.local. (
                                2 ; Serial
                                604800 ; Refresh
                                86400 ; Retry
                                2419200 ; Expire
                                604800 ) ; Negative Cache TTL
@               IN      NS      ns1.ce.local.
ns1             IN      A       192.168.100.2
ftp             IN      A       192.168.100.2
www             IN      A       192.168.100.2
@               IN      AAAA    ::1
```
#### Create reverse lookup file
```bash
sudo nano /var/named/reverse.ce.local
```
+ Add config file
```bash
$TTL 604800
@               IN      SOA ns1.ce.local. root.ns1.ce.local. (
                                1 ; Serial
                                604800 ; Refresh
                                86400 ; Retry
                                2419200 ; Expire
                                604800 ) ; Negative Cache TTL
@               IN      NS      ns1.ce.local.
ns1             IN      A       192.168.100.2
2               IN      PTR     ns1.ce.local
```

#### Test config file
```bash
named-checkconf
named-checkzone ce.local /var/named/forward.ce.local
named-checkzone ce.local /var/named/reverse.ce.local
```

#### Config Firewall
```bash
sudo firewall-cmd --add-service=dns --permanent
sudo firewall-cmd --reload
```

#### Set Premission file
```bash
chmod 640 /var/named/forward.ce.local
chmod 640 /var/named/reverse.ce.local
```

#### Restart dns server 
```bash
systemctl start named
systemctl enable named
```

#### Config file resolv.conf
```bash
sudo nano /etc/resolv.conf
```
+ Insert cmd in resolv.conf
```bash
search ce.local
nameserver 192.168.100.2
```

#### Check Service Running
```bash
systemctl status named
```

#### Verify DNS Server
+ Check by name
```bash
dig ns1.ce.local
```
+ Check by ip
```bash
dig -x 192.168.100.2
```

#### Verify DNS Server by nslookup
+ Check by name
```bash
nslookup ns1.ce.local
```
+ Check by ip
```bash
nslookup 192.168.100.2
```
