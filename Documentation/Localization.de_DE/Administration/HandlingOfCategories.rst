

.. _administration-handling-of-categories:

Handling of Categories
----------------------

There are multiple ways to create a shop. The usual way is to create :ref:`folders <t3coreapi:list-of-page-types-sysfolder>` for the products and lists and 
single sites where the products are displayed. If you want to build a bigger shop with TYPO3, then you should write your own import scripts for your products.
It would take too long to enter each product manually.

If you want to make bigger shops with hierarchical categories you shall install 
:composer:`jambagecom/mbi-products-categories`. It includes also an improved version of the PHP script available in the outdated extension *nsb_cat2menu*. 
By means of :composer:`jambagecom/mbi-products-categories` you can assign many categories to one products via a mm-table. 
Only with this it will be possible to show a product in the list view under multiple categories.

**Example:**

..  code-block:: php
    :caption: tt_products/ext_localconf.php unset pageAsCategory

    $TYPO3_CONF_VARS['EXTCONF']['tt_products']['pageAsCategory'] = 0;



