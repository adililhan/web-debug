FROM ubuntu:latest
ARG DEBIAN_FRONTEND=noninteractive
WORKDIR /app
COPY . .
ENV PORT 80
ENV TEXT "n/a"
ENV COLOR ""
ENV HOSTNAME false
ENV DEBUG false
RUN apt update && apt install php curl wget vim strace net-tools tcpdump dnsutils net-tools iputils-ping iputils-tracepath git jq bash bash-completion htop tree ncdu iproute2 -y
CMD exec php -S 0.0.0.0:$PORT
