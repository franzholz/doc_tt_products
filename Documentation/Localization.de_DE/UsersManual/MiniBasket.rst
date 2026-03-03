.. _users-manual-mini-basket:

Mini Basket
-----------

Neben dem “normalen” Warenkorb, der eine komplette Liste der eingegebenen Produkte in einer gewissen
Sortierreihenfolge anzeigt, gibt es auch einen "Mini-Warenkorb", der nur die Anzahl der Produkte im
Warenkorb und den Gesamtpreis anzeigt.
Dieser zeigt Ihnen während der Verweildauer im Shop ständig aktualisiert den Inhalt Ihres Warenkorbes
oberhalb der normalen Ansicht (oder wo Sie wünschen) an. Die Stelle, an der der “Mini-Warenkorb” angezeigt
werden soll, kann über Typoscript gesteuert werden. Um diesen Mini-Warenkorb verwenden zu können, fügen
Sie ein neues Seiteninhaltselement "Plugin: Produkte" ein und tragen in das CODE-Feld OVERVIEW ein.

Verwenden Sie die folgenden Markierungen in Ihrem tt_products Template um den Mini-Warenkorb zu
aktivieren und anzupassen:

Code Anzeige:

..  code-block:: html
    :caption: Mini Warenkorb HTMl Template

    <!-- ###BASKET_OVERVIEW_TEMPLATE### begin -->
    <div class="shop_minibasket">
      <div class="shop_minibasket_image"><!--###LINK_BASKET###-->###IMAGE_BASKET###<!--
      ###LINK_BASKET###--></div>
      <p>###NUMBER_GOODSTOTAL### Produkte (EUR ###PRICE_GOODSTOTAL_TAX###.-)</p>
    <!-- ###BASKET_OVERVIEW_TEMPLATE### end -->
    <!-- ###BASKET_OVERVIEW_EMPTY### begin -->
      <p>Keine Produkte im Warenkorb.</p>
    <!-- ###BASKET_OVERVIEW_EMPTY### end -->
    </div>
