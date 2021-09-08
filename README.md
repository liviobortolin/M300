# M300 - Plattformübergreifende Dienste in ein Netzwerk integrieren
## LB2 Vagrantfile

### Einleitung


#### Vagrant-Befehle
Usage: vagrant [optionen] <Befehl> [<args>]

Mit dem Befehl "vagrant list-commands" werden alle Befehle aufgeführt:

* autocomplete    manages autocomplete installation on host
* box             manages boxes: installation, removal, etc.
* cap             checks and executes capability
* cloud           manages everything related to Vagrant Cloud
* destroy         stops and deletes all traces of the vagrant machine
* docker-exec     attach to an already-running docker container
* docker-logs     outputs the logs from the Docker container
* docker-run      run a one-off command in the context of a container
* global-status   outputs status Vagrant environments for this user
* halt            stops the vagrant machine
* help            shows the help for a subcommand
* init            initializes a new Vagrant environment by creating a Vagrantfile
* list-commands   outputs all available Vagrant subcommands, even non-primary ones
* login
* package         packages a running vagrant environment into a box
* plugin          manages plugins: install, uninstall, update, etc.
* port            displays information about guest port mappings
* powershell      connects to machine via powershell remoting
* provider        show provider for this environment
* provision       provisions the vagrant machine 
* rdp             connects to machine via RDP
* reload          restarts vagrant machine, loads new Vagrantfile configuration
* resume          resume a suspended vagrant machine
* rsync           syncs rsync synced folders to remote machine
* rsync-auto      syncs rsync synced folders automatically when files change
* snapshot        manages snapshots: saving, restoring, etc.
* ssh             connects to machine via SSH
* ssh-config      outputs OpenSSH valid configuration to connect to the machine
* status          outputs status of the vagrant machine
* suspend         suspends the machine
* up              starts and provisions the vagrant environment
* upload          upload to machine via communicator
* validate        validates the Vagrantfile
* version         prints current and latest Vagrant version
* winrm           executes commands on a machine via WinRM
* winrm-config    outputs WinRM configuration to connect to the machine


### Lerndokumentation

Anbei dokumentiere ich meinen Wissenstand und definiere meinen Fortschritt.

#### Tag 1
Der Fokus des heutigen Tages ist die initialisierung des Modul. Heute habe ich meine Arbeitsstation aufgebaut. Dies beinhaltete, dass ich Virtualbox, GIThub-Desktop, Visualstudio und Vagrant installiert und konfigurierte. 

Ich lernte Vagrant kennen, da ich dass bislang noch nie damit gearbeitet habe. Somit konnte ich viel neues lernen. Automationist ein Schwerpunkt in der IT, welcher mich sehr interessiert. Somit kann ich auch persöhnlich viel von diesem Modul profitieren.

zusätzlicher Wissenstand in folgenden Schwerpunkten: 

##### Linux
-Wissen in Linux -> Pfad editieren, manipulieren, navigieren und kreiren hatte ich bereits vor dem Modul 
##### Virtualisierung
-Grundprinzip war mir klar wie Virtualisierung funktionierte (UeK-340)
##### Vagrant
-Vagrant neu kennengelernt
-Vagrantfile erstellt und editiert
-Vagrant init/up/destroy -f
##### Git
-Git Repository erstellt
-README.md file erstellt und editiert

#### Tag 2
Heute habe ich an meinem Vagrant file weiter gearbeitet. Ich bin mitlerweile so weit, dass ich mehrere VMs erstellt habe. Auf diese VMs kann ich mittels localhost zugreiffen. Jenach VM die ich erstellt habe, habe ich eine Portweiterleitung erstellt.

Ich habe die Dokumentation erweitert und besser Strukturiert. Somit muss ich nur noch gewisse Skripts einfügen und testen, um sie anschliessend zu beschreiben.

Ich lernte mehr über Vagrant kennen und fühle mich sicherer, diese files zu editieren. Es kommt jedoch immernoch zu komplikationen, was mich zu einem zusätzlichen Termin veranlasst, nochmals an diesem Projekt zu arbeiten.


##### Linux
-mit ";" mehrere Commands in einer Reihe ausführen
##### Virtualisierung
-mitt ssh auf eine VM zugreiffen und wechseln
##### Vagrant
-mehrere VM erstellen
-Datenbank erstellen
##### Git
-nichts neues

### Vagrantfile

### Tests

### Reflexion

### GitHub README.md:

#### Authors

Contributors names and contact info

Livio Bortolin

#### Version History

* 0.2
    * added README-md file
    * added commands to Vagrantfile
* 0.1
    * Initial Release

#### License

This project is licensed under the Bortol.in License - see the LICENSE.md file for details

#### Acknowledgments

Inspiration, code snippets, etc.
* [Source](https://github.com/mc-b/M300)