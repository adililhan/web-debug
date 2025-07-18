# A container image used for debugging purposes

## Available Environment Variables

##### ***PORT***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Default: `80`
##### ***TEXT***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Default: `""` (It means print "Hello World!") [If the value is **"n/a"** nothing will be printed]
##### ***COLOR***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Default: `""` (Available values: `red`, `blue`, `green`, `yellow`)
##### ***HOSTNAME***&nbsp;-> Default: `false`
##### ***DEBUG***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> Default `false` (Prints the `$_SERVER` variable)

## Example docker run:

`docker run -dit -e PORT=8181 -e COLOR=yellow -e TEXT="Hello from container" -e HOSTNAME=true --net=host --name web ailhan/web-debug`

If you don't want to print anything:

`docker run -dit -e TEXT="n/a" --name web ailhan/web-debug`


## Installed packages:

```
php curl wget vim strace
net-tools tcpdump dnsutils iputils-ping iputils-tracepath
git jq bash bash-completion htop
tree ncdu iproute2 stress-ng apache2-utils
bind9-dnsutils bird bridge-utils busybox conntrack
dhcping ethtool file fping iftop
iperf iperf3 ipset iptables iptraf-ng
ipvsadm httpie ldnsutils liboping0 ltrace
libcrypt-ssleay-perl libnet-ssleay-perl mtr snmp netcat-openbsd
nftables ngrep nmap nmap-common openssl
python3-pip python3-setuptools scapy socat speedtest-cli
software-properties-common openssh-client tcptraceroute tshark util-linux
zsh swaks trippy websocat
```

## Base Image

`ubuntu:latest`

## Web Server

Built-in web server of PHP

`php -S 0.0.0.0:$PORT`

## GitHub Location

[https://github.com/adililhan/web-debug](https://github.com/adililhan/web-debug)

## Docker Hub Location
[https://hub.docker.com/r/ailhan/web-debug](https://hub.docker.com/r/ailhan/web-debug)

