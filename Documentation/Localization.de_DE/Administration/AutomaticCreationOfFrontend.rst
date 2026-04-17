

.. _administration-automatic-creation-of-frontend-users:

Automatisches Erzeugen von Frontend Benutzern
---------------------------------------------

Es ist möglich nach jeder Bestellung automatisch Frontend Benutzer anzulegen. Sie müssen 
:typoscript:`createUsers`auf:typoscript:`1` setzen, die *PID* des Sysfolder als :typoscript:`PIDuserFolder`
im Setup Feld eintragen. Dann müssen Sie die memberOfGroup auf die ID Ihrer Frontend Benutzergruppe setzen.
Nach der ersten Bestellung erhält der Kunde eine E-Mail mit seinen Zugangsdaten. 
Diese E-Mail wird den Namen des Kontos enthalten, welcher
ident mit der E-Mail Adresse ist, und sein automatisch erzeugtes Passwort.

Wenn Sie kein einzelnes Textfeld für die Adresse haben wollen, sondern eine für die Straßenbezeichnung und
Hausnummer, und zusätzliche Felder für PLZ, Stadt und Land, dann müssen Sie die Template-Datei
entsprechend anpassen. Wenn Sie :composer:`sjbr/static-info-tables` installieren und 
:typoscript:`useStaticInfoCountry = 1`  setzen, dann
wird das kleine Feld static_info_country der :code:`fe_users` Tabelle anstelle des :code:`country` Feldes verwendet.
Es ist benutzerfreundlich, wenn Sie eine Select Box zur Auswahl des Landes machen.

