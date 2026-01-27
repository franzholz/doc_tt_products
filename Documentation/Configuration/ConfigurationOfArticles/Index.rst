
.. _configuration-configuration-of-articles:

Configuration of Articles, Products, Categories, Pages, Addresses and Images
----------------------------------------------------------------------------

Setup only.

The last but one/two value will be the name of the view. It can be 'ALL', if it is valid for all
views..

Views correspond to the code field:

*    SINGLE
*    LIST
*    BASKET

additional possible values are

*    EMAIL 
*    PAYMENT
*    LISTRELATED (LIST for related products)

**Example:**

..  code-block:: typoscript
    :caption: generatePath

    plugin.tt_products.conf.tt_products_articles.LIST.generatePath.base = fileadmin/images
    plugin.tt_products.conf.tt_products.LIST.orderBy = sorting



.. toctree::
    :maxdepth: 2
    :titlesonly:

    Pluginttproductsconfttproductsarticleslistgeneratepathbase/Index
