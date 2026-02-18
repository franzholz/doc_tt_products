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

    **Example:***

    ..  code-block:: typoscript
        :caption: parseFunc
    
        parseFunc.allowTags = table,tr,td,b,i,u,a,img,br,div,center,pre,font,hr,sub,sup,p,strong,em,li,ul,ol,blockquote,strike,span,h1,h2,h3,h4,h5,h6
        parseFunc.denyTags = *


..  _category-header:

categoryHeader
--------------

..  confval:: categoryHeader
    :name: Generates the category header.
    :type: cObject

    **Example:***

    ..  code-block:: typoscript
        :caption: parseFunc
    
        categoryHeader = TEXT
        categoryHeader.current = 1


..  _breadcrumb:

breadcrumb
----------

..  confval:: breadcrumb
    :name: Generates a breadcrumb line.
    :type: cObject


..  _tax-percentage:

TAXpercentage
-------------

..  confval:: TAXpercentage
    :name: Sales TAX/VAT percentage.
    :type: cObject

    Double value (!) (means, "use . as decimal point")

    **Example:***

    ..  code-block:: typoscript
        :caption: set TAXpercentage
    
        # Danish sales TAX is 25%:
        TAXpercentage = 25.00


..  _tax-included:

TAXincluded
-----------

..  confval:: TAXincluded
    :name: TAX is included in the prices
    :type: boolean

    Set this, if TAX is included in the database prices! ( ... and of course: 
    Clear this, if TAX is not included in the database prices and should be added in the display of items)
    All profieldLinkcessing will take this flag into account and calculate prices accordingly.


..  _tax-rates:

TAXrates
--------

..  confval:: TAXrates
    :name: TAX rates
    :type: string

    Comma separated list of tax rates. The first will be taken as tax A, the second as tax B aso.


..  _tax-mode:

TAXmode
-------

..  confval:: TAXmode
    :name: TAX mode
    :type: int+
    :default: 1 

    *   1: The net sums are added first. The tax is added on the final total net sum.
    *   2: The gross price is calculated for every product. The total sum is calculated on the single gross prices.	1


..  _price-dec:

priceDec
--------

..  confval:: priceDec
    :name: price decimals
    :type: int+
    :default: 2 


..  _price-dec-point:

priceDecPoint
-------------

..  confval:: priceDecPoint
    :name: price decimal point
    :type: string
    :default: .


..  _price-thousand-point:

priceThousandPoint
------------------

..  confval:: priceThousandPoint
    :name: price thousand point
    :type: string

    Enter the thousand separator, if any.


..  _no-zero-decimal-point:

noZeroDecimalPoint
------------------

..  confval:: noZeroDecimalPoint
    :name: no decimal point for integer numbers
    :type: boolean

    If set then no decimal point is shown for integers.	


..  _price-no-reseller:

priceNoReseller
---------------

..  confval:: priceNoReseller
    :name: price number for reseller
    :type: int+

    Price number for reseller, which can only be 2 at the moment. The price2 will however only be taken when its value is greater than 0. 
    An enhancement extension must add more price fields if you want to use more price numbers.
    Here is the way to get the price2 for a special user group:

    **Example:**

    ..  code-block:: php
        :caption: active the price2 field for front end users with group 1
    
        [usergroup = 1]
        priceNoReseller = 2
        [global]
        ...


..  _percent-dec:

percentDec
----------

..  confval:: percentDec
    :name: Number of shown decimals of percentage values
    :type: int+


..  _percent-dec-point:

percentDecPoint
---------------

..  confval:: percentDecPoint
    :name: Percentage decimal point
    :type: string


..  _percent-thousand-point:

percentThousandPoint
--------------------

..  confval:: percentThousandPoint
    :name: Percentage Thousand point
    :type: string

    Enter the thousand separator, if any.


..  _percent-no-zero-decimal-point:

percentNoZeroDecimalPoint
--------------------------

..  confval:: percentNoZeroDecimalPoint
    :name: Percentage without decimal point for integer
    :type: string

    If set then no decimal point is shown for integers.


..  _currency-symbol:

currencySymbol
--------------

..  confval:: currencySymbol
    :name: Currency symbol
    :type: string
    :default: EURO

    Used in shop administration.

    **Example:**

    EUR
    DKR
    USD
    $


..  _lock-login-user-info:

lockLoginUserInfo
------------------

..  confval:: lockLoginUserInfo
    :name: lock login user information<
    :type: boolean
    :default: 1 (true)

    If set and a user is logged in, the address info of that fe_user gets filled in as billing address of the user. 
    It is not possible to change this data.


