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
    :name: domain
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


..  _std-search-field-ext:

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


..  _list-image:

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


..  _list-image-has-childs:

listImageHasChilds
------------------

..  confval:: listImageHasChilds
    :name: list image for items having childs (DAM only)
    :type: IMAGE cObject
    :default: see :file:`setup.typoscript`

    The image configuration in list display if there is a filter for a category on the page and this category has childs.

    see listImage


..  _basket-image:

basketImage
-----------

..  confval:: basketImage
    :name: image for basket display
    :type: IMAGE cObject
    :default: see :file:`setup.typoscript`

    The image configuration in basket display


..  _data-sheet-icon:

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


..  _basket-pic:

basketPic
---------

..  confval:: basketPic
    :name: basket picture
    :type: string
    :default: see :file:`setup.typoscript`

    URL link to the basket image


..  _click-into-basket:

clickIntoBasket
---------------

..  confval:: clickIntoBasket
    :name: click into the basket
    :type: boolean
    :default: 0 (false)

    If set you will be directed into the basket page after putting a product into the basket. This only works if PIDbasket has been set.


..  _click-into-basket:

clickIntoList
-------------

..  confval:: clickIntoList
    :name: click into the list
    :type: boolean
    :default: 0 (false)

    If set you will be directed into the list page from the single view after putting a product into the basket. This only works if PIDlistDisplay has been set.


..  _max-basket-quantity:

basketMaxQuantity
-----------------

..  confval:: basketMaxQuantity
    :name: maximum basket quantity
    :type: int+ / string
    :default: 100000

    The maximum integer value for the quantity of an item in the basket.
    'inStock': Only the number of items which are currently in stock can be put into the basket.
    'creditpoint': Items can only be put into the basket if the FE user has enough credit points.


..  _quantity-is-float:

quantityIsFloat
---------------

..  confval:: quantityIsFloat
    :name: basket quantity is a float value
    :type: boolean
    :default: 100000

    quantityIsFloat	boolean	If set the basket count can be a float value.	


..  _no-image-available:

noImageAvailable
----------------

..  confval:: noImageAvailable
    :name: alternative image
    :type: resource

    The image file displayed if no image was attached to a product. This image is processed by the :typoscript:`IMAGE` :php:`cObject`
    which is active in the actual display of that image. That is, one of the above :typoscript:`IMAGE` :php:`cObject`s.	


..  _display-list-cat-header:

displayListCatHeader
--------------------

..  confval:: displayListCatHeader
    :name: display category header in list
    :type: boolean
    :default: 1 (true)

    If this option is set, the category headers (page titles) will automatically be displayed in the product lists. 
    This is not always convenient because you might have chosen a header-title for the "list" content element.


..  _display-basket-cat-header:

displayBasketCatHeader
----------------------

..  confval:: displayBasketCatHeader
    :name: display category header in basket
    :type: boolean
    :default: 0 (false)

    If this option is set, the category headers (page titles) will automatically be displayed in the basket lists.


..  _display-cat-list-type:

displayCatListType
------------------

..  confval:: displayCatListType
    :name: display category list header type
    :type: string
    :default: ul

    Define the HTML main tag for the display of the categories in the category list view.
    Use the new plugin 'Categories: menu' instead of the former displayCatListType=ul.	ul


..  _substitute-page-title:

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


..  _no-single-view-on-list:

NoSingleViewOnList
------------------

..  confval:: NoSingleViewOnList
    :name: no single view on list
    :type: boolean
    :default: 0 (false)

    Usually you get the link to the single item view on the display page of the LIST code. 
    If you however want to create your own pages for single view with SINGLE code you must set this to 1.


..  _item-marker-array-func:

itemMarkerArrayFunc
-------------------

..  confval:: itemMarkerArrayFunc
    :name: function to get the markerArray for an item
    :type: *function-name*

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


..  _pid-item-display:

PIDitemDisplay
--------------

