.. _administration-color-size-grading:

Color, Size, Additional and Grading
-----------------------------------

The entering of variations of products is done by separation of the string
values by a semicolon. For t-shirts in multiple colors and sizes you must
enter `red;green;blue` as variant 1 and `S;X;XL;XXL` as variant 2.
Color (variant 1) and Size (variant 2): Here you enter the values by the titles
separated by semicolons `;`, e.g. `M;L;XL;XXL`.


Modify the template to make this possible:

..  code-block:: html
    :caption: Template Subpart for the color selection

    <!-- ###display_variant1### -->
    ###GW2B### Color: ###GW2E### <select style="font-size: 10px"
    name="###FIELD_COLOR_NAME###" rows="1">###PRODUCT_COLOR###</select><br>
    <!-- ###display_variant1### -->
    <!-- ###display_variant2### -->
    ###GW2B### Size: ###GW2E### < select style="font-size: 10px"
    name="###FIELD_SIZE_NAME###" rows="1">###PRODUCT_SIZE###</select><br> <!-- ###display_variant2### -->

If you do not want to make the colors and sizes selectable then you must set
:typoscript:`selectColor` or :typoscript:`selectSize` to 0.
And you can remove the :html:`###display_variant###` in the template file.
However you can uset these marker for the display of colors even if no different
colors can be chosen (using only the markers :html:`###PRODUCT_COLOR###` and :html:`###PRODUCT_SIZE###`). This is because the colors and sizes have been set to 0 in the setup.

The field name of all fields in the list view and the basket view is addressed
with the marker :html:`###FIELD_NAME###`. This marker is internally replaced
by a field name to read and arrange it correctly.
If you have products in different colors, sizes and gradings for counts then you
must replace the marker :html:`###FIELD_NAME###` by the marker
:html:`###FIELD_NAME_BASKET###` in the subpart `BASKET_TEMPLATE`.

In the list view of the web module you can complete the already available products
by the variants, e.g. the color. For this you chose the table product articles.





BILD



Sie müssen im Template Setup useArticles=1 setzen, um die Artikeleigenschaften zu verwenden.
Wenn Sie bereits Produkte angelegt haben, diesen bereits in Produkteigenschaften verschiedene Farben zugeordnet haben, verfügen  Sie jedoch nur über eine Artikelnummer und einen Preis etc. zu diesem Produkt. Sie benötigen jedoch für Produkte z. B. unterschiedlicher Farbe auch unterschiedliche Artikelnummern und vielleicht Preise etc. Diese Zurodnungen erfolgen in den Artikeleigenschaften (Webmodul, Liste, Produkte Artikel – Tabelle). Der Vorteil ist, dass Sie die “neuen” Produkte nicht  neu anlegen müssen, sondern die Eigenschaften vererbt werden. Sie geben also nur noch die Farbe, neue Artikelnummer und evtl. neuen Preis ein. Alle anderen Angaben zum Produkt werden übernommen.  Lassen Sie ein Feld leer, so wird der  Feldinhalt aus den Produkte Eigenschaften übernommen.
Es macht einen Unterschied, ob ein Produkt mit verschiedenen Farben oder Größen in der Produktliste oder im Warenkorb angezeigt wird. Normalerweise wird die Farbe und Größe eine Produktes über eine Auswahlbox ausgewählt. In der Produktliste wird die Anzahl für die erste Farbe/Größe angezeigt. Im Warenkorb jedoch werden die Produkte in allen Varianten einzeln aufgelistet. Die Listes der Produkte im Warenkorb und in der Auswahlseite sind also beinahe gleich, aber sie werden anders gehandhabt. Sie müssen selectSize und selectColor deaktivieren, wenn Sie keine Auswahlboxen in der Produktliste haben wollen.