..  _edit-lock-login-info:

editLockedLoginInfo
-------------------

..  confval:: editLockedLoginInfo
    :name: edit and lock login user information
    :type: boolean

    If set and lockLoginUserInfo is set, then the filled in data is still editable for the order. 
    You have to set the input HTML tags for this.


..  _login-user-info-address:

loginUserInfoAddress
--------------------

..  confval:: loginUserInfoAddress
    :name: login user information address
    :type: boolean

    If lockLoginUserInfo is set, this switch makes that the address field is filled in from address, country, zip and city of the fe_user	


..  _required-info-address:

requiredInfoFields
------------------

..  confval:: requiredInfoFields
    :name: required info fields  (only setup)
    :type: boolean

    List of the fields which are re quired in the address information This example gives you all possibilities.

    **Example:**

    ..  code-block:: php
        :caption: requiredInfoFields
    
        requiredInfoFields = name,address,telephone,fax,email,company,city,zip,state,country

    The subvalues 'billing' and 'delivery' are possible.

    **Example:**

    ..  code-block:: typoscript
        :caption: requiredInfoFields for delivery
    
        requiredInfoFields.delivery = name,address


..  _order-number-prefix:

orderNumberPrefix
------------------

..  confval:: orderNumberPrefix
    :name: Prefix to the order numbers
    :type: string

    Max 10 chars. If this string starts with '%' then the rest will be interpreted as a PHP date format.


..  _order-email:

orderEmail
----------

..  confval:: orderEmail
    :name: order email
    :type: array

    This defines additional confirmation emails containing suffixes, sender and receiver email addresses.

    *   from:    'shop' will fetch orderEmail_from, 'customer' will fetch the customer email address.
    *   to:       email of the receiver
    *   suffix:   suffix to the '###EMAIL_PLAINTEXT_TEMPLATE_###' subpart.
    *   returnPath: email address to use in the case of a failure to send the email

    **Example:**

    ..  code-block:: typoscript
        :caption: requiredInfoFields for delivery
    
        plugin.tt_products.orderEmail {
               10.suffix = factory
               10.from = shop
               10.to = seller1@webshop-typo3.com
               10.attachment = bill
               20.suffix = logistic
               20.from = customer
               20.to = seller2@webshop-typo3.com
               20.attachment = bill
        }
    
    It is possible to send confirmation emails to the email address stored in a foreign table and where a foreign key has been added to the table fe_users.
    
    **Example:**

    ..  code-block:: typoscript
        :caption: requiredInfoFields for delivery
    
        plugin.tt_products.orderEmail {
           10000.suffix = shop
           10000.from = customer
           10000.to {
              table = fe_users
              field = key_field
              foreign_table = my_table
              foreign_field = my_table_key_field
              foreign_email_field = my_table_email
           }
        }
    
    A SQL comparison will be made to fetch the email address:

    ..  code-block:: php
        :caption: user defined query for order email my_table
    
        SELECT my_table_key_field FROM my_table WHERE my_table_key_field = $content_of_fe_users_key_field;
    

..  _order-email-bcc:

orderEmail_bcc
--------------

..  confval:: orderEmail_bcc
    :name: BCC for order email
    :type: array

    BCC for the shop  admin's order confirmation


..  _order-email-from:

orderEmail_from
---------------

..  confval:: orderEmail_from
    :name: sender email address for order email
    :type: array

    From email address for the confirmation email to customer


..  _order-email-from:

orderEmail_from
---------------

..  confval:: orderEmail_fromName		
    :name: From name for order email
    :type: array

    From name for the confirmation email to customer.


..  _order-email-to:

orderEmail_to
---------------

..  confval:: orderEmail_to	
    :name: Comma separated list of recipients of the order email. 
    :type: *list of email addresses*

    Shop and administrator/supervisor email addresses go here!


..  _order-email-to-adddress:

orderEmail_toAddress
--------------------

..  confval:: orderEmail_toAddress	
    :name: order email to all addresses 
    :type: boolean

    If set, then the order email is sent to all addresses which are connected to the products in the basket.


..  _order-email-radio:

orderEmail_radio
----------------

..  confval:: orderEmail_radio	
    :name: order email radio box
    :type: *array of radio button number and email adresses*

    Comma separated list of recipients of the order email if a radio box has been selected. 
    The number is the radio box and the second number is the selected value.

    **Example:**

    ..  code-block:: typoscript
        :caption: orderEmail for radio box selection
    
        orderEmail_radio {
           1.2 = inform@mytypo3site.de
        }
    

..  _order-email-radio:

