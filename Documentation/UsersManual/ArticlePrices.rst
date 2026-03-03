

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

#.  Adaptions in the HTML Template
    You need to insert new fields into the :html:`###ITEM_LIST_TEMPLATE###` and
    :html:`###ITEM_SINGLE_DISPLAY###` subpart areas.

    *  The following HTML code must be inserted for the display of the selector box of the variants
       namely between the form tags. Moreover each information between
       :html:`###display_variant1###` or :html:`###display_variant2###` comments is not shown
       if this variant is not used. This is very useful if the word 'From' is inserted before the
       :html:`###PRICE_TAX###` value inside of the :html:`###display_variant2###` comments.
       So e.g. 'From $200' if the cheapest size shall cost €200 (therefore 
       the lowest price is entered in the father product. - by default the price of 
       the father product is shown in the list and single view. The price of the variant is only visible in
       the basket if a determined size (or colour etc.) has been selected. If no variants
       are seletable then the word 'from' is not shown.

       **Example:**
    
       ..  code-block:: html
           :caption: HTML template example for product variants
        
           <!-- ###display_variant1### -->
           Color:><select name="###FIELD_COLOR_NAME###" rows="1">###PRODUCT_COLOR###</select>
           <!-- ###display_variant1### --><!-- ###display_variant2### -->
           Size:>< select name="###FIELD_SIZE_NAME###" rows="1">###PRODUCT_SIZE###</select>
           <!-- ###display_variant2### -->
     
