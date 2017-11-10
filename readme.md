# OSDASH #
OSTicket dashboard escrito en PHP + HTML/CSS/Bootstrap + JS

## Versión 0.1 ##

## Entorno de desarrollo ##
### Vagrant ###
Requiere tener instalado Vitualbox + Vagrant
Requiere los siguientes plugins Vagrant:
- vagrant-mutate 
- vagrant-vbguest 
- vagrant-hosts 
- vagrant-hostmanager 
- vagrant-exec 
- vagrant-cachier
- vagrant-scp

Ejecución: 
vagrant up lamp --provider=virtualbox

(ver Vagrantfile)


### LXD ###
Requiere tener instalado LXD (Ubuntu 14.04 o superiores)
Más info en lxd.md

## HOSTS ##
Agregar:
10.11.12.12 bydefault.dev osdash.bydefault.dev #VAGRANT

10.216.235.225 bydefault.dev osdash.bydefault.dev #LXD (IP EJEMPLO)

## BD ##
Ver archivo config.cnf (para Vagrant)