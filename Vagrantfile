# -*- mode: ruby -*-
# vi: set ft=ruby :

require 'yaml'

#для debian8 box требуется
#vagrant plugin install vagrant-vbguest
#vagrant plugin install vagrant-hostsupdater

Vagrant.configure(2) do |config|
  config.vm.box = "debian/jessie64"
  config.vm.box_check_update = false

  config.vm.network "private_network", ip: "192.168.50.55"
  config.vm.hostname = "laravel-5-from-scratch.app"

  config.vm.synced_folder "./", "/home/project", mount_options: ["dmode=777","fmode=666"]

  config.vm.provider "virtualbox" do |vb|
    vb.cpus = 3
    vb.memory = 2024
  end

  config.vm.provision "shell", inline: <<-SHELL
    wget https://repo.percona.com/apt/percona-release_0.1-4.$(lsb_release -sc)_all.deb
    dpkg -i percona-release_0.1-4.$(lsb_release -sc)_all.deb
    apt-get update
    debconf-set-selections <<< 'percona-server-server-5.6 percona-server-server/root_password password dbpass'
    debconf-set-selections <<< 'percona-server-server-5.6 percona-server-server/root_password_again password dbpass'

    apt-get install -y percona-server-server-5.6
    apt-get install -y php5 php5-cli php5-mysqlnd

    a2dissite 000-default.conf
    echo '<VirtualHost *:80>' > /etc/apache2/sites-available/lara.conf
    echo '   ServerName laravel-5-from-scratch.app' >> /etc/apache2/sites-available/lara.conf
    echo '   DocumentRoot /home/project/public' >> /etc/apache2/sites-available/lara.conf
    echo '   <Directory /home>' >> /etc/apache2/sites-available/lara.conf
    echo '       Options FollowSymLinks' >> /etc/apache2/sites-available/lara.conf
    echo '       AllowOverride All' >> /etc/apache2/sites-available/lara.conf
    echo '       Require all granted' >> /etc/apache2/sites-available/lara.conf
    echo '   </Directory>' >> /etc/apache2/sites-available/lara.conf
    echo '</VirtualHost>' >> /etc/apache2/sites-available/lara.conf
    a2ensite lara.conf
    a2enmod rewrite

    service apache2 restart
  SHELL
end