..  confval:: PIDitemDisplay
    :name: PID for single item display
    :type: int+/*Array of integers*

    If you want a certain page to be used for display of item details, please enter the PID (page-uid) here.
    If you set the type to sql, you can use conditions using several lines. The where string can contain the AND condition.
    The pid for the first fulfilled condition will be returned.

    If you want a certain page to be used for display of item details, please enter the PID (page-uid) here.
    If you set the type to sql, you can use conditions using several lines. The where string can contain the
    AND condition. The pid for the first fulfilled condition will be returned.

    **Example:**

    ..  code-block:: typoscript
        :caption: PIDitemDisplay with where conditions
    
        PIDitemDisplay {
             10.type = sql 
             10.where = color=red
             10.pid = 142 
             20.type = sql 
             20.where = color=white 
             20.pid = 143 
        }
        
    If you set the type to pid then the pid of the record will be used.

    ..  code-block:: typoscript
        :caption: PIDitemDisplay with where conditions

        PIDitemDisplay {
            10.type = pid
        }


..  _pid-list-display:

PIDlistDisplay
--------------

..  confval:: PIDitemDisplay
    :name: PID for the item list display
    :type: int+/*Array of integers*

    Similar to PIDitemDisplay, however the category table is used here.	


..  _pid-search:

PIDsearch
---------

..  confval:: PIDsearch
    :name: PID for search page
    :type: int+

    If you want all product searches to go to a specific page, enter the PID it here! NOTE: 
    If you set this PID, all searchqueries will (must) be handled with a list content element with 
    the display mode "Products: search" on that page.


..  _pid-search:

PIDsearch
---------

..  confval:: PIDbasket
    :name: PID for the basket page
    :type: int+

    If you want ever change the number of items anywhere to go to a specific page
    (eg. the shopping basket page), enter the PID here.


..  _pid-store-root:

PIDstoreRoot
------------

..  confval:: PIDstoreRoot
    :name: PID for store root
    :type: int+

    This is the PID of the rootPage of the store. If not set the store will operate over all pages 
    from the root of the site. But if the site has many pages, performance may improve.
    You should better set pid_list instead of it.


..  _pid-store-root:

PID_sys_products_orders	
-----------------------

..  confval:: PID_sys_products_orders
    :name: PID for the sys_products_orders records.
    :type: int+

    By default they will get the pid of the payment (finalize) page.	


..  _pid-info:

PIDinfo	
-------

..  confval:: PIDinfo
    :name: PID for the info page	
    :type: int+

    On the info page name and address are entered.		


..  _pid-payment:

PIDpayment	
----------

..  confval:: PIDpayment
    :name: PID for the payment page	
    :type: int+

    On the payment page the address is checked and the order is confirmed by the customer. 
    You could change to a payment gateway from here.


..  _pid-finalize:

PIDfinalize	
----------

..  confval:: PIDfinalize
    :name: PID for the finalization page	
    :type: int+

    The finalization page is the page directed to after the user has confirmed the order data. 
    The order will get stored here.


..  _pid-thanks:

PIDthanks	
---------

..  confval:: PIDthanks
    :name: PID for the thanks page	
    :type: int+

    The thanks page can be shown instead of the order confirmation. BASKET_ORDERTHANKS_TEMPLATE will be used. 
    You must not set PIDfinalize if you use this.


..  _pid-tracking:

PIDtracking	
-----------

..  confval:: PIDtracking
    :name: PID for the order tracking
    :type: int+

    The tracking is a front end tool to see and set the status of an order.


..  _pid-biling:

PIDbilling	
----------

..  confval:: PIDbilling
    :name: PID for the generation of the bill
    :type: int+


..  _pid-delivery:

PIDdelivery	
-----------

..  confval:: PIDdelivery
    :name: PID for the generation of the delivery sheet
    :type: int+


..  _pid-memo:

PIDmemo
-------

..  confval:: PIDmemo
    :name: The ID of the memo page
    :type: int+


..  _pid-agb:

PIDagb
------

..  confval:: PIDagb
    :name: The ID of the agb page
    :type: int+

    The PID of a page with the general trading conditions (“AGB” in germany)
    Only if this page id is set the AGB check will be active.


..  _pid-revocation:

PIDrevocation
-------------

..  confval:: PIDrevocation
    :name: The PID of a page with the right of revocation.	
    :type: int+


..  _pid-user-folder:

PIDuserFolder
-------------

..  confval:: PIDuserFolder
    :name: The sysfolder, where the new users should be stored	
    :type: int+


..  _pid-related-products:

pidsRelatedProducts
-------------------

..  confval:: pidsRelatedProducts
    :name: Allowed pages for related products.
    :type: int+


..  _pids-addresses:

pidsAddresses
-------------

..  confval:: pidsAddresses
    :name: Allowed pages for addresses
    :type: int+


..  _uid-store:

UIDstore
--------

..  confval:: UIDstore
    :name: Shop data uid of fe_users
    :type: int+

    comma  separated list of UIDs of the fe_users table with the data of the shop.


..  _payment-activity:

paymentActivity
---------------

..  confval:: paymentActivity
    :name: payment activity
    :type: string
    :default: finalize

    When the payment with a payment script shall be executed.
    Possible values:  

    *   payment
    *   finalize
    *   verify


..  _advance-order-number-with-integer:

advanceOrderNumberWithInteger
-----------------------------

..  confval:: advanceOrderNumberWithInteger
    :name: order number advance between each order
    :type: string
    :default: finalize

    If this value is set, then each time a new order is created the order-number counter will be incremented with
    a random number between [first-integer] and [second integer] to cheat a little.  

    **Example:**
    *   1,10:  This will increment the counter randomly between 1 and 10
    *   5,5:   This will increment the counter with 5 each time


..  _always-advance-order-number:

alwaysAdvanceOrderNumber
------------------------

..  confval:: alwaysAdvanceOrderNumber
    :name: always advance the order number
    :type: boolean
    :default: 0 (false)

    If set then the order number will always get increased and the empty order numbers are not reused. 
    You have to set this if you use a payment script to pay via a payment system which does not accept duplicate order numbers.


..  _always-update-order-amount:

alwaysUpdateOrderAmount
-----------------------

..  confval:: alwaysUpdateOrderAmount
    :name: always update the order amount
    :type: boolean
    :default: 0 (false)

    If set then the entered order amount will always be updated and not increased by the entered number.


..  _parse-func:

parseFunc
---------

..  confval:: parseFunc
    :name: parser function 
    :type: see parseFunc

    The product details are parsed by these properties. So if e.g. you want ot allow HTML-tags to create a table
    in the Note field you have to set the parseFunc.allowTags or use the denyTags.
    To make RTE working with HTML you have to set the following into the root page template. 



