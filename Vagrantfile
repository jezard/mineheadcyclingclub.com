# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network", ip: "192.168.2.100"

    #==============================

    # https://github.com/dotless-de/vagrant-vbguest

    # set auto_update to false, if you do NOT want to check the correct 
    # additions version when booting this machine
    config.vbguest.auto_update = false

    # do NOT download the iso file from a webserver
    config.vbguest.no_remote = true
    
    #==============================

    #and this: https://github.com/fgrehm/vagrant-cachier/

    #https://github.com/fgrehm/vagrant-cachier/blob/master/README.md
    if Vagrant.has_plugin?("vagrant-cachier")
      config.cache.scope = :box
      config.cache.synced_folder_opts = {
       type: :nfs,
       mount_options: ['rw', 'vers=3', 'tcp', 'nolock']
      }
    end

    config.vm.provision :shell, path: "bootstrap.sh"

end

