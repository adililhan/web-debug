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
php curl wget vim
strace tcpdump dnsutils
jq htop git tree ncdu iproute2
iputils-ping iputils-tracepath net-tools
bash-completion bash
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

