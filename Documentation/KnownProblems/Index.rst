

.. _known-problems:

Known problems
==============


.. _known-problems-general:

General:
--------


*   Always use the version of the `Table Library (table) <https://extensions.typo3.org/extension/table>`_ ,
  the `Extension Library since 2007 (div2007) <https://extensions.typo3.org/extension/div2007>`_
  and the other required extensions as described in `Shop System tt_products <https://extensions.typo3.org/extension/tt_products>`_ .
*   Please look at the website `Wiki for_tt_products
  <https://github.com/franzholz/tt_products/wiki>`_ .
*   Get the latest supported version from `Upgrade licences shop for_tt_products
  <https://www.ttproducts.de/shop>`_ .
  Or have a look at the forum at `mehrsprachiges Forum zur TYPO3 Benutzerregistrierung, Shop System
  <https://www.jambage.com/kontakt/forum>`_ .
*   :file:`.htaccess` must be properly configured otherwise tt_products does not work as expected because the
  plugin can't find all necessary scripts with a poor configuration of :file:`.htaccess`.
*   **Wrong parameters. GET/POST var 'tt_products[|]' is missing or no item with uid = x found on allowed pages (y,z)**
  You should set the pid_list to inform the shop where to search for the products.
*   **Pay attention to all legal claims of all the countries where you ship the goods to!**
*   The plugin does not produce any output See the checklist below.
*   The LIST view does not replace some marker fields: Use the Setup :typoscript:`addToList`
    with :typoscript:`requiredFields` and add the missing fields.

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Checklist

