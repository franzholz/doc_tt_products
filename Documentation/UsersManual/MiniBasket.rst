.. _users-manual-mini-basket:

Mini Basket
-----------

Besides of a "normal" basket which shows a complete list of the entered products in a given sorting order
there is also a "mini basket" which only shows the number of products in the basket and the total sum.
During your presence in the shop it continously refreshes the contents of the basket above the general view 
(or where you wish). The place where the "mini basket" is shown can be configured via TypoScript. 
In order to use the mini basket you insert a new page content element "Plugin: products" and enter "OVERVIEW" into the Code-field. 

Verwenden Sie die folgenden Markierungen in Ihrem tt_products Template um den Mini-Warenkorb zu
aktivieren und anzupassen:
Use the following markers in your tt_products template to activate the mini basket output.

Code Listing:

..  code-block:: php
    :caption: mini basket HTML template

    <!-- ###BASKET_OVERVIEW_TEMPLATE### begin -->
    <div class="shop_minibasket">
      <div class="shop_minibasket_image"><!--###LINK_BASKET###-->###IMAGE_BASKET###<!--
      ###LINK_BASKET###--></div>
      <p>###NUMBER_GOODSTOTAL### Products (EUR ###PRICE_GOODSTOTAL_TAX###.-)</p>
    <!-- ###BASKET_OVERVIEW_TEMPLATE### end -->
    <!-- ###BASKET_OVERVIEW_EMPTY### begin -->
      <p>No products in the basket.</p>
    <!-- ###BASKET_OVERVIEW_EMPTY### end -->
    </div>