orderEmail_toDelivery	
----------------------

..  confval:: orderEmail_toDelivery	
    :name: send order email to delivery address
    :type: boolean

    If set, the email notification will be sent to the delivery email address and not to the billing email address.	


..  _order-email-subject:

orderEmail_subject		
-------------------

..  confval:: orderEmail_toDelivery	
    :name: subject for order email
    :type: string

    Contents of the subject line if the first line in  ###EMAIL_PLAINTEXT_TEMPLATE### is empty.			


..  _order-email-return-path:

orderEmail_returnPath		
---------------------

..  confval:: orderEmail_returnPath	
    :name: return path for order email
    :type: string

    Fills the 'Return-Path' of the email header. If the email of the recipient is invalid then the message will be sent to this address.		


..  _order-email-htmlmail:

orderEmail_htmlmail		
---------------------

..  confval:: orderEmail_htmlmail	
    :name: send HTML format in order email
    :type: boolean / string

    If set, the order confirmation email is sent as HTML
    If orderEmail_htmlmail.removeImagesWithPrefix is set, then the images and their HTML tags will not be sent in an email.
	

..  _order-email-htmlmail:

orderEmail_apostrophe		.			
---------------------

..  confval:: orderEmail_htmlmail	
    :name: send HTML format in order email
    :type: string

    Use these characters as apostrophe in the order email subject
	

..  _order-email-order2:

orderEmail_order2		.			
------------------

..  confval:: orderEmail_htmlmail	
    :name: send HTML format in order email
    :type: string

    If set, the shop admin receives 2 email order confirmations.
    The same email like the customer with EMAIL_PLAINTEXT_TEMPLATE and also the one 
    only for shop admins EMAIL_PLAINTEXT_TEMPLATE_SHOP if available.
	

..  _order-email-notify-default:

email_notify_default		.			
--------------------

..  confval:: email_notify_default	
    :name: email notification to the delivery address
    :type: boolean

    If email-notification to the delivery email address of the customer is enabled by default for tracking
	(he can change it himself in the tracking module later)
	


..  _order-status-codes:

statusCodes		.			
-----------

..  confval:: statusCodes	
    :name: Status codes used in the tracking module.
    :type: *Array of integers*

	Numbers above 100 removes the order from the tracklist.
	Number zero is the status of a non-finalized order (and non-finalized orders in the database may by time be regarded as garbage...)
	Numbers of 50-59 is available for the customer to choose from.
	Number 1 is reserved to be selected when an order goes from zero to 1 because it's confirmed. Number 1 cannot be selected by shop admin.
	These will be written into ###STATUS_OPTIONS###  markers.
	
	**Example:**

    ..  code-block:: typoscript
        :caption: status code overview
    
		statusCodes {
		    1 = Order submitted by user
		    2 = Order is received and accepted by store
		    10 = Shop is awaiting goods from third-party
		    11 = Shop is awaiting customer payment
		    12 = Shop is awaiting material from customer
		    13 = Order has been payed
		    20 = Goods shipped to customer
		    30 = Other message from store
		    50 = Customer request for cancelling
		    51 = Message from customer to shop
		    100 = Order shipped and closed
		    101 = Order closed
		    200 = Order cancelled
		}	
		
	    If email-notification to the delivery email address of the customer is enabled by default for tracking
		(he can change it himself in the tracking module later)		
	

..  _order-update-codes:

update_code		.			
-----------

..  confval:: update_code	
    :name: update code for tracking
    :type: string

	The 'password' used by the administrator of the shop to go into the tracking system in the front end.
    The password form field will appear if a BE_USER is logged in, but this password is still needed.

	
..  _status-date-std-wrap:

statusDate_stdWrap		.			
------------------

..  confval:: statusDate_stdWrap	
    :name: stdWrap for status date
    :type: stdWrap

	**Example:**

    ..  code-block:: typoscript
        :caption: stdWrap for status date
    
		statusDate_stdWrap.strftime = %d-%m-%Y %H:%M


..  _order-date-std-wrap:

orderDate_stdWrap				
-----------------

..  confval:: orderDate_stdWrap	
    :name: stdWrap for the order date
    :type: stdWrap

	**Example:**

    ..  code-block:: typoscript
        :caption: stdWrap for order date
    
		orderDate_stdWrap.strftime = %d-%m-%Y


..  _use-by-date-std-wrap:

usebyDate_stdWrap				
-----------------

..  confval:: usebyDate_stdWrap	
    :name: stdWrap for the useby date
    :type: stdWrap


..  _card-end-date-std-wrap:

