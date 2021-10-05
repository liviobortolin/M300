sudo apt-get update
sudo apt-get install -y docker.io
sudo docker pull apache
sudo docker run -d --name apache-server -p 8010:80 apache
sudo docker pull cloud
sudo docker run -d --name nextcloud-server -p 8020:80 nextcloud
sudo docker pull php
sudo docker run -d --name pgp-server -p 8030:80 php