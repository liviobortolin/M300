Vagrant.configure(2) do |config|
  
  config.vm.define "web" do |web|
  web.vm.box = "ubuntu/xenial64"
  web.vm.hostname = "web01"
  web.vm.network "private_network", ip:"192.168.10.150" 
  web.vm.network "forwarded_port", guest:80, host:8080, auto_correct: true  
web.vm.provider "virtualbox" do |vb|
  vb.memory = "512"  
end
web.vm.synced_folder ".", "/var/www/html"
web.vm.provision "shell", inline: <<-SHELL
sudo apt-get update
sudo apt-get -y install debconf-utils apache2 nmap
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password admin'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password admin'
sudo apt-get -y install php libapache2-mod-php php-curl php-cli php-mysql php-gd mysql-client  
# Admininer SQL UI 
sudo mkdir /usr/share/adminer
sudo wget "http://www.adminer.org/latest.php" -O /usr/share/adminer/latest.php
sudo ln -s /usr/share/adminer/latest.php /usr/share/adminer/adminer.php
echo "Alias /adminer.php /usr/share/adminer/adminer.php" | sudo tee /etc/apache2/conf-available/adminer.conf
sudo a2enconf adminer.conf 
sudo service apache2 restart 
echo '127.0.0.1 localhost web01\n192.168.55.100 db01' > /etc/hosts
SHELL
end

config.vm.define "db" do |db|
  db.vm.box = "ubuntu/xenial64"
db.vm.provider "virtualbox" do |vb|
  vb.memory = "1024"  
end
db.vm.hostname = "db01"
db.vm.network "private_network", ip:"192.168.10.151"
db.vm.provision "shell", inline: <<-SHELL
    # Debug ON!!!
    set -o xtrace
	sudo apt-get update
	sudo apt-get -y install debconf-utils 
	sudo apt-get -y install apache2 
	sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password admin'
	sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password admin'
	sudo apt-get -y install php libapache2-mod-php php-curl php-cli php-mysql php-gd mysql-client mysql-server 
	# Admininer SQL UI 
	sudo mkdir /usr/share/adminer
	sudo wget "http://www.adminer.org/latest.php" -O /usr/share/adminer/latest.php
	sudo ln -s /usr/share/adminer/latest.php /usr/share/adminer/adminer.php
	echo "Alias /adminer.php /usr/share/adminer/adminer.php" | sudo tee /etc/apache2/conf-available/adminer.conf
	sudo a2enconf adminer.conf 
	sudo service apache2 restart 
SHELL
end

config.vm.define "fw" do |fw|
  fw.vm.box = "ubuntu/xenial64"
fw.vm.provider "virtualbox" do |vb|
  vb.memory = "1024"  
end
fw.vm.hostname = "fw01"
fw.vm.network "private_network", ip:"192.168.10.152"
fw.vm.provision "shell", inline: <<-SHELL
sudo apt-get update
#schliessen aller Ports
sudo ufw deny out to any
#ssh port öffnen
sudo ufw allow from any to any port 22
#http & https port öffnen
sudo ufw allow from any to any port 80
sudo ufw allow from any to any port 443
sudo ufw enable 
SHELL
end


end

# commented out:

  # -*- mode: ruby -*-
  # vi: set ft=ruby :

  # All Vagrant configuration is done below. The "2" in Vagrant.configure
  # configures the configuration version (we support older styles for
  # backwards compatibility). Please don't change it unless you know what
  # you're doing.

  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # NOTE: This will enable public access to the opened port
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine and only allow access
  # via 127.0.0.1 to disable public access
  # config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  # config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Enable provisioning with a shell script. Additional provisioners such as
  # Ansible, Chef, Docker, Puppet and Salt are also available. Please see the
  # documentation for more information about their specific syntax and use.
  # config.vm.provision "shell", inline: <<-SHELL
  #   apt-get update
  #   apt-get install -y apache2
  # SHELL
