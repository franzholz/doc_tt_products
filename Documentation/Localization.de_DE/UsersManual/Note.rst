

.. _users-manual-note:

Hinweis
-------

Sie müssen das Feld 'Am Lager (St.)' in den Eigenschaften des Produktes ausfüllen. Ansonsten wird bei der
Ausgabe im Frontend kein Produkt angezeigt, da der Wert dann auf 0 gesetzt ist. Null gesetzte Produkte gelten als nicht
vorhanden

Vor der Eingabe der Produktpreise haben Sie die Möglichkeit zu entscheiden, ob die Preise mit oder ohne
Steuern eingegeben werden (siehe :typoscript:`TAXincluded`). Alle Berechnungen und Konfigurationen werden die
Preisangaben im Feld :php:`price` verwenden, mit denen sie in der Tabelle :php:`tt_products` gespeichert sind.
Sie sollten jedoch am besten die Preise inkl. Mehrwertsteuer in die Datenbank eintragen.
Das erleichtert es Ihnen, die Preise gleich so eingeben zu können, wie sie auch der Kunde sehen wird. 
Diese Preise sollten schließlich den Konventionen der 
Preisgestaltung wie :php:`€ 1,99` haben und nicht :php:`€ 1,72` entsprechen.

Sie sollten mit CSS gestyltes Template oder eines mit mehreren Spalten
(mit :typoscript:`plugin.tt_products.conf.tt_products.LIST.displayColumns.1 = 3` oder höher)  
auch wenn Sie nur eine einzige Spalte in der Listenansicht für die Tabelle haben wollen.

Verwenden Sie ein Beispiel Template aus dem Verzeichnis  
:file:`Resources/Private/Templates/`, wie das Template,
:file:`example_locallang_xml.html`, wenn Sie mit Ihrem Shop beginnen. Der Marker :php:`###DOMAIN###` 
ist der Platzhalter für Ihre Url. Es gibt mehrere Platzhalter für die verschiedenen Seiten-Ids des Shops.
Das ist sinnvoll wenn verschiedene Umgebungen verwendet werden. 
Im Setup des Shoptemplates muss die Domaineinstellung für :typoscript:`mydomain.com` über ein Setup
:typoscript:`plugin.tt_products.domain = mydomain.com` vorgenommen werden.

:composer:`jambagecom/tt-products` baut auf :composer:`jambagecom/table` und :composer:`jambagecom/div2007` auf. Sie müssen immer auf die letzten Versionen dieser Extensions aktualisieren, wenn Sie ein Update für
:composer:`jambagecom/tt-products` ausführen. 

Wenn Sie Einträge in die Variant-Felder (Größe, Farbe ...) vornehmen, müssen Sie u. U. die 
:typoscript:`selectColor` und selectSize entsprechend auf at :typoscript:`0`  or :typoscript:`1` , :typoscript:`2` oder :typoscript:`3` setzen. Ansonsten werden in der Produktliste die Anzahlen der
Produkte falsch eingetragen.

Viele Anpassungen können über den Constant-Editor vorgenommen werden. Das meiste sollte besser direkt in
die Felder Setup und Constants der Templates für die Shop-Seite eingetragen werden.
Für professionelle Anwendungen sollten Sie stattdessen ein Sitepackage für die gesamte Webseite erstellen.


