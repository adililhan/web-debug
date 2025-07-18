FROM ubuntu:latest
ARG DEBIAN_FRONTEND=noninteractive
WORKDIR /app
COPY . .
ENV PORT 80
ENV TEXT ""
ENV COLOR ""
ENV HOSTNAME false
ENV DEBUG false
RUN apt update && apt install -y \
    php \
    curl \
    wget \
    vim \
    strace \
    net-tools \
    tcpdump \
    dnsutils \
    iputils-ping \
    iputils-tracepath \
    git \
    jq \
    bash \
    bash-completion \
    htop \
    tree \
    ncdu \
    iproute2 \
    stress-ng \
    apache2-utils \
    bind9-dnsutils \
    bird \
    bridge-utils \
    busybox \
    conntrack \
    dhcping \
    ethtool \
    file \
    fping \
    iftop \
    iperf \
    iperf3 \
    ipset \
    iptables \
    iptraf-ng \
    ipvsadm \
    httpie \
    ldnsutils \
    liboping0 \
    ltrace \
    libcrypt-ssleay-perl \
    libnet-ssleay-perl \
    mtr \
    snmp \
    netcat-openbsd \
    nftables \
    ngrep \
    nmap \
    nmap-common \
    openssl \
    python3-pip \
    python3-setuptools \
    scapy \
    socat \
    speedtest-cli \
    software-properties-common \
    openssh-client \
    tcptraceroute \
    tshark \
    util-linux \
    zsh \
    swaks \
    && add-apt-repository ppa:fujiapple/trippy && apt install trippy && wget -qO /usr/local/bin/websocat https://github.com/vi/websocat/releases/latest/download/websocat.x86_64-unknown-linux-musl && chmod a+x /usr/local/bin/websocat && rm -rf /var/lib/apt/lists/*
CMD exec php -S 0.0.0.0:$PORT
