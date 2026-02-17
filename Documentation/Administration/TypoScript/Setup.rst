:navigation-title: Typoscript Setup
..  _typoscript-setup:

================
TypoScript Setup
================





Properties
==========

..  contents::
    :local:



..  _setup-template-file:

templateFile
------------

..  confval:: templateFile
    :name: template file
    :type: resource

    Same as :typoscript:`file.templateFile` from Constants.
    The template-file.
    See example in :composer:`jambagecom/addons-tt-products` :file:`Resources/Private/Templates/collection/products_template.tmpl`
    You can also specify a :typoscript:`CODE` and :typoscript:`ERROR` for error cases.
    (see display mode)

    **Example:**

    ..  code-block::typoscript
        :caption:  plugin.tt_products.templateFile

    plugin.tt_products {
        templateFile = EXT:/addons_tt_products/Resources/Private/Templates/collection/example_template_bill_de.tmpl
    }

    plugin.tt_products {
        templateFile.LIST = EXT:tt_products/Resources/Private/Templates/example_locallang_xml.html
    }



..  _template-suffix:

templateSuffix
--------------

..  confval:: templateSuffix
    :name: template suffix
    :type: string

    This suffix is appended to all templates' major subparts.


..  _fe:

fe
--

..  confval:: fe
    :name: front end output
    :type: boolean

    If front end output is used. You can turn off the front end output.
    This is useful for a callback script (see CODE SCRIPT).
    No template file is needed in this case.



..  _pid-list:

pid_list
--------

..  confval:: pid_list
    :name: pid list
    :type: list of page_id's

    The pids from where to fetch categories, products and so on.
    Default is the current page. Accepts multiple pids separated by comma.


..  _default-code:

defaultCode
-----------

..  confval:: defaultCode
    :name: default code
    :type: string

    The default code (see below) if the value is empty. By default it is not set
    and a help screen will appear. You should not set anything here.

    **Example:**

    ..  code-block:: typoscript
        :caption:  defaultCode = HELP

        defaultCode = HELP


..  _code:

code
----

..  confval:: code
    :name: code
    :type: string /stdWrap
    :default: HELP

    see chapter 'display mode'


..  _default-article-id:

defaultArticleID
----------------

..  confval:: defaultArticleID
    :name: default article ID
    :type: int+

    The default article uid number for the single display is used when the link to the script did not contain a 'tt_products[article]' parameter.

..  _default-product-id:

defaultProductID
----------------

..  confval:: defaultProductID
    :name: default product ID
    :type: int+

    The default product uid number for the single display is used when the link to the script did not contain a 'tt_products[product]' parameter.
    Set this default value when you get an error message like: 
    “GET/POST var 'tt_products[product]' was missing.”


..  _default-category-id:

defaultCategoryID
-----------------

..  confval:: defaultCategoryID
    :name: default category ID
    :type: int+

    The default category uid number for the list display is used when the link to the script did not contain a 'tt_products[cat]' parameter. 
    Use this if you want only products of this category displayed in the list view as a default.


..  _default-page-id:

defaultPageID
--------------

..  confval:: defaultPageID
    :name: default page ID
    :type: int+

    The default category uid number for the list display is used when the link to the script did not contain a 'tt_products[pid]' parameter.
    Use this if you use pages as categories and want only products of this category displayed in the list view as a default.


..  _default-dam-category-id:

defaultDAMCategoryID
--------------------

..  confval:: defaultDAMCategoryID
    :name: default DAM category ID
    :type: int+

    See defaultCategoryID, but for DAM categories and the 'tt_products[damcat]' parameter.


..  _product-dam-category-id:

productDAMCategoryID
--------------------

..  confval:: productDAMCategoryID
    :name: product DAM category ID
    :type: int+

    DAM category of products to be used in DAM lists.


..  _root-address-id:

rootAddressID
-------------

..  confval:: rootAddressID
    :name: root address ID
    :type: int+

    The upper most address ID from where you want to start to list addresses.


..  _root-category-id:

rootCategoryID
--------------

..  confval:: rootCategoryID
    :name: root category ID
    :type: int+

    The upper most category ID from where you want to start to list categories.


..  _root-dam-category-id:

rootDAMCategoryID
-----------------

..  confval:: rootDAMCategoryID
    :name: root DAM category ID
    :type: int+

    The upper most DAM category ID from where you want to start to list DAM categories.


..  _root-page-id:

rootPageID
----------

..  confval:: rootPageID
    :name: root page ID
    :type: int+

    The upper most page ID from where you want to start to list them as categories.



