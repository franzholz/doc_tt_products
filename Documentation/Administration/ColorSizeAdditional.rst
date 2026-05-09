.. _administration-color-size-grading:

Farbe, Größe, Zusätzliches und Staffelung
-----------------------------------------

Damit Sie Variationen von Produkten eingeben können, müssen Sie die Werte durch Strichpunkt getrennt eingeben. So müssen Sie für T-Shirts mit verschiedenen Farben und Größen `rot;grün;blau` als Variante 1 und `S;X;XL;XXL` als Variante 2 eingeben. Farbe (Variante 1) und Größe (Variante 2): geben Sie hier Werte mit den Titeln ein, die durch Strichpunkte `;` getrennt werden wie z.B.
`M;L;XL;XXL`
 Ändern Sie das Template, damit das unterstützt wird:

..  code-block:: html
    :caption: Template Unterbereich für die Farbauswahl

    <!-- ###display_variant1### -->
    ###GW2B### Color: ###GW2E### <select style="font-size: 10px"
    name="###FIELD_COLOR_NAME###" rows="1">###PRODUCT_COLOR###</select><br>
    <!-- ###display_variant1### -->
    <!-- ###display_variant2### -->
    ###GW2B### Size: ###GW2E### < select style="font-size: 10px"
    name="###FIELD_SIZE_NAME###" rows="1">###PRODUCT_SIZE###</select><br> <!-- ###display_variant2### -->

Wenn Sie die Farben und Größen nicht auswählbar machen wollen, dann müssen Sie im Template Setup :typoscript:`selectColor` oder :typoscript:`selectSize` auf 0 setzen und im Template selbst die entsprechende  :html:`###display_variant###`  entfernen.  Sie können diese Marker jedoch zur Darstellung der Farben verwenden, auch wenn keine unterschiedlichen Farben gewählt werden können. (dann nur die Markierungen :html:`###PRODUCT_COLOR###` und :html:`###PRODUCT_SIZE###` verwenden). Denn im Setup wurden ja Farben und Größen auf 0 gesetzt.

Der Feldname aller Felder in der Listenansicht und der Warenkorbansicht wird mit dem Marker :html:`###FIELD_NAME###` angesprochen. Dieser Marker wird intern im Shop durch einen Feldnamen ersetzt, damit das Fels ausgelesen und richtig zugeordnet werden kann.
Wenn Sie Produkte mit verschiedenen Farben, Größen und Staffelungen nach Mengen haben, dann müssen Sie im Bereich `BASKET_TEMPLATE` den Marker :html:`###FIELD_NAME###` durch den Marker :html:`###FIELD_NAME_BASKET###` ersetzen.

In der Listenansicht des Webmoduls können Sie nun die bereits vorhandenen Produkte um die Varianten, z.B. Farbe, ergänzen. Sie wählen dazu die Tabelle Produkt Artikel aus.




BILD



Sie müssen im Template Setup useArticles=1 setzen, um die Artikeleigenschaften zu verwenden.
Wenn Sie bereits Produkte angelegt haben, diesen bereits in Produkteigenschaften verschiedene Farben zugeordnet haben, verfügen  Sie jedoch nur über eine Artikelnummer und einen Preis etc. zu diesem Produkt. Sie benötigen jedoch für Produkte z. B. unterschiedlicher Farbe auch unterschiedliche Artikelnummern und vielleicht Preise etc. Diese Zurodnungen erfolgen in den Artikeleigenschaften (Webmodul, Liste, Produkte Artikel – Tabelle). Der Vorteil ist, dass Sie die “neuen” Produkte nicht  neu anlegen müssen, sondern die Eigenschaften vererbt werden. Sie geben also nur noch die Farbe, neue Artikelnummer und evtl. neuen Preis ein. Alle anderen Angaben zum Produkt werden übernommen.  Lassen Sie ein Feld leer, so wird der  Feldinhalt aus den Produkte Eigenschaften übernommen.
Es macht einen Unterschied, ob ein Produkt mit verschiedenen Farben oder Größen in der Produktliste oder im Warenkorb angezeigt wird. Normalerweise wird die Farbe und Größe eine Produktes über eine Auswahlbox ausgewählt. In der Produktliste wird die Anzahl für die erste Farbe/Größe angezeigt. Im Warenkorb jedoch werden die Produkte in allen Varianten einzeln aufgelistet. Die Listes der Produkte im Warenkorb und in der Auswahlseite sind also beinahe gleich, aber sie werden anders gehandhabt. Sie müssen selectSize und selectColor deaktivieren, wenn Sie keine Auswahlboxen in der Produktliste haben wollen.




