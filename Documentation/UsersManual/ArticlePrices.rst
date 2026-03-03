

.. _users-manual-articles-prices:

Articles with prices
--------------------

Products in different sizes can be sold with different prices. The same is possible with colours and all other variants.

Variants:

*  Description (variant 3)
*  Color (variant 1)
*  2nd Color (variant 6)
*  3rd Color (variant 7)
*  Size length (variant 2)
*  2nd Size width (variant 8)
*  3rd Size height (variant 9)
*  Gradings (variant 4)
*  Material (variant 10)
*  Quality (variant 11)

*  Additional (special variant 5)


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
    *   Bild    
    *  Datenblatt (falls benötigt).


