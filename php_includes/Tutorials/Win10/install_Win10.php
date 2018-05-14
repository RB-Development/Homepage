<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <body>
        <h1>Windows 10 in 20 Minuten installieren</h1>
        <section>
            <h2>Vorbedingung</h2>
            Vorbei sind die Zeiten in denen man für eine Windows Installation einen ganzen Tag einplanen musste. <br>
            In diesem Artikel möchte ich euch zeigen wie man Windows 10 in weniger als 20 Minuten installieren kann.<br>
            Damit wir in unserer Mittagspause mal eben Windows neu aufsetzen können sind einige Voraussetzungen notwendig:
            <ul>
                <li>Sata Festplatte</li>
                <li>USB 3.0 Schnittstelle</li>
                <li>Bootable USB 3.0 Stick</li>
            </ul>
            Da die Vorstellung von USB 3.0 mittlerweile acht Jahre her ist sollten alle halbwegs modernen PCs eine solche Schnittstelle aufweisen.
        </section>
        <section>
            <h2>Erstellen unsereses Installationsmediums</h2>
            Eine bootfähigen USB-Stick mit Windows 10 lässt sich über das von Microsoft angebotene <a href=https://www.microsoft.com/de-de/software-download/windows10; title=MediaCreationTool> Media Creation Tool</a> erstellen. <br>
            Nach dem Start des Tools wird man zunächst aufgefordert die AGBs zu lesen und diese zu bestätigen. <br>
            Im Anschluss haben wir die Möglichkeit ein Upgrade auf Windows 10 durchzuführen oder ein Installationsmedium zu erstellen. Wir entscheiden uns hier für Option B. <br>
            <img src="pics/Tutorials/Win10/Installationsmedium.PNG" alt="Hier ist etwas schief gelaufen"/>
            Nachdem wir uns für die Erstellung eines Installationsmediums entschieden haben müssen wir noch die Sprache, die Edition und die Architektur auswählen. <br>
            Die Sprache kann hierbei frei gewählt werden. Bei der Architektur würde ich immer 64-Bit bevorzugen, da alle Rechner die noch mit einer 32-bit Architektur laufen nur bedingt für Windows 10 geeignet sind. <br> 
            <img src="pics/Tutorials/Win10/Sprache.PNG" alt="Hier ist etwas schief gelaufen"/>
            Im nächsten Schritt müssen wir uns noch entscheiden ob wir einen USB-Stick oder eine DVD als Medium bevorzugen. <br>
            Um die Installation in weniger als 20 Minuten abzuschließen ist hier zwingend der USB-Stick auszuwählen. <br>
            Dies rührt daher, dass USB 3.0 mit einer theorietischen maximalen Übertragungsgeschwindigkeit von 5000 Mbit/s (640 Mbyte/s) selbst bei einem 24x DVD-Laufwerk und unter Vernachlässigung das die maximale Übertragungsgeschwindigkeit lediglich am Rand der DVD erreicht wird immernoch eine fast 19 mal so hohe Gewschwindigkeit aufweist. <br>
            <img src="pics/Tutorials/Win10/USB-Stick.PNG" alt=""/>
            Im nächsten Schritt müssen wir noch den Wechseldatenträger angeben auf den wir das Windows 10 Abbild ablegen wollen. <br>
            Zu diesem Zeitpunkt sollten alle relevanten Daten auf dem USB-Stick gesichert sein. Diese wird im nächsten Schritt formatiert. <br>
            <img src="pics/Tutorials/Win10/Laufwerk_auswaehlen.PNG" alt=""/>
            Im nächsten Schritt startet der Windows 10 download. Abhänging von der Internetzgeschwindigkeit kann dies einige Minuten in Anspruch nehmen. <br>
            <img src="pics/Tutorials/Win10/Win10_DL.PNG" alt=""/>
            Nachdem der Download abgeschlossen ist sind alle relvevanten Daten auf dem USB-Stick vorhanden. Die Windows 10 Installation kann somit beginnen. <br>
            <img src="pics/Tutorials/Win10/USB_rdy.PNG" alt=""/>
        </section>
        <section>
            <h2>Die Installation</h2>
            Ihr müsst nun euer System dazu bringen von dem USB-Stick zu booten. Abhängig von euerm Mainboard gibt es dafür verschiedene Möglichkeiten. <br>
            Zum einen könnt ihr hierzu in euer UEFI-Menü gehen und dort direkt vom USB-Stick booten. <br>
            Sollte eine solche Auswahl in dem Menü nicht möglich sein muss die Boot-Priorität der USB-Schnittstelle vor die der internen Festplatte gestellt werden.<br>
            Startet ihr den PC nun neu müsst ihr innerhalb eines recht kleinen Zeitfensters eine beliebige Taste drücken um von dem Installationsmedium (unserem USB-Stick) zu booten.<br>
            Sobald ihr von dem Stick bootet erscheint ein Windows 10 Ladebildschirm. Sobald ihr von dem Stick bootet erscheint ein Windows 10 Ladebildschirm. Nun folgt ihr der standardmäßigen Windows 10 Installation, von Eingabe der Sprache, zur Eingabe des Produkt-Keys bis hin zur Auswahl der Windows Version und der Partition auf der ihr Windows installieren wollt. Wichtig ist hier, dass ihr eine Windows Version wählt für die euer Produkt-Key auch gültig ist. Des Weiteren sollte Windows auf der Sata-Festplatte, aufgrund der deutlich höheren Datenübertragungsraten, installiert werden.
            Nun folgt ihr der standardmäßigen Windows 10 Installation, von Eingabe der Sprache, zur Eingabe des Produkt-Keys bis hin zur Auswahl der Windows Version und der Partition auf der ihr Windows installieren wollt. Sobald ihr von dem Stick bootet erscheint ein Windows 10 Ladebildschirm. Nun folgt ihr der standardmäßigen Windows 10 Installation, von Eingabe der Sprache, zur Eingabe des Produkt-Keys bis hin zur Auswahl der Windows Version und der Partition auf der ihr Windows installieren wollt. Wichtig ist hier, dass ihr eine Windows Version wählt für die euer Produkt-Key auch gültig ist. Des Weiteren sollte Windows auf der Sata-Festplatte, aufgrund der deutlich höheren Datenübertragungsraten, installiert werden.
            Wichtig ist hier, dass ihr eine Windows Version wählt für die euer Produkt-Key auch gültig ist. Des Weiteren sollte Windows auf der Sata-Festplatte, aufgrund der deutlich höheren Datenübertragungsraten, installiert werden. <br>
            Sind alle Voraussetzungen erfüllt könnt ihr so mithilfe eures eigenständig erstellen USB-Sticks Windows 10 innerhalb von 20 Minuten installieren, vorbei sind die Zeiten in denen man einen ganzen Tag für das neuaufsetzen des Betriebssystems investieren musste.
        </section>
        
        
    </body>
</html>
