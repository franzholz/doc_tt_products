.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _administration-handling-of-categories:

Handling of Categories
----------------------

There are multiple ways to create a shop. The usual way is to create sysfolders for the products and lists and single sites where the products are displayed. If you want to build a bigger shop with TYPO3, this will become a little bit unhandy.

If you want to make bigger shops with hierarchical categories you shall install the
mbi_products_categories and maybe also the nsb_cat2menu extension. Sponsors will get a working version of mbi_products_categories with which you can assign many categories to one products via a mm-table. Only with this it will be possible to show a product in the list view under multiple categories.

**Example of tt_products/ext_localconf.php:**

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Typo3confvarsextconfttproductspageascategory/Index
