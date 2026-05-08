

.. _users-manual-modify-the-page-menu:

Ergänzung zum Seitenmenü
------------------------

Sie können die Anzahl der in den Unterseiten gefundenen Produkte an die Anzeige des Seitentitels anhängen.

**Example:**

..  code-block:: typoscript
    :caption: show products found in subpages in menu

    includeLibs.tt_products_ts = EXT:tt_products/api/class.tx_ttproducts_ts.php
    
    lib.menu_top.2 = TMENU
    lib.menu_top.2.IProcFunc = tx_ttproducts_ts->pageProductCount_IProcFunc
    

