
## Cmd
Basic Cmd on Cent OS\

(List): Lists files and directories in your current location.
```bash
ls
```
(Change Directory): Moves you to a different directory.
```bash
cd Document
```
(Move up): Goes to the parent directory.
```bash
cd ..
```
(Home directory): Takes you to your home directory.
```bash
cd ..
```
(Print Working Directory): Shows your current location in the file system
```bash
pwd
```
(Make Directory): Creates a new  directory.
```bash
mkdir alfa
```
(Remove Directory): Delete a directory.
```bash
rmdir alfa
```
(Create File): Creates a new, empty file.
```bash
touch alfa.py
```
(Copy): Copies files or directories.
```bash
cp alfa.py alfa-cp.py
```
(Move): Moves or renames files or directories.
```bash
mv alfa.py /home/alfa/
```
(Remove): Deletes files or directories.
```bash
rm alfa.py
```

@OS information

Shows detailed system information (kernel version, hostname, etc.).
```bash
uname -a
```
Shows now date. 
```bash
data
```
Show now calenda.
```bash
cal
```
Shows memory usage in megabytes.
```bash
free
```
Displays disk space usage in a human-readable format.
```bash
df
```
Displays running processes and their resource usage.
```bash
top
```
Lists all running processes with their details.
```bash
ps
```

Shows your current username.
```bash
whoami
```
(Switch User): Changes to another user (often requires the other user's password).
```bash
su
```
(Super User Do): Allows you to run commands with administrative privileges.
```bash
sudo
```

@USER MANAGE

(Add New User): Create new user.
```bash
sudo adduser newusername
```
(Add Password User): Create Password for user.
```bash
sudo passwd newusername
```
(Delete User): Delete user on os.
```bash
sudo userdel newusername
```

@NETWORK
Shows network interface information
```bash
ip a 
ifconfig
nmcli
```
Tests network connectivity to a specific host.
```bash
ping 8.8.8.8
```

Display history commands
```bash
history
```

Clear Screen on Terminal
```bash
clear
```