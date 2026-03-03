

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


#.  In the TypoScript for the template you enter a
    :typoscript:`plugin.tt_products.useArticles = 1`
    If you use columns for the list view of the products then you also need
    :typoscript:`plugin.tt_products.conf.tt_products.LIST.displayColumns = 1`

    All  this tells the shop that the date are read from the article table and that
    a select box is shown if variants are used.

#.  Choose the father product.
    This is the first information which is shown in the front end list and in the single views, e.g. in
    the description and about images. Create a new entry in the backend list module.
    Choose the product ..
   You have to fill in the following fields.
    *  Title
    *  in Stock (must be at least 1 to be shown in the front end)
    *  category (if needed)
    *  Price (this should be the lowest price for the cheapes size - this corresponds to the cheapest 
       article, which will be entered next.
    *  Sieze (the same is valid for colour/description/grading if needed)
       Is is by all means necessary to have the possibility to select a product variant in the front end.
       where all size variants are entered in a list separeted by a semicolon, 
       e.g.: S;M;X;XL . These articles we want to enter next.
    *  Note    
    *  Image    
    *  Datasheet (if needed).

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
           :caption: HTML template example for product variants
        
           <!-- ###display_variant1### -->
           Farbe:><select name="###FIELD_COLOR_NAME###" rows="1">###PRODUCT_COLOR###</select>
           <!-- ###display_variant1### --><!-- ###display_variant2### -->
           Gr&ouml;e:>< select name="###FIELD_SIZE_NAME###" rows="1">###PRODUCT_SIZE###</select>
           <!-- ###display_variant2### -->
     
