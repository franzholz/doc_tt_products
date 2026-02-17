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


..  _recursive:

recursive
---------

..  confval:: recursive
    :name: recursive level for pages
    :type: int+
    :default: 99

    Number of recursive sublevels of pids to select tt_products from in lists.


..  _domain:

domain
------

..  confval:: domain
    :name: recursive level for pages
    :type: string

    The url of the shop. If not set, it will be detected automatically. Will replace :html:`###DOMAIN###` markers.


..  _alt-main-markers:

altMainMarkers
--------------

..  confval:: altMainMarkers
    :name: alternative main subpart markers
    :type: *array of string*

    Lets you specify alternative subpart markers for the various main template designs in the shopping basket system.
    This is the list of main subparts you can override:

    ..  code-block:: php
        :caption: main subpart markers with may get an alternative marker name
    
        TRACKING_WRONG_NUMBER
        TRACKING_ENTER_NUMBER
        BASKET_REQUIRED_INFO_MISSING
        BASKET_TEMP
        ITEM_SINGLE_DISPLAY_RECORDINSERT
        ITEM_SINGLE_DISPLAY
        ITEM_SEARCH
        ITEM_LIST_TEMPLATE
        ITEM_SEARCH_EMPTY
        BASKET_TEMPLATE
        BASKET_INFO_TEMPLATE
        BASKET_PAYMENT_TEMPLATE
        BASKET_ORDERCONFIRMATION_TEMPLATE
        EMAIL_PLAINTEXT_TEMPLATE
        BILL_TEMPLATE
        DELIVERY_TEMPLATE
    
    **Example:**

    ..  code-block:: typoscript
        :caption: main subpart markers with may get an alternative marker name
    
        altMainMarkers.BASKET_TEMPLATE =  BASKET_DESIGN2
        altMainMarkers.BASKET_TEMPLATE.wrap = ### | ###

    This example changes the main subpart marker for the regular basket display from the default :html:`###BASKET_TEMPLATE###` 
    to the custom supplied design :html:`###BASKET_DESIGN2###` (found in the same template HTML-file)


..  _std_search_field_ext:

stdSearchFieldExt
-----------------

..  confval:: stdSearchFieldExt
    :name: list of search fields
    :type: *list of fields*
    :default: title,subtitle,note

    Default internal list is title,subtitle,note. You can specify your default fields here.


..  _limit:

limit
-----

..  confval:: limit
    :name: maximum items displayed
    :type: int+
    :default: 99

    The maximum number of items displayed on one page.


..  _separate-image:

separateImage
-------------

..  confval:: separateImage
    :name: show each image separately
    :type: boolean
    :default: 0

    Normally all images are shown combined together. With separateImage=on you can use a :html:`###PRODUCT_IMAGE3###` 
    for each image number (starting with 1) separatly.


..  _image:

image
-----

..  confval:: image
    :name: image for single view
    :type: IMAGE cObject
    :default: see :file:`setup.typoscript`

    The image configuration in single display


..  _list_image:

listImage
---------

..  confval:: listImage
    :name: image for list view
    :type: IMAGE cObject
    :default: see :file:`setup.typoscript`

    The image configuration in list display

    **Example:**

    ..  code-block:: typoscript
        :caption: reset the ListImage

        listImage >
        listImage {
          altImgResource.import = uploads/media/
          altImgResource.import.field = media
          altImgResource.import.listNum = 0
          altText.data = field:title
        }

    That way, attached images are not copied to and displayed from
    :file:`/typo3temp/` (which gives trouble with transparent backgrounds) but directly linked from :file:`/uploads/pics/`.
    The line with :typoscript:`altText` leads to the drawing of an alternative text.


..  _list_image_has_childs:

listImageHasChilds
------------------

..  confval:: listImageHasChilds
    :name: list image for items having childs (DAM only)
    :type: IMAGE cObject
    :default: see :file:`setup.typoscript`

    The image configuration in list display if there is a filter for a category on the page and this category has childs.

    see listImage


..  _basket_image:

basketImage
-----------

..  confval:: basketImage
    :name: image for basket display
    :type: IMAGE cObject
    :default: see :file:`setup.typoscript`

    The image configuration in basket display


..  _data_sheet_icon:

datasheetIcon
-------------

..  confval:: datasheetIcon
    :name: data sheet icon
    :type: IMAGE cObject / *Array of integers (only setup)*
    :default: see :file:`setup.typoscript`

    The image icon for the datasheet. Replaces ###ICON_DATASHEET###

    If it is an array, then it consists of a file type and a file name.
    
    **Example:**

    ..  code-block:: typoscript
        :caption: EXT:my_extension/ext_localconf.php
    
        plugin.tt_products.datasheetIcon {
               10.fileext = pdf
               10.file = fileadmin/img/pdf-icon.png
               20.fileext = doc
               20.file = fileadmin/img/msword-icon.png
        }


