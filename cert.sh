#!/bin/bash

mkdir /etc/certificates
touch /etc/domain
domain=$(cat /etc/domain)
apt install socat -y
wget https://raw.githubusercontent.com/acmesh-official/acme.sh/master/acme.sh
bash acme.sh --install
rm acme.sh
cd .acme.sh
bash acme.sh --register-account -m senowahyu62@gmail.com
bash acme.sh --issue --standalone -d $domain --force