cardEndDate_stdWrap				
--------------------

..  confval:: cardEndDate_stdWrap	
    :name: stdWrap for credit card end time date
    :type: stdWrap


..  _display-current-record:

displayCurrentRecord				
--------------------

..  confval:: displayCurrentRecord	
    :name: stdWrap for credit card end time date
    :type: boolean

	If set, certain settings are manipulated in order to let the script render a single item - the $cObj->data.
	If this setting is set, the subpart marked ###ITEM_SINGLE_DISPLAY_RECORDINSERT### will be used 
	instead of the regular subpart ###ITEM_SINGLE_DISPLAY### if it is found.


..  _external-processing:

externalProcessing				
------------------

..  confval:: externalProcessing	
    :name: processing of the shopping basket
    :type: cObject

	This cObject may be used to call a function which manipulates the shopping basket. 
	This manipulation could be based on settings in an external order system. 
	The output is included in the top of the order (HTML) on the basket-page.
    This cObject is executed each time the main_products method of the user_products class in productsLib is called 
	and it's executed before any of the main processing. See the class for details.


..  _external-processing-final:

externalProcessing_final				
------------------------

..  confval:: externalProcessing_final	
    :name: final processing of the shopping basket
    :type: cObject

	cObject for the final order confirmation template


..  _external-finalizing:

externalFinalizing				
------------------

..  confval:: externalFinalizing	
    :name: final processing of the shopping basket
    :type: cObject

	This cObject may be used to call a function which clears settings in an external order system.
	This is a sister to the above function and they should probably be used in conjunction somehow.
	This function is called immediately after the finalize-function has been called.
	For instance this function would be suitable for clearing any external basket facilitated by the .externalProcessing cObject
	
	Note: The output is NOT included anywhere.


..  _wrap1:

wrap1				
-----

..  confval:: wrap1	
    :name: Global Wrap 1. 
    :type: stdWrap

	This will be splitted into the markers ###GW1B### and ###GW1E###. Don't change the input value by the settings, only wrap it in something.

	**Example:**

    ..  code-block:: typoscript
        :caption: wrap1 split
    
		wrap1.wrap = <b> |</b>


..  _wrap2:

wrap2				
-----

..  confval:: wrap2	
    :name: Global Wrap 2. 
    :type: stdWrap

	(see above) markers ###GW2B### and ###GW2E###	


..  _wrap-in-base-class:

wrapInBaseClass				
---------------

..  confval:: wrapInBaseClass	
    :name: use base class wrap 
    :type: boolean *S*

	If true the output will be wrapped with <div class="tx-ttproducts-pi1"> | </div>


..  _wrap-in-code:

wrapInCode				
----------

..  confval:: wrapInCode	
    :name: use base class wrap 
    :type: boolean *S*

	If set, then the output will be wrapped by

	..  code-block:: html
	    :caption: wrap the output by code uid

	    <!-- START: tt-products-code-uid --><div id="tt-products-code-uid">
 		|</div><!-- END: tt-products-code-uid -->

	'code' will be replaced by the code of the plugin. uid will be replaced by the field 'uid' of the table tt_products.


..  _select-color:

selectColor				
-----------

..  confval:: selectColor	
    :name: Colour is selectable
    :type: integer
    :default: 1

	If > 0 the colour of a product is selectable in a select box.


..  _select-color-2:

selectColor2				
------------

..  confval:: selectColor2	
    :name: Colour 2 is selectable
    :type: integer
    :default: 1

	If > 0 the 2nd colour of a product is selectable in a select box.


..  _select-color-3:

selectColor3				
------------

..  confval:: selectColor3	
    :name: Colour 3 is selectable
    :type: integer
    :default: 1

	If > 0 the 3rd colour of a product is selectable in a select box.


..  _select-size:

selectSize				
----------

..  confval:: selectSize	
    :name: Size is selectable
    :type: integer
    :default: 1

	If > 0 the size of a product is selectable in a select box.


..  _select-size2:

selectSize2				
-----------

..  confval:: selectSize2	
    :name: Size 2 is selectable
    :type: integer
    :default: 1

	If > 0 the 2nd size of a product is selectable in a select box.


..  _select-size3:

selectSize3				
-----------

..  confval:: selectSize3	
    :name: Size 3 is selectable
    :type: integer
    :default: 1

	If > 0 the 3rd size of a product is selectable in a select box.


..  _nl2br-note:

nl2brNote				
---------

..  confval:: nl2brNote	
    :name: replace linefeeds in note
    :type: integer
    :default: 1

	If true the linefeeds in the note field are replaced by <br />.








