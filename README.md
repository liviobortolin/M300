# M300 - Plattformübergreifende Dienste in ein Netzwerk integrieren

## LB2 Vagrantfile

Folgend erbringe ich meine Leistungsnachweise für die Lernbeurteilung 2 des Modul 300.

# Inhaltsverzeichnis
- [K1](#K1)
- [K2](#K2)
- [K3](K3)
- [K4](#K4)
- [K5](#K5)


## K1
Umbebung auf eigenem Notebook eingerichtet und funktionsfähig
[1. VirtualBox](#1-virtualbox)
[2. Vagrant](#2-vagrant)
[3. Visualstudio-Code](#3-visualstudio-code)
[4. Git-Client](#4-git-client)
[5. SSH-Key für Client erstellen](#5-ssh-key-für-client-erstellen)

### 1. Virtualbox


### 2. Vagrant


### 3. Visualstudio-Code



### 4. Git-Client


### 5. SSH-Key für Client erstellen



## K2
Eigene Lernumgebung (PLE) ist eingerichtet
[1. GitHub oder Gitlab-Account ist erstellt](#1-github-oder-gitlab-account-ist-erstellt)
[2. Git-Client wurde verwendet](#2-git-client-wurde-verwendet)
[3. Dokumentation ist als Mark Down vorhanden](#3-dokumentation-ist-als-mark-down-vorhanden)
[4. Mark down-Editor ausgewählt und eingerichtet](#4-mark-down-editor-ausgewählt-und-eingerichtet)
[5. Persönlicher Wissenstand](#5-persönlicher-wissenstand)
[6. Wichtige Lernschritte sind dokumentiert](#6-wichtige-lernschritte-sind-dokumentiert)

### 1. GitHub oder Gitlab-Account ist erstellt
GitHub Account: https://github.com/liviobortolin

### 2. Git-Client wurde verwendet


### 3. Dokumentation ist als Mark Down vorhanden
Die Dokumentation ist in der README.md Datei.

### 4. Mark down-Editor ausgewählt und eingerichtet
Die README.md Datei habe ich mit GitHub Desktop jeweils im Visualstudio geöffnet und editiert.

### 5. Persönlicher Wissenstand

Anbei dokumentiere ich meinen Wissenstand und definiere meinen Fortschritt.

#### Tag 1 25.08.21
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

#### Tag 2 08.09.2021
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

#### Tag 3 22.09.2021
Ich habe heute an meinem Vagrant file weiter gearbeitet. Nun da ich mehere VMs erstellen kann, will ich diese möglichst gut konfigurieren, so dass ich auf diese Zugreiffen kann. Im besten fall über Web.

In der Dokumentation fehlen nur noch die folgenden Tage, an denen ich noch am Vagrantfile arbeiten werde.
Zudem muss ich noch meine Sktipts innerhalb dieser Dokumentation beschreiben und die Testfälle erstellen.

Je mehr ich über Vagrant lerne, desto einfacher fählt es mir gewisse VM zu strukturieren.
Ich habe immernoch schwierigkeiten mit gewissen Fehlermeldungen, diese werde ich jedoch in den nächsten paar male korrigieren.


##### Linux
-Directory orientierung
##### Virtualisierung
-anlegen von Verzeichnissen und diese editieren
##### Vagrant
-innerhalb einer VM ein Index.html file ändern
##### Git
-nichts neues

### 6. Wichtige Lernschritte sind dokumentiert


## K3
[1. Bestehende vm aus Vagrant-Cloud einrichten](#1-bestehende-vm-aus-vagrant-cloud-einrichten)
[2. Kennt die Vagrant-Befehle](#2-kennt-die-vagrant-befehle)
[3. Eingerichtete Umgebung ist dokumentiert](#3-eingerichtete-umgebung-ist-dokumentiert)
[4. Funktionsweise getestet inkl. Dokumentation der Testfälle](#4-funktionsweise-getestet-inkl-dokumentation-der-testfälle)
[5. Andere, vorgefertigte vm auf eigenem Notebook aufgesetzt](#5-andere-vorgefertigte-vm-auf-eigenem-notebook-aufgesetzt)

### 1. Bestehende vm aus Vagrant-Cloud einrichten

vagrant up


### 2. Kennt die Vagrant-Befehle

Usage: vagrant [optionen] <Befehl> [<args>]

Mit dem Befehl "vagrant list-commands" werden alle Befehle aufgeführt:

|Befehl          |Bedeutung
|:---------------|:---------------------------------------------------------------|
|autocomplete    |manages autocomplete installation on host                       |
|box             |manages boxes: installation, removal, etc.                      |
|cap             |checks and executes capability                                  |
|cloud           |manages everything related to Vagrant Cloud
|destroy         |stops and deletes all traces of the vagrant machine
|docker-exec     |attach to an already-running docker container
|docker-logs     |outputs the logs from the Docker container
|docker-run      |run a one-off command in the context of a container
|global-status   |outputs status Vagrant environments for this user
|halt            |stops the vagrant machine
|help            |shows the help for a subcommand
|init            |initializes a new Vagrant environment by creating a Vagrantfile
|list-commands   |outputs all available Vagrant subcommands, even non-primary ones
|login           |
|package         |packages a running vagrant environment into a box
|plugin          |manages plugins: install, uninstall, update, etc.
|port            |displays information about guest port mappings
|powershell      |connects to machine via powershell remoting
|provider        |show provider for this environment
|provision       |provisions the vagrant machine 
|rdp             |connects to machine via RDP
|reload          |restarts vagrant machine, loads new Vagrantfile configuration
|resume          |resume a suspended vagrant machine
|rsync           |syncs rsync synced folders to remote machine
|rsync-auto      |syncs rsync synced folders automatically when files change
|snapshot        |manages snapshots: saving, restoring, etc.
|ssh             |connects to machine via SSH
|ssh-config      |outputs OpenSSH valid configuration to connect to the machine
|status          |outputs status of the vagrant machine
|suspend         |suspends the machine
|up              |starts and provisions the vagrant environment
|upload          |upload to machine via communicator
|validate        |validates the Vagrantfile
|version         |prints current and latest Vagrant version
|winrm           |executes commands on a machine via WinRM
|winrm-config    |outputs WinRM configuration to connect to the machine

### 3. Eingerichtete Umgebung ist dokumentiert

#### Netzwerkplan




#### Umgebungsvariabeln

cd nach C:/Users/Livio/Desktop/TBZ/BIST21/M300/repository/M300

"vagrant up"

#### Sicherheitsaspekte




### 4. Funktionsweise getestet inkl. Dokumentation der Testfälle



### 5. Andere, vorgefertigte vm auf eigenem Notebook aufgesetzt

Ich habe noch eine weitere VM auf dem Notebook aufgesetzt. Hierbei habe ich das Vagrant-File, welches unter dem folgenden Pfad liegt ausgeführt.

https://github.com/mc-b/M300/tree/master/vagrant/db

Diese VM habe ich mit dem Befehl `vagrant up` gestartet. Auch hier musste ich im Verzeichnis sein, in dem das Vagrant-File vorhanden war. 


## K4
[1. Firewall eingerichtet inkl. Rules](#1-firewall-eingerichtet-inkl-rules)
[2. Reverse-Proxy eingerichtet](#2-reverse-proxy-eingerichtet)
[3. Benutzer- und Rechtevergabe ist eingerichtet](#3-benutzer--und-rechtevergabe-ist-eingerichtet)
[4. Sicherheitsmassnahmen sind dokumentiert](#4-sicherheitsmassnahmen-sind-dokumentiert)

### 1. Firewall eingerichtet inkl. Rules
Für die Sicherheit meines Systems ist die korrekte Konfiguration der Firewall sehr wichtig.
Um die Firewall zu installieren verwendete ich folgenden Befehl:

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild12.png "cd")

Ich entschied mich für den Rules-Typ deny any. Hierbei werden alle Ports geschlossen und einzelne Ports werden geöffnet. Anschliessend öffnete ich die Ports 22, 80 sowie 443. Damit sind nur die essenziellsten Ports geöffnet und die Sicherheit bleibt gewährt. Mit dem Befehl sudo ufw enale, aktiviere ich die Firewall. Ufw ist die Bezeichnung der verwendeten Firewall. 

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild13.png "cd")

### 2. Reverse-Proxy eingerichtet
Gleich wie bei der Firewall muss zuerst der Proxy-Dienst installiert werden. Dazu verwendete ich folgenden Befehl. 

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild14.png "cd")

Um den Proxy anschliessend benutzen zu können musste ich einige Module aktivieren:

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild15.png "cd")

Danach konfigurierte ich die nötigen Einstellungen für den Reverse Proxy:

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild16.png "cd")

### 3. Benutzer- und Rechtevergabe ist eingerichtet
Als erstes erstellte ich Gruppenordner

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild17.png "cd")

Nun erstellte ich insgesamt zwei Benutzer:

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild18.png "cd")

Da die rechtevergabe grundsätzlich viel sinnvoller und sicherer ist, wenn dies über eine Gruppe gemacht wird, erstellte ich Gruppen. 

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild19.png "cd")

Nun fügte ich die Benutzer den Gruppen hinzu.

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild20.png "cd")

Um nun den Gruppen auf deren Gruppenordner Berechtigung zu geben benutzte ich folgende Befehle:

![](https://github.com/philiptbz/M300-Services/blob/master/Images/bild21.png "cd")

### 4. Sicherheitsmassnahmen sind dokumentiert
-   Lediglich der Port 80 des Web-Frontends und der Port 8080 der API wurden nach Aussen freigegeben.
-	Durch den Reverse Proxy sind die Devices im LAN von aussen nicht einsehbar.
-	Mit den strengen Firewall Regeln können wir das eindringen über offene Ports grösstenteils vermeiden.
-	Nur bestimmte Nutzer verfügen über einen Zugriff auf die wichtigen Verzeichnisse, was die Integrität schützt.


## 5. Kriterium
[1. Kreativität](#1-kreativität)
[2. Komplexität](#2-komplexität)
[3. Umfang](#3-umfang)
[4. Authentifizierung und Autorisierung via LDAP](#4-authentifizierung-und-autorisierung-via-ldap)
[5. Vergleich Vorwissen - Wissenszuwachs](#6-vergleich-vorwissen---wissenszuwachs)
[6. Reflexion](#7-reflexion)

### 1. Kreativität
Ich denke die Kreativität ist genügend hoch. In dieser Arbeit habe ich probiert möglichst alles selbst zu machen und meine eigene Gedanken umzusetzen. Es wurden viele verschiedene Dinge umgesetzt, weshalb ich die Kreativtät als erfüllt empfinde. 

### 2. Komplexität
Da ich mehrere verschiedene Dienste zur Verfügung gestellt habe, finde ich auch, dass mein Vagrant-File die Komplexität erfüllt. A

### 3. Umfang
Wie bereits erwähnt setzte ich mehrere Dienste um, was sich auch in der länge der Vagrantfiles wiederspiegelt. Ich denke mit knapp 120 Zeilen ist die Umfang erfüllt.

### 4. Authentifizierung und Autorisierung via LDAP
Die 4. Authentifizierung und Autorisierung via LDAP wurde ab der Zeile 100 im Vagrant-File umgesetzt. 

### 5. Vergleich Vorwissen - Wissenszuwachs


### 6. Reflexion
