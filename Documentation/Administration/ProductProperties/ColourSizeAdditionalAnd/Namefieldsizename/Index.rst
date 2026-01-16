.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administration-product-properties-colour-size-additional-and-namefieldsizename:

name="###FIELD_SIZE_NAME###" rows="1">###PRODUCT_SIZE###
""""""""""""""""""""""""""""""""""""""""""""""""""""""""

If you do not make colours or size selectable, you have to set selectColor or selectSize to 0 and only use the ###PRODUCT_COLOR### and ###PRODUCT_SIZE### markers and within the template itself delete the corresponding ###display_variant### marker. You can, however, use markers as
representations of the colours, also if no different colours can be chosen.

The field name of all the fields in the list view and the basket view will be addressed with the
marker ###FIELD_NAME###. The markers will be internally replaced in the shop by a field name with which the field can be chosen and attributed correctly.

When you have products with different combinations of colours, sizes, and gradations, then you must replace the notation ###FIELD_NAME#### in the field BASKET_TEMPLATE with the notation
###FIELD_NAME_BASKET###.

In the list view of the web module, you can now complete the readily available items with the
variant, for example colour. For that purpose, you select the table product article.

You must set useArticles=1 in the template setup in order to apply the article
attributes/properties.

When you have prepared products, having arranged product qualities of different colour, you use only one article number and one price, etc. for this product. However, when you need, for example, different colours, different article numbers, and perhaps prices, etc then this arrangement occurs in the article property (web module, list, product article table). The advantage is that you do not need to create a completely "new" product. The default quality will be transmitted. You only give the colour a new article number and a new price. All other product statements will be accepted. Leave a field empty so the default product quality field content will be accepted.

It makes a differene, if an article with different colours or sizes in the product list or shopping
cart can be selected. A colour or size normally will be chosen by way of a selection box. The
quantity for the first colour/size will be indicated in the product list. The products in all
variables will be, however, individually listed. The lists of products on the basket and on the
payment page are, therefore, nearly the same, but will be handled otherwise/differently. You must
deactivate selectSize and selectColor whenever you do not want to have selection boxes in the
product list.