..  _basket_pic:

basketPic
---------

..  confval:: basketPic
    :name: basket picture
    :type: string
    :default: see :file:`setup.typoscript`

    URL link to the basket image


..  _click_into_basket:

clickIntoBasket
---------------

..  confval:: clickIntoBasket
    :name: click into the basket
    :type: boolean
    :default: 0 (false)

    If set you will be directed into the basket page after putting a product into the basket. This only works if PIDbasket has been set.


..  _click_into_basket:

clickIntoList
-------------

..  confval:: clickIntoList
    :name: click into the list
    :type: boolean
    :default: 0 (false)

    If set you will be directed into the list page from the single view after putting a product into the basket. This only works if PIDlistDisplay has been set.


..  _max_basket_quantity:

basketMaxQuantity
-----------------

..  confval:: basketMaxQuantity
    :name: maximum basket quantity
    :type: int+ / string
    :default: 100000

    The maximum integer value for the quantity of an item in the basket.
    'inStock': Only the number of items which are currently in stock can be put into the basket.
    'creditpoint': Items can only be put into the basket if the FE user has enough credit points.


..  _quantity_is_float:

quantityIsFloat
---------------

..  confval:: quantityIsFloat
    :name: basket quantity is a float value
    :type: boolean
    :default: 100000

    quantityIsFloat	boolean	If set the basket count can be a float value.	


..  _no_image_available:

noImageAvailable
----------------

..  confval:: noImageAvailable
    :name: alternative image
    :type: resource

    The image file displayed if no image was attached to a product. This image is processed by the :typoscript:`IMAGE` :php:`cObject`
    which is active in the actual display of that image. That is, one of the above :typoscript:`IMAGE` :php:`cObject`s.	


..  _display_list_cat_header:

displayListCatHeader
--------------------

..  confval:: displayListCatHeader
    :name: display category header in list
    :type: boolean
    :default: 1 (true)

    If this option is set, the category headers (page titles) will automatically be displayed in the product lists. 
    This is not always convenient because you might have chosen a header-title for the "list" content element.


..  _display__basketcat_header:

displayBasketCatHeader
----------------------

..  confval:: displayBasketCatHeader
    :name: display category header in basket
    :type: boolean
    :default: 0 (false)

    If this option is set, the category headers (page titles) will automatically be displayed in the basket lists.


..  _display_cat_list_type:

displayCatListType
------------------

..  confval:: displayCatListType
    :name: display category header in basket
    :type: string
    :default: ul

    Define the HTML main tag for the display of the categories in the category list view.
    Use the new plugin 'Categories: menu' instead of the former displayCatListType=ul.	ul


..  _substitute_page_title:

substitutePagetitle
-------------------

..  confval:: substitutePagetitle
    :name: substitute the page title
    :type: int+
    :default: 1

    Set the page title in single view:

    *   1   : product title
    *   2   : product subtitle
    *  12   : product title and subtitle
    *  21   : product subtitle and title
    *   3   : bread crumb


..  _css:

CSS
---

..  confval:: CSS
    :name: Cascading Stylesheets settings
    :type: *see below*

    Set the CSS files.


..  _js:

js
--

..  confval:: js
    :name: JavaScript settings
    :type: *see below*

    Set the JavaScript files.


..  _conf:

conf
----

..  confval:: conf
    :name: table settings
    :type: *see below*

    configurations of the tables	


..  _no_single_view_on_list:

NoSingleViewOnList
------------------

..  confval:: NoSingleViewOnList
    :name: no single view on list
    :type: boolean
    :default: 0 (false)

    Usually you get the link to the single item view on the display page of the LIST code. 
    If you however want to create your own pages for single view with SINGLE code you must set this to 1.


..  _item_marker_array:

itemMarkerArrayFunc
-------------------

..  confval:: itemMarkerArrayFunc
    :name: no single view on list
    :type: *function-name*
    :default: 0 (false)

    Every time a product is displayed be it in the basket, list or single view, the method :php:`getItemMarkerArray()` 
    in :php:`tx_ttproducts_marker` is called. This function fills in and returns an array, so called markerArray(),
    with key/values for template substitution.
    If you enter a valid function name here (see datatype 'function-name' for details!) that array will be passed
    to that function as the second parameter. The first parameter will be the TypoScript properties to :php:`itemMarkerArrayFunc`.

    Parent PHP-Object reference:
    .parentObj property is hardcoded to be a reference to the calling user_products object (PHP).
    
    **Example:**
    (provided that a function or class is included!)

..  code-block:: typoscript
    :caption: define an itemMarkerArrayFunc

    itemMarkerArrayFunc = user_addFieldsMarkerArr
    itemMarkerArrayFunc.simpleOption = 1


