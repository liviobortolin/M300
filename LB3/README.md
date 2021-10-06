# M300 - Plattformübergreifende Dienste in ein Netzwerk integrieren


## LB2 Vagrantfile

Folgend erbringe ich meine Leistungsnachweise für die Lernbeurteilung 3 des Modul 300. 

# Inhaltsverzeichnis
- [K1](#K1)
- [K2](#K2)
- [K3](#K3)
- [K4](#K4)
- [K5](#K5)


## K1
Umbebung auf eigenem Notebook eingerichtet und funktionsfähig<br/>
[1. VirtualBox](#1-virtualbox)<br/> 
[2. Vagrant](#2-vagrant)<br/>
[3. Visualstudio-Code](#3-visualstudio-code)<br/>
[4. Git-Client](#4-git-client)<br/>

### 1. Virtualbox

Nach Anleitung des Lehrers installiert und ausgeführt.

Anleitung: https://github.com/mc-b/M300/tree/master/10-Toolumgebung

### 2. Vagrant

Nach Anleitung des Lehrers installiert und ausgeführt.

Anleitung: https://github.com/mc-b/M300/tree/master/10-Toolumgebung

### 3. Visualstudio-Code

Visualstudio-Code hatte ich bereits vorinstalliert, weshalb ich diesen Schritt überspringen konnte.

### 4. Git-Client

Nach Anleitung des Lehrers installiert und ausgeführt.

Anleitung: https://github.com/mc-b/M300/tree/master/10-Toolumgebung


## K2
Eigene Lernumgebung (PLE) ist eingerichtet<br/>
[1. Dokumentation ist vorhanden](#1-dokumentation-ist-vorhanden)<br/>
[2. Dokumentation ist strukturiert](#2-dokumentation-ist-strukturiert)<br/>
[3. Persönlicher Wissenstand](#3-persönlicher-wissenstand)<br/>
[4. Wichtige Lernschritte sind dokumentiert](#4-wichtige-lernschritte-sind-dokumentiert)

### 1. Dokumentation ist vorhanden

GitHub Account: https://github.com/liviobortolin

Ich habe während dieser Arbeit Github-Desktop verwendet. Somit konnte ich alle commit, push, fetch und pull Befehle über ein UI erstellen.7

### 2. Dokumentation ist strukturiert

Wie vom Lehrer vorgeschlagen, nutze ich Git-Bash.

Anleitung: https://github.com/mc-b/M300/tree/master/20-Infrastruktur


### 3. Persönlicher Wissenstand

Anbei dokumentiere ich meinen Wissenstand und definiere meinen Fortschritt.

#### Tag 1 22.09.21

Heute haben wir mit dem Modul 300 angefangen. Wir haben unser Gerät mit den nötigsten Softwares installiert. 
Diese Tools haben wir installiert:

Zusätzlicher Wissenstand in folgenden Schwerpunkten: 

##### Linux

Ich habe über Inux aus früheren Modulen gelernt. Sie können es manchmal in Ihrem Unternehmen verwenden, um Fehler in Netzwerk- oder Dateibereichen zu beheben.

##### Virtualisierung

Wir haben viel an der Virtualisierung in Schulen und ÜK gearbeitet. Auch im Betrieb setzen wir eine virtualisierte Umgebung ein

##### Vagrant

Mit den Vorlagen vom Lehrer habe ich mal Vagrant ausprobiert.

Vagrant neu kennengelernt -Vagrantfile erstellt und editiert -Vagrant init/up/destroy -f

##### Git

Git kannte ich bereits schon von den vergangenen Modulen

Repository erstellt mit einem Readme.md


#### Tag 2 06.10.2021


Heute haben wir das Modul 300 beendet. Die LB3 war sehr schwer, da wir sehr wenig Zeit hatten das Projekt umzusetzen.

Zusätzlicher Wissenstand in folgenden Schwerpunkten: 

##### Linux

Ich habe über Inux aus früheren Modulen gelernt. Sie können es manchmal in Ihrem Unternehmen verwenden, um Fehler in Netzwerk- oder Dateibereichen zu beheben.

##### Virtualisierung

Wir haben viel an der Virtualisierung in Schulen und ÜK gearbeitet. Auch im Betrieb setzen wir eine virtualisierte Umgebung ein

##### Vagrant

Mit den Vorlagen vom Lehrer habe ich mal Vagrant ausprobiert.

Vagrant neu kennengelernt -Vagrantfile erstellt und editiert -Vagrant init/up/destroy -f

##### Git

Git kannte ich bereits schon von den vergangenen Modulen

Repository erstellt mit einem Readme.md


### 4. Wichtige Lernschritte sind dokumentiert

Die Vorteile der Containerisierung sind:

- Resourcenbedarf (weniger Resourcen als VMs)
- Effizient (Container nutzen Serverresourcen sehr dynamisch aus )
- Performance (Container haben bringen mehr Leistung, als VMs, weil das Gastbetriebssystem auch seine eigenen Speicheranforderungen erfüllen und wertvollen Arbeitsspeicher des Hosts belegen muss)

### Docker

Docker ist eine Software zur Isolierung von Anwendungen mit Containervirtualisierung. Die Software benötigt keine Lizenzen.

Docker nahm damals die bestehende Linux-Containertechnologie auf und verpackte und erweiterte sie in vielerlei Hinsicht – vor allem durch portable Images und eine benutzerfreundliche Schnittstelle.

**Architektur**
Im Folgenden sind alle Elemnte und ihre Aufgaben aufgelistet:

**Docker Deamon**
- Erstellen, Ausführen und Überwachen der Container
- Bauen und Speichern von Images.

**Docker Client**
- Docker wird über die Kommandozeile (CLI) mittels des Docker Clients bedient
- Kommuniziert per HTTP REST mit dem Docker Daemon

**Images**
- Images sind gebuildete Umgebungen welche als Container gestartet werden können
- Images sind nicht veränderbar, sondern können nur neu gebuildet werden.
- Images bestehen aus Namen und Version (TAG), z.B. ubuntu:16.04.

**Container**
- Container sind die ausgeführten Images
- Ein Image kann beliebig oft als Container ausgeführt werden
- Container bzw. deren Inhalte können verändert werden, dazu werden sogenannte Union File Systems verwendet, welche nur die Änderungen zum original Image speichern.

**Docker Registry**
- In Docker Registries werden Images abgelegt und verteilt

### Microservices
Microservices sind ein Architekturkonzept der Anwendungsentwicklung. Ein Microservice ist also eine Kernfunktion einer Anwendung und er wird unabhängig von anderen Services ausgeführt.

Jede Funktion kann unabhängig entwickelt und implementiert werden.

## K3
[1. Bestehenden Docker-Container kombinieren](#1-bestehenden-docker-container-kombinieren)<br/>
[2. Bestehende Container als Backend, Desktop-App als Frontend einsetzen](#2-bestehende-container-als-backend,-desktop-app-als-frontend-einsetzen)<br/>
[3. Volumes zur persistenten Datenablage eingerichtet](#3-volumes-zur-persistenten-datenablage-eingerichtet)<br/>
[4. Kennt die Docker spezifischen Befehle](#4-kennt-die-docker-spezifischen-befehle)<br/>
[5. Eingerichtete Umgebung ist dokumentiert](#5-eingerichtete-umgebung-ist-dokumentiert)<br/>
[6. Funktionsweise getestet inkl. Dokumentation der Testfälle](#6-funktionsweise-getestet-inkl-dokumentation-der-testfälle)<br/>
[7. Projekt mit Git und Markdown dokumentiert](#7-Projekt-mit-Git-und-Markdown-dokumentiert)

### 1. Bestehende Docker-Container kombinieren

Für den Nextcloud Dienst habe ich die Mysql Datenbank mit dem Apache Webserver kombiniert. 

![Nextcloud](img/nextcloud.png)

![phpMyAdmin](img/phpmyadmin.png)



### 2. Bestehende Container als Backend, Desktop-App als Frontend einsetzen

In meinem Fall ist der Container als Backend sowie als Frontend in Form von PHP & Mysql eingesetzt. PHP stellt in diesem Fall das Frontend dar, während Mysql das Backend ist.

![FrontEndBackEnd](img/frontEndbackEnd.png)

### 3. Volumes zur persistenten Datenablage eingerichtet

Docker-Container haben keinen persistenten Speicher, dh wenn ein Administrator einen Container löscht, gehen alle darin enthaltenen Daten verloren. Glücklicherweise bietet Docker eine Lösung für dieses Problem: Volume-Dienste können verwendet werden, um persistenten Speicher für Container bereitzustellen. Erstellen Sie einen Container auf dem Volume:

`docker create -v /dbvolume --name datenbank training/postgres /bin/true`

Mit dem Parameter “-volume” aus „Docker run” wird es möglich, das Volumen „/dbvolume des Containers datenbank auf andere Container zu mounten.

Mit den beiden folgenden Befehlen werden die beiden Container „db1“ und „db2“ erzeugt:
`sudo docker run -d --volumes-from dbstore --name db1 training/postgre` 
`sudo docker run -d --volumes-from dbstore --name db2 training/postgres`

Volume löschen:
`docker rm –v`

### 4. Kennt die Docker spezifischen Befehle

|Befehl          |Bedeutung
|:---------------|:---------------------------------------------------------------|
|attach            |Attach local standard input, output, and error streams to a running container|
|build             |Build an image from a Dockerfile|
|commit            |Create a new image from a container's changes|
cp                |Copy files/folders between a container and the local filesystem
create            |Create a new container
diff              |Inspect changes to files or directories on a container's filesystem
events            |Get real time events from the server
exec              |Run a command in a running container
export            |Export a container's filesystem as a tar archive
history           |Show the history of an image
images            ||List images
import            |Import the contents from a tarball to create a filesystem image
info              |Display system-wide information
inspect           |Return low-level information on Docker objects
kill              |Kill one or more running containers
load              |Load an image from a tar archive or STDIN
login             |Log in to a Docker registry
logout            |Log out from a Docker registry
logs              |Fetch the logs of a container
pause             |Pause all processes within one or more containers
port              |List port mappings or a specific mapping for the container
ps                |List containers
pull              |Pull an image or a repository from a registry
push              |Push an image or a repository to a registry
rename            |Rename a container
restart           |Restart one or more containers
rm                |Remove one or more containers
rmi               |Remove one or more images
run               |Run a command in a new container
save              |Save one or more images to a tar archive (streamed to STDOUT by default)
search            |Search the Docker Hub for images
start             |Start one or more stopped containers
stats             |Display a live stream of container(s) resource usage statistics
stop              |Stop one or more running containers
tag               |Create a tag TARGET_IMAGE that refers to SOURCE_IMAGE
top               |Display the running processes of a container
unpause           |Unpause all processes within one or more containers
update            |Update configuration of one or more containers
version           |Show the Docker version information
wait              |Block until one or more containers stop, then print their exit codes

### 5. Eingerichtete Umgebung ist dokumentiert

#### Netzwerkplan

![Netzwerkplan](img/netzwerkplan.png)

Die komplette Umgebung ist im README.md dokumentiert

### 6. Funktionsweise getestet inkl. Dokumentation der Testfälle

Testfall                                                                      | Resultat
-----------------                                                             | -------------
Die Container kann gebildet werden sowie es kann darauf zugegriffen werden.   | erfolgreich
Mysql wurde installiert und funktioniert                                      | erfolgreich
Es kann auf PHP Myadmin vom Host aus zugegriffen werden                       | erfolgreich
Nextcloud kann aufgerufen werden                                              | erfolgreich
Cadvisor funktioniert und kann aufgrufen werden                               | erfolgreich
apache kann als Dockerfile erstellt werden                                    | erfolgreich

### 7. Projekt mit Git und Markdown dokumentiert

Ich habe die komplette Dokumentation und Beschreibung in README.md file abgelegt.


## K4
Zusätzliche Bewertungspunkte allgemein<br/>
Umsetzung einger Ideen<br/>
[1. Übungsdokumentation als Vorlage für Modul-Unterlagen erstellt Persönlicher Lernentwicklung](#1-Übungsdokumentation-als-Vorlage-für-Modul-Unterlagen-erstellt-Persönlicher-Lernentwicklung)<br/>
[2. Vergleich Vorwissen - Wissenszuwachs](#2-Vergleich-Vorwissen-Wissenszuwachs)<br/>
[3. Reflexion](#3-Reflexion)



### 1.Übungsdokumentation als Vorlage für Modul-Unterlagen erstellt Persönlicher Lernentwicklung



### 2.Vergleich Vorwissen - Wissenszuwachs

Auch bei dieser Arbeit ist mein Wissenszuwachs hervorragend. Wenn man bedenkt, dass ich zu Beginn des Moduls noch nicht einmal wusste, was Docker und Containerisierung sind, denke ich, dass sich der Wissenszuwachs schnell bemerkbar machen wird. Zu Beginn von LB3 brauchte ich weitere Programme, um mich mit Docker vertraut zu machen. Ich habe viel Zeit damit verbracht, mich damit vertraut zu machen, sodass ich meinen ursprünglichen Plan nicht verwirklichen konnte. Trotzdem macht die Arbeit mit Docker Spaß und das Wissen wächst sehr schnell. Gleichzeitig verstehe ich Docker-Befehle und mein Wissen kann vor allem in der Theorie sehr erweitert werden.

### 3.Reflexion

Insgesamt gefällt mir LB03 sehr gut. Anfangs kannte ich nicht alle Fachbegriffe zu diesem Thema. Aber jetzt kann ich in vielen Diskussionen zu diesem Thema meine Meinung äußern. Ich bin sehr froh, dass ich diese Lernschritte abgeschlossen habe. Ich werde auf jeden Fall viele Materialien mitbringen, die ich in diesem LB03 und entsprechenden Kursen gelernt habe. Ich hatte gehofft, mehr Containerisierungsthemen diskutieren zu können, und ich hatte gehofft, mit LB3 mehr zu erreichen. Aufgrund einiger anfänglicher Probleme habe ich jedoch einfach keine Zeit. Auch in meiner Freizeit kann ich bei DOcker etwas lernen. Ich habe mir auf YouTube einige Tutorials und Crashkurse angesehen, die mir auch geholfen haben, meine Docker-Umgebung zu erweitern. Alles in allem habe ich eine tolle Zeit mit diesem LB03.


## K5
Zusätzliche systemtechnische Bewetungspunkte<br/>
[1. Umfangreiche Vernetzung der Container-Infrastruktur](#1-umfangreiche-vernetzung-der-container-infrastruktur)<br/>
[2. Image-Bereitstellung](#2-image-bereitstellung)<br/>
[3. Continous Integration](#3-continous-integration)<br/>
[4. Cloud-Integration](#4-cloud-integration)<br/>
[5. Eigene Ideen](#5-Eigene-Ideen)

### 1. Umfangreiche Vernetzung der Container-Infrastruktur

Wie bereits oberhalb erwähnt vernetzte ich die Container untereinander. Einerseitz benutzt der Nextcloud Container die Dienstleistungungen des Mysql sowie des Apache Containers. Zusätzlich benutzt der cAdvisor die Informationen aller Container und wertet sie aus.

### 2. Image-Bereitstellung

Meine erstellten Images sind auf Github hochgeladen und für weitere Projekte zugreifbar.

### 3. Continous Integration

Unter Conitnous Intergration verstehe ich, dass andere an meinen Projekten weiterarbeiten können. Durch das, dass ich mein ganzes Projekt OpenSource auf GitHub veröffentlicht habe, sollt dieses Kriterium gewährleistet werden.

### 4. Cloud-Integration

Als Cloud-Umgebund habe ich Nextcloud genommen. Hierbei kann man dies gut mit dem Mysql und Apache verknüpfen.

![Nextcloud](img/nextcloud.png)

### 5. Eigene Ideen

Als eigene Idee habe ich zusätzlich noch folgednes Monitoringtool aufgesetzt.

Eine gute Monitoring-Lösung sollte auf einen Blick den Zustand des Systems zeigen und rechtzeitig warnen, wenn Ressourcen knapp werden. Docker Tools cAdvisor von Google ist das am häufigsten eingesetzte Monitoring-Tool für Docker.

Dieses Programm ist als Container verfügbar und man kann darauf zugreifen. Der folgende Command muss dazu aktiviert werden:

"docker run -d --name cadvisor -v /:/rootfs:ro -v /var/run:/var/run:rw -v /sys:/sys:ro -v /var/lib/docker/:/var/lib/docker:ro -p 8080:8080 google/cadvisor:latest"

![cAdvisor](img/cadvisor.png)