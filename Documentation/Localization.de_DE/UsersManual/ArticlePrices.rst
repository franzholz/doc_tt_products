

.. _users-manual-articles-prices:

Artikel mit Preisen
-------------------

Produkte können in verschiedenen Größen zu verschiedenen Preisen verkauft werden.
Das selbe Verfahren können Sie auch mit Farben und den anderen Varianten anwenden.

Varianten:

*  Behreibung (Variante 3)
*  1. Farbe (Variante 1)
*  2. Farbe (Variante 6)
*  3. Farbe (Variante 7)
*  1. Größe Länge (Variante 2)
*  2. Größe Breite (Variante 8)
*  3. Größe Höhe (Variante 9)
*  Staffeln (Variante 4)
*  Material (Variante 10)
*  Qualität (Variante 11)

*  Zusätzliches (spezielle Variante 5)


#.  Im TSSetup für das Template geben Sie ein
    :typoscript:`plugin.tt_products.useArticles = 1`
    Wenn Sie Spalten für die Listenanzeige der Produkte verwenden, wie im Bananaguard Beispiel, dann
    benötigen Sie auch
    :typoscript:`plugin.tt_products.conf.tt_products.LIST.displayColumns = 1`

    Alles das teilt dem Shop mit, dass die Daten aus der Produkte Artikel Tabelle gelesen werden und dass
    eine Auswahlbox dargestellt wird, wenn Varianten verwendet werden.

#.  Geben Sie das Vaterprodukt an.
    Das ist die erste Information, die in der Frontend Liste und in Einzelansichten angezeigt wird, z.B. in
    der Beschreibung und über die Bilder. Erzeugen Sie einen neuen Eintrag im Web > Liste Modul.
    Wählen Sie das Produkt aus..
    Sie müssen folgende Felder ausfüllen.
    *  Titel
    *  auf Lager (muss mindestens 1 betragen, damit es im Frontend angezeigt wird)
    *  Kategorie (falls benötigt)
    *  Preis (das sollte der niedrigste Preis für die billigste Größe sein – das entspricht dem billigsten
       Produkt Artikel, den wir als nächstes eingeben werden)
    *  Größe (dasselbe gilt für Farbe/Beschreibung/Staffelung falls benötigt)
       Es ist unbedingt notwendig, um im Frontend die Möglichkeit zu haben, eine Produktvariante
       auswählen zu können, dass alle Größenvarianten in eine durch Strichpunkt getrennten Liste
       eingegeben werden, z.B.: S;M;X;XL . Diese Artikel wollen wir als nächste eingeben.
    *  Bemerkung    
    *  Bild    
    *  Datenblatt (falls benötigt).

#.  Anpassungen im HTML Template
    Sie müssen neue Felder in die :html:`###ITEM_LIST_TEMPLATE###` und
    :html:`###ITEM_SINGLE_DISPLAY###` Bereiche einfügen

    *  Der folgende HTML Code muss für die Anzeige der Auswahlbox der Varianten eingefügt
       werden, und zwar innerhalb der Form-Tags. Außerdem wird jede Information innerhalb von
       :html:`###display_variant1###` oder :html:`###display_variant2###` Kommentaren nicht angezeigt,
       wenn diese Variante nicht verwendet wird. Das ist sehr nützlich, wenn das Wort 'Ab' vor dem
       :html:`###PRICE_TAX###` Wert innerhalb der :html:`###display_variant2###` Kommentare eingefügt
       wird. So wird z.B. 'Ab $200' wenn die billigste Größe €200 kosten soll (deshalb wird der
       niedrigste Preis im Vaterprodukt eingetragen. - standardmäßig wird der Preis des
       Vaterprodukts in der Listen- und Einzelansicht angezeigt. Der Preis der Variante wird erst im
       Warenkorb sichtbar, wenn eine bestimmt Größe (oder Farbe etc.) ausgewählt worden ist. Wenn
       keine Varianten zur Auswahl stehen, dann wird das Wort 'Ab' auch nicht angezeigt.

       **Beispiel:**
    
       ..  code-block:: html
           :caption: HTML Template Beispiel for Produkt Varianten
        
           <!-- ###display_variant1### -->
           Farbe:><select name="###FIELD_COLOR_NAME###" rows="1">###PRODUCT_COLOR###</select>
           <!-- ###display_variant1### --><!-- ###display_variant2### -->
           Gr&ouml;e:>< select name="###FIELD_SIZE_NAME###" rows="1">###PRODUCT_SIZE###</select>
           <!-- ###display_variant2### -->
     
