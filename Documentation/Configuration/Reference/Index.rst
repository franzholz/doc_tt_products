.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _configuration-reference:

Reference
---------

==================================  ===================================================  ===============================================================  ========================
Property:                           Data type:                                           Description:                                                     Default:
==================================  ===================================================  ===============================================================  ========================
templateFile                        resource                                             The template-file.

**Constants:**  file.templateFile                                                        See example in
                                                                                         'tt_products/template/products_template.tmpl'

                                                                                         You can also specify a CODE and ERROR for error cases.

                                                                                         (siehe display mode)

                                                                                         **Example:**

                                                                                         plugin.tt_products.templateFile =
                                                                                         EXT:tt_products/template/example_template_bill_de.tmpl

                                                                                         plugin.tt_products.templateFile.LIST =
                                                                                         EXT:tt_products/template/products_template_dk.tmpl
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
templateSuffix - **Setup**          string                                               This suffix is appended to all template's major
                                                                                         subparts.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
fe                                  boolean                                              If FE output is used. You can turn the FE output off.            TRUE
                                                                                         This is usefull for a callback script (see CODE
                                                                                         SCRIPT). No template file is needed in this case.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
pid_list                            string /stdWrap                                      The pids from where to fetch categories, products and
                                                                                         so on. Default is the current page. Accepts multiple
                                                                                         pid's separated by comma.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
defaultCode                         string                                               The default code (see below) if the value is empty. By
                                                                                         default it's not set and a help screen will appear. You
                                                                                         should not set anything here.

                                                                                         **Example:**

                                                                                         plugin.tt_products.defaultCode = HELP
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
code                                string /stdWrap                                      see chapter 'display mode'                                       HELP
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
defaultArticleID                    int+                                                 The default article uid number for the single display
                                                                                         is used when the link to the script did not contain a
                                                                                         'tt_products[article]' parameter.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
defaultProductID                    int+                                                 The default product uid number for the single display
                                                                                         is used when the link to the script did not contain a
                                                                                         'tt_products[product]' parameter.

                                                                                         Set this default value when you get an error message
                                                                                         like:  “GET/POST var 'tt_products[product]' was
                                                                                         missing.”
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
defaultCategoryID                   int+                                                 The default category uid number for the list display is
                                                                                         used when the link to the script did not contain a
                                                                                         'tt_products[cat]' parameter. Use this if you want only
                                                                                         products of this category displayed in the list view as
                                                                                         a default.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
defaultPageID                       int+                                                 The default category uid number for the list display is
                                                                                         used when the link to the script did not contain a
                                                                                         'tt_products[pid]' parameter. Use this if you use pages
                                                                                         as categories and want only products of this category
                                                                                         displayed in the list view as a default.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
defaultDAMCategoryID                int+                                                 See defaultCategoryID, but for DAM categories and the
                                                                                         'tt_products[damcat]' parameter.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
productDAMCategoryID                int+                                                 DAM category of products to be used in DAM lists.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
rootAddressID                       int+                                                 The upper most address ID from where you want to start
                                                                                         to list addresses.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
rootCategoryID                      int+                                                 The upper most category ID from where you want to start
                                                                                         to list categories.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
rootDAMCategoryID                   int+                                                 The upper most DAM category ID from where you want to
                                                                                         start to list DAM categories.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
rootPageID                          int+                                                 The upper most page ID from where you want to start to
                                                                                         list them as categories.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
recursive                           int+                                                 Number of recursive sublevels of pids to select                  99
                                                                                         tt_products from in lists.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
domain                              string                                               The url of the shop. If not set, it will be detected
                                                                                         automatically. Will replace ###DOMAIN### markers.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
altMainMarkers                      *(array of strings)*                                 Lets you specify alternative subpart markers for the
                                                                                         various main template designs in the shopping basket
                                                                                         system.

                                                                                         This is the list of main subparts you can override:
                                                                                         **Properties:**

                                                                                         TRACKING_WRONG_NUMBER

                                                                                         TRACKING_ENTER_NUMBER

                                                                                         BASKET_REQUIRED_INFO_MISSING

                                                                                         BASKET_TEMP

                                                                                         ITEM_SINGLE_DISPLAY_RECORDINSERT

                                                                                         ITEM_SINGLE_DISPLAY

                                                                                         ITEM_SEARCH

                                                                                         ITEM_LIST_TEMPLATE

                                                                                         ITEM_LIST_GIFTS_TEMPLATE

                                                                                         ITEM_SEARCH_EMPTY

                                                                                         BASKET_TEMPLATE

                                                                                         BASKET_INFO_TEMPLATE

                                                                                         BASKET_PAYMENT_TEMPLATE

                                                                                         BASKET_ORDERCONFIRMATION_TEMPLATE

                                                                                         EMAIL_PLAINTEXT_TEMPLATE

                                                                                         BILL_TEMPLATE

                                                                                         DELIVERY_TEMPLATE

                                                                                         /+ stdWrap

                                                                                         **Example:**

                                                                                         altMainMarkers.BASKET_TEMPLATE = BASKET_DESIGN2

                                                                                         altMainMarkers.BASKET_TEMPLATE.wrap = ### | ###

                                                                                         This example changes the main subpart marker for the
                                                                                         regular basket display from the default
                                                                                         ###BASKET_TEMPLATE### to the custom supplied design
                                                                                         ###BASKET_DESIGN2### (found in the same template
                                                                                         HTML-file)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
stdSearchFieldExt                   *list of fields*                                     Search fields

                                                                                         Default internal list is title,subtitle,note. You can
                                                                                         specify your default fields here.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
limit                               int+                                                 Max items displayed. The maximum number of items                 50
                                                                                         displayed on one page.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
limitImage                          int+                                                 Max image items displayed. The maximum number of images          3
                                                                                         for one item displayed on the list view.

                                                                                         **Deprecated.** See article/product configuration

                                                                                         Use this instead:
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
limitImageSingle                    int+                                                 The maximum number of images for one item displayed on           10
                                                                                         the single view.

                                                                                         **Deprecated.** See article/product configuration

                                                                                         Use this instead:
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
usePageContentImage                 boolean                                              **Deprecated.** See article/product configuration

                                                                                         Use this instead:

                                                                                         type = foreigntable

                                                                                         table = tt_content

                                                                                         }
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
separateImage                       boolean                                              Normally all images are displayed together. With
                                                                                         separateImage=on you can use a ###PRODUCT_IMAGE3### for
                                                                                         each image number (starting with 1) separatly.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
image                               IMAGE cObject                                        The image configuration in single display
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
listImage                           IMAGE cObject                                        The image configuration in list display

                                                                                         listImage > listImage {  altImgResource.import =
                                                                                         uploads/media/  altImgResource.import.field = media
                                                                                         altImgResource.import.listNum = 0

                                                                                         altText.data = field:title }

                                                                                         That way, attached images are not copied to and
                                                                                         displayed from

                                                                                         **/typo3temp/**  (which gives trouble with transparant
                                                                                         backgrounds) but directly linked from /uploads/pics/.

                                                                                         The line with altText leads to the drawing of an
                                                                                         alternative text.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
listImageHasChilds                  IMAGE cObject                                        DAM only:

                                                                                         The image configuration in list display if there is a
                                                                                         filter for a category on the page and this category has
                                                                                         childs.

                                                                                         listImage > listImage {  altImgResource.import =
                                                                                         uploads/media/  altImgResource.import.field = media
                                                                                         altImgResource.import.listNum = 0

                                                                                         altText.data = field:title }

                                                                                         see listImage
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
basketImage                         IMAGE cObject                                        The image configuration in basket display
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
datasheetIcon                       IMAGE cObject / **Array of integers (only setup)**   The image icon for the datasheet. Replaces
                                                                                         ###ICON_DATASHEET###

                                                                                         If it is an array, then it consists of a file type and
                                                                                         a file name.

                                                                                         **Example** :

                                                                                         plugin.tt_products.datasheetIcon {

                                                                                         10.fileext = pdf

                                                                                         10.file = fileadmin/img/pdf-icon.png

                                                                                         20.fileext = doc

                                                                                         20.file = fileadmin/img/msword-icon.png

                                                                                         }
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
basketPic                           string                                               URL link to the basket image
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
clickIntoBasket                     boolean                                              If set you will be directed into the basket page after
                                                                                         putting a product into the basket. This only works if
                                                                                         PIDbasket has been set.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
clickIntoList                       boolean                                              If set you will be directed into the list page from the
                                                                                         single view after putting a product into the basket.
                                                                                         This only works if PIDlistDisplay has been set.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
clickIntoSubmenu                    boolean                                              **Deprecated.** See onlyChildsOfCurrent and
                                                                                         rootChildsOfCurrent of the category configuration

                                                                                         If set, the submenues in the LISTCAT category list will
                                                                                         only be listed for the current category.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
basketMaxQuantity                   int+ / string                                        The maximum integer value for the quantity of an item            100000
                                                                                         in the basket. 'inStock': Only the number of items
                                                                                         which are currently in stock can be put into the
                                                                                         basket.

                                                                                         'creditpoint': Items can only be put into the basket if
                                                                                         the FE user has enough credit points.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
quantityIsFloat                     boolean                                              If set the basket count can be a float value.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
noImageAvailable                    resource                                             The image file displayed if no image was attached to a
                                                                                         product. This image is processed by the IMAGE cObject
                                                                                         which is active in the actual display of that image.
                                                                                         That is, one of the above IMAGE cObjects.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
displayListCatHeader                boolean                                              Display **Category**  Header in list                             1

                                                                                         If this option is set, the category headers (page
                                                                                         titles) will automatically be displayed in the product
                                                                                         lists. This is not always convenient because you might
                                                                                         have chosen a header-title for the "list" content
                                                                                         element.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
displayBasketCatHeader              boolean                                              Display Category Header in basket.

                                                                                         If this option is set, the category headers (page
                                                                                         titles) will automatically be displayed in the basket
                                                                                         lists.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
displayCatListType                  string                                               Define the HTML main tag for the display of the                  ul
                                                                                         categories in the category list view.

                                                                                         Use the new plugin 'Categories: menu' instead of the
                                                                                         former displayCatListType=ul.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
substitutePagetitle                 Int+                                                 Set the page title in single view

                                                                                         1 … product title

                                                                                         2 … product subtitle

                                                                                         12 … product title and subtitle

                                                                                         21 … product subtitle and title

                                                                                         3 … bread crumb
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
displayBasketColumns                int+                                                 **Deprecated.** see table configuration: displayColumns

                                                                                         Number of columns for the LIST, SEARCH listing of items
                                                                                         in a table. You have to adapt your template using
                                                                                         special template markers. The ITEM_SINGLE_PRE_HTML and
                                                                                         ITEM_SINGLE_POST_HTML must surround your <td>-</td>
                                                                                         tags, so the table will be created correctly.

                                                                                         **Example:**

                                                                                         <!-- ###ITEM_SINGLE### begin-->
                                                                                         ###ITEM_SINGLE_PRE_HTML###   <td height="150"
                                                                                         bgcolor="###GC1###" valign="bottom" align="center">
                                                                                         <!--###LINK_ITEM###-->
                                                                                         ###GW1B###<b>###PRODUCT_TITLE###</b>###GW1E###
                                                                                         <!--###LINK_ITEM###-->   <br>   ###PRODUCT_IMAGE###
                                                                                         <br>   ###GW1B### item count: ###GW1E### <INPUT
                                                                                         size="3" maxlength="4" type="text"
                                                                                         name="###FIELD_NAME###" value="###FIELD_QTY###">   <p>
                                                                                         </td>   ###ITEM_SINGLE_POST_HTML###   <!--
                                                                                         ###ITEM_SINGLE### end -->
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
CSS                                 *see below*                                          Cascading Stylesheets settings
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
js                                  *see below*                                          JavaScript settings
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
conf                                *see below*                                          configurations of the tables
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
NoSingleViewOnList                  boolean                                              Usually you get the link to the single item view on the
                                                                                         display page of the LIST code. If you however want to
                                                                                         create your own pages for single view with SINGLE code
                                                                                         you must set this to 1.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
itemMarkerArrayFunc                 function-name                                        Every time a product is displayed be it in the basket,
                                                                                         list or single view, the method getItemMarkerArray() in
                                                                                         tx_ttproducts_marker is called. This function fills in
                                                                                         and returns an array, so called markerArray(), with
                                                                                         key/values for template substitution.

                                                                                         If you enter a valid function name here (see datatype
                                                                                         'function-name' for details!) that array will be passed
                                                                                         to that function as the second parameter. The first
                                                                                         parameter will be the TypoScript properties to
                                                                                         itemMarkerArrayFunc.

                                                                                         **Parent PHP-Object reference:**

                                                                                         .parentObj property is hardcoded to be a reference to
                                                                                         the calling user_products object (PHP).

                                                                                         **Example:**

                                                                                         (provided that a function or class is included!)

                                                                                         itemMarkerArrayFunc = user_addFieldsMarkerArr

                                                                                         itemMarkerArrayFunc.simpleOption = 1
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDitemDisplay                      int+/**Array of integers**                           PID for single item display.

                                                                                         If you want a certain page to be used for display of
                                                                                         item details, please enter the PID (page-uid) here. If
                                                                                         you set the type to sql, you can use conditions using
                                                                                         several lines. The where string can contain the AND
                                                                                         condition. The pid for the first fulfilled condition
                                                                                         will be returned.

                                                                                         PIDitemDisplay {

                                                                                         10.type = sql   10.where = color=red  10.pid = 142
                                                                                         20.type = sql   20.where = color=white   20.pid = 143
                                                                                         }

                                                                                         If you set the type to pid then the pid of the record
                                                                                         will be used.

                                                                                         PIDitemDisplay {

                                                                                         10.type = pid

                                                                                         }
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDlistDisplay                      int+/**Array of integers**                           PID for the item list display

                                                                                         Similar to PIDitemDisplay, however the category table
                                                                                         is used here.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDsearch                           int+                                                 PID for search page.

                                                                                         If you want all product searches to go to a specific
                                                                                         page, enter the PID it here! NOTE: If you set this PID,
                                                                                         all searchqueries will (must) be handled with a list
                                                                                         content element with the display mode "Products:
                                                                                         search" on that page.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDbasket                           int+                                                 PID for the basket page.

                                                                                         If you want ever change the number of items anywhere to
                                                                                         go to a specific page (eg. the shopping basket page),
                                                                                         enter the PID here.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDstoreRoot                        int+                                                 PID for store root.

                                                                                         This is the PID of the rootPage of the store. If not
                                                                                         set the store will operate over all pages from the root
                                                                                         of the site. But if the site has many pages,
                                                                                         performance may improve.

                                                                                         You should better set pid_list instead of it.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PID_sys_products_orders             int+                                                 PID for the sys_products_orders records. By default
                                                                                         they will get the pid of the payment (finalize) page.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDGiftsTable                       int+                                                 PID for the tt_products_gifts table. The gift orders
                                                                                         are stored here.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDinfo                             int+                                                 PID for the info page where name and address is
                                                                                         entered.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDpayment                          int+                                                 PID for the payment page where name where the address
                                                                                         is checked and the order is confirmed by the customer.
                                                                                         You could change to a payment gateway from here.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDfinalize                         int+                                                 PID for the finalization page afther the user has
                                                                                         confirmed the order data. The order will get stored
                                                                                         here.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDthanks                           int+                                                 PID for the thanks page. BASKET_ORDERTHANKS_TEMPLATE
                                                                                         will be used. You must not set PIDfinalize if you use
                                                                                         this.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDtracking                         int+                                                 PID for the order tracking
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDbilling                          int+                                                 PID for the generation of the bill
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDdelivery                         int+                                                 PID for the generation of the delivery sheet
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDmemo                             int+                                                 The ID of the memo page
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDagb                              int+                                                 The PID of a page with the general trading conditions
                                                                                         (“AGB” in germany)

                                                                                         Only if this page id is set the AGB check will be
                                                                                         active.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDrevocation                       Int+                                                 The PID of a page with the right of revocation.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
PIDuserFolder                       int+                                                 The sysfolder, where the new users should be stored              116
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
pidsRelatedProducts                 int+                                                 Allowed pages for related products.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
pidsAddresses                       int+                                                 Allowed pages for addresses
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
UIDstore                            int+                                                 comma separated list of UIDs of the tx_party_addresses
                                                                                         table (or fe_users) with the data of the shop.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
paymentActivity                     string                                               When the payment with a payment script shall be                  finalize
                                                                                         executed. Possible values: payment, finalize, verify
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
advanceOrderNumberWithInteger       int+                                                 If this value is set, then each time a new order is
                                                                                         created the order-number counter will be incremented
                                                                                         with a random number between [first-integer] and
                                                                                         [second integer] to cheat a little.

                                                                                         **Example:**

                                                                                         5,5 (This will increment the counter with 5 each time)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
alwaysAdvanceOrderNumber            boolean                                              If set then the order number will always get increased
                                                                                         and the empty order numbers are not reused. You have to
                                                                                         set this if you use a payment script to pay via a
                                                                                         payment system which does not accept duplicate order
                                                                                         numbers.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
alwaysUpdateOrderAmount             boolean                                              If set then the entered order amount will always be              1
                                                                                         updated and not increased by the entered number.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
parseFunc                           ->parseFunc                                          If the extension 'CSS styled content' has been                   styles.content.parseFunc
                                                                                         installed, you have to make your settings in
                                    not used with                                        lib.parseFunc_RTE and not here.

                                    'CSS styled content'                                 The product details are parsed by these properties. So
                                                                                         if e.g. you want ot allow HTML-tags to create a table
                                                                                         in the Note field you have to set the
                                                                                         parseFunc.allowTags or use the denyTags. To make RTE
                                                                                         working with HTML you have to set the following into
                                                                                         the root page template.   **Example:**

                                                                                         keepNonMatchedTags = 1  RTE.default.proc.preserveTables
                                                                                         = 1

                                                                                         **Example:**
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
categoryHeader                      cObject                                              Generates the category header.

                                                                                         **Example:**

                                                                                         categoryHeader = TEXT

                                                                                         categoryHeader.current = 1
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
breadcrumb                          cObject                                              Generates a breadcrumb line.

                                                                                         **Example:**

                                                                                         breadcrumb =
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
TAXpercentage                       double                                               Sales TAX/VAT percentage.

                                                                                         Double value (!) (means, "use . as decimal point")

                                                                                         **Example:**

                                                                                         # Danish sales TAX is 25%:

                                                                                         TAXpercentage = 25.00
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
TAXincluded                         boolean                                              Set this, if TAX **is** included in the database                 1
                                                                                         prices! ( ... and of course: Clear this, if TAX **is
                                                                                         not** included in the database prices and should be
                                                                                         added in the display of items)

                                                                                         All profieldLinkcessing will take this flag into
                                                                                         account and calculate prices accordingly.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
TAXrates                            string                                               Comma separated list of tax rates. The first will be
                                                                                         taken as tax A, the second as tax B aso.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
TAXmode                             int+                                                 tax mode                                                         1

                                                                                         1: The net sums are added first. The tax is added on
                                                                                         the final total net sum.

                                                                                         2: The gross price is calculated for every product. The
                                                                                         total sum is calculated on the single gross prices.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
priceDec                            int+                                                 Price decimals
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
priceDecPoint                       string                                               Price decimal point
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
priceThousandPoint                  string                                               Price Thousand point

                                                                                         Enter the thousand separator, if any.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
noZeroDecimalPoint                  boolean                                              If set then no decimal point is shown for integers.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
priceNoReseller                     int+ **S**                                           Price number for reseller, which can only be 2 at the
                                                                                         moment. The price2 will however only be taken when its
                                                                                         value is greater than 0. Here is the way to get the
                                                                                         price2 for a special user group:

                                                                                         **Example:**

                                                                                         [usergroup = 1]

                                                                                         priceNoReseller = 2

                                                                                         [global]

                                                                                         ...
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
percentDec                          int+                                                 Number of shown decimals of percentage values
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
percentDecPoint                     string                                               Percentage decimal point
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
percentThousandPoint                string                                               Percentage Thousand point

                                                                                         Enter the thousand separator, if any.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
percentNoZeroDecimalPoint           boolean                                              Percentage: If set then no decimal point is shown for
                                                                                         integers.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
currencySymbol                      string                                               Currency symbol. Used in shop administration.

                                                                                         **Example:**

                                                                                         EUR

                                                                                         DKR

                                                                                         USD

                                                                                         $
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
lockLoginUserInfo                   boolean                                              If set and a user is logged in, the address info of              1
                                                                                         that fe_user gets filled in as billing address of the
                                                                                         user. It is not possible to change this data.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
editLockedLoginInfo                 boolean                                              If set and lockLoginUserInfo is set, then the filled in
                                                                                         data is still editable for the order. You have to set
                                                                                         the input HTML tags for this.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
loginUserInfoAddress                boolean                                              If lockLoginUserInfo is set, this switch makes that the
                                                                                         address field is filled in from address, country, zip
                                                                                         and city of the fe_user
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
requiredInfoFields                  *list or array of string*                            List of the fields which are re‑quired in the address
                                                                                         information This example gives you all possibilities.
*setup*
                                                                                         **Example:**

                                                                                         requiredInfoFields =
                                                                                         name,address,telephone,fax,email,company,city,zip,state,country

                                                                                         The subvalues 'billing' and 'delivery' are possible.

                                                                                         **Example:**

                                                                                         requiredInfoFields.delivery = name,address
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderBy                             string                                               **Deprecated.** See Article/Product configuration

                                                                                         Use this instead:
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderByCategoryTitle                boolean                                              **Deprecated.** Use this instead:
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderByItemNumberSg                 boolean                                              **Deprecated.** Use this instead:
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderNumberPrefix                   string                                               Prefix to the order numbers. Max 10 chars. If this
                                                                                         string starts with '%' then the rest will be
                                                                                         interpreted as a PHP date format.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail                          *array*                                              This defines additional confirmation emails containing
                                                                                         suffixes, sender and receiver email addresses.

                                                                                         from ... 'shop' will fetch orderEmail_from, 'customer'
                                                                                         will fetch the customer email address.

                                                                                         to ... email of the receiver

                                                                                         suffix ... suffix to the
                                                                                         '###EMAIL_PLAINTEXT_TEMPLATE_###' subpart.

                                                                                         returnPath ... email address to use in the case of a
                                                                                         failure to send the email

                                                                                         **Example** :

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

                                                                                         It is possible to send confirmation emails to the email
                                                                                         address stored in a foreign table and where a foreign
                                                                                         key has been added to the table fe_users.

                                                                                         **Example** :

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

                                                                                         A SQL comparison will be made to fetch the email
                                                                                         address:

                                                                                         SELECT my_table_key_field FROM my_table WHERE
                                                                                         my_table_key_field = $content_of_fe_users_key_field;
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_bcc                      string                                               BCC for the shop admin's order confirmation
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_from                     string                                               From email address for the confirmation email to
                                                                                         customer
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_fromName                 string                                               From name for the confirmation email to customer.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_to                       *list of email-addresses*                            Comma separated list of recipients of the order email.
                                                                                         Shop and administrator/supervisor email addresses go
                                                                                         here!
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_toAddress                boolean                                              If set, then the order email is sent to all addresses
                                                                                         which are connected to the products in the basket.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_radio                    *array of radio button number and email adresses*    Comma separated list of recipients of the order email
                                                                                         if a radio box has been selected. The number is the
                                                                                         radio box and the second number is the selected value.

                                                                                         **Example:**

                                                                                         orderEmail_radio {

                                                                                         1.2 = inform@mytypo3site.de

                                                                                         }
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_toDelivery               boolean                                              If set, the email notification will be sent to the
                                                                                         delivery email address and not to the billing email
                                                                                         address.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_subject                  string                                               Contents of the subject line if the first line in
                                                                                         ###EMAIL_PLAINTEXT_TEMPLATE### is empty.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_returnPath               string                                               Fills the 'Return-Path' of the email header. If the
                                                                                         email of the recipient is invalid then the message will
                                                                                         be sent to this address.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_htmlmail                 boolean / string                                     If set, the order confirmation email is sent as HTML If
                                                                                         orderEmail_htmlmail.removeImagesWithPrefix is set, then
                                                                                         the images and their HTML tags will not be sent in an
                                                                                         email.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_apostrophe               string                                               Use these characters as apostrophe in the order email
                                                                                         subject.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderEmail_order2                   boolean                                              If set, the shop admin receives 2 email order
                                                                                         confirmations. The same email like the customer with
                                                                                         EMAIL_PLAINTEXT_TEMPLATE and also the one only for shop
                                                                                         admins EMAIL_PLAINTEXT_TEMPLATE_SHOP if available.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
email_notify_default                boolean                                              If email-notification to the delivery email address of
                                                                                         the customer is enabled by default for tracking (he can
                                                                                         change it himself in the tracking module later)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
statusCodes                         *Array of integers*                                  Status codes used in the tracking module.

                                                                                         Numbers above 100 removes the order from the tracklist.

                                                                                         Number zero is the status of a non-finalized order (and
                                                                                         non-finalized orders in the database may by time be
                                                                                         regarded as garbage...)

                                                                                         Numbers of 50-59 is available for the customer to
                                                                                         choose from.

                                                                                         Number 1 is reserved to be selected when an order goes
                                                                                         from zero to 1 because it's confirmed. Number 1 cannot
                                                                                         be selected by shop admin. These will be written into
                                                                                         ###STATUS_OPTIONS### markers.

                                                                                         **Example:**

                                                                                         statusCodes {

                                                                                         1 = Order submitted by user

                                                                                         2 = Order is received and accepted by store

                                                                                         10 = Shop is awaiting goods from third-party

                                                                                         11 = Shop is awaiting customer payment

                                                                                         12 = Shop is awaiting material from customer

                                                                                         13 = Order has been payed

                                                                                         20 = Goods shipped to customer

                                                                                         21 = Gift certificates shipped to customer

                                                                                         30 = Other message from store

                                                                                         50 = Customer request for cancelling

                                                                                         51 = Message from customer to shop

                                                                                         60 = Send gift certificate message to receiver

                                                                                         100 = Order shipped and closed

                                                                                         101 = Order closed

                                                                                         200 = Order cancelled

                                                                                         }
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
update_code                         string                                               The 'password' used by the administrator of the shop to          password
                                                                                         go into the tracking system in the front end.

                                                                                         The password form field will appear if a BE_USER is
                                                                                         logged in, but this password is still needed.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
statusDate_stdWrap                  ->stdWrap                                            stdWrap for status date

                                                                                         **Example:**

                                                                                         statusDate_stdWrap.strftime = %d-%m-%Y %H:%M
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
orderDate_stdWrap                   ->stdWrap                                            stdWrap for the order date

                                                                                         **Example:**

                                                                                         orderDate_stdWrap.strftime = %d-%m-%Y
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
usebyDate_stdWrap                   ->stdWrap                                            stdWrap for the useby date
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
cardEndDate_stdWrap                 ->stdWrap                                            stdWrap for credit card end time date
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
displayCurrentRecord                boolean                                              If set, certain settings are manipulated in order to
                                                                                         let the script render a single item - the $cObj->data.

                                                                                         If this setting is set, the subpart marked
                                                                                         ###ITEM_SINGLE_DISPLAY_RECORDINSERT### will be used
                                                                                         instead of the regular subpart
                                                                                         ###ITEM_SINGLE_DISPLAY### if it is found.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
externalProcessing                  cObject                                              This cObject may be used to call a function which
                                                                                         manipulates the shopping basket. This manipulation
                                                                                         could be based on settings in an external order system.
                                                                                         The output is included in the top of the order (HTML)
                                                                                         on the basket-page.

                                                                                         This cObject is executed each time the main_products
                                                                                         method of the user_products class in productsLib is
                                                                                         called and it's executed before any of the main
                                                                                         processing. See the class for details.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
externalProcessing_final            cObject                                              cObject for the final order confirmation template
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
externalFinalizing                  cObject                                              This cObject may be used to call a function which
                                                                                         clears settings in an external order system. This is a
                                                                                         sister to the above function and they should probably
                                                                                         be used in conjunction somehow. This function is called
                                                                                         immediately after the finalize-function has been
                                                                                         called.

                                                                                         For instance this function would be suitable for
                                                                                         clearing any external basket facilitated by the
                                                                                         .externalProcessing cObject

                                                                                         **Note:**  The output is NOT included anywhere.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
wrap1                               -> stdWrap                                           Global Wrap 1. This will be splitted into the markers
                                                                                         ###GW1B### and ###GW1E###. Don't change the input value
                                                                                         by the settings, only wrap it in something.

                                                                                         **Example:**

                                                                                         wrap1.wrap = <b> |</b>
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
wrap2                               -> stdWrap                                           Global Wrap 2 (see above) markers ###GW2B### and
                                                                                         ###GW2E###
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
wrapInBaseClass                     boolean                                              If true the output will be wrapped with <div                     1
                                                                                         class="tx-ttproducts-pi1"> | </div>
                                    *S*
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
wrapInCode                          boolean                                              If set, then the output will be wrapped by                       1

                                    *S*                                                  <!-- START: tt-products-code-uid --><div
                                                                                         id="tt-products-code-uid">

                                                                                         |<text:bookmark text:name="line764"/></div><!-- END:
                                                                                         tt-products-code-uid -->

                                                                                         . 'code' will be replaced by the code of the plugin.
                                                                                         uid will be replaced by the field 'uid' of the table
                                                                                         tt_products.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectColor                         integer                                              If true the colour of a product is selectable in a               1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectColor2                        integer                                              If true the 2nd colour of a product is selectable in a           1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectColor3                        integer                                              If true the 3rd colour of a product is selectable in a           1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectSize                          integer                                              If true the size of a product is selectable in a select          1
                                                                                         box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectSize2                         integer                                              If true the 2nd size of a product is selectable in a             1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectSize3                         integer                                              If true the 3rd size of a product is selectable in a             1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectDescription                   integer                                              If true the description of a product is selectable in a          1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectGradings                      integer                                              If true the gradings of a product are selectable in a            1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectMaterial                      integer                                              If true the material of a product are selectable in a            1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
selectQuality                       integer                                              If true the quality of a product are selectable in a             1
                                                                                         select box.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
color1                              string /stdWrap                                      Value for ###GC1### marker (Global colour 1)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
color2                              string /stdWrap                                      Value for ###GC2### marker (Global colour 2)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
color3                              string /stdWrap                                      Value for ###GC3### marker (Global colour 3)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
nl2brNote                           boolean                                              If true the linefeeds in the note field are replaced by          1
                                                                                         <br />.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
useArticles                         integer
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
keepProductData                     boolean                                              If true, the product data are kept in the article                1
                                                                                         markers if they are not empty and if the product is
                                                                                         merged with a corresponding article which fits in the
                                                                                         variant fields.

                                                                                         Only used if useArticles = 3.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
noArticleSingleView                 boolean                                              If true, then no article single view is used. Articles           1
                                                                                         are instead linked to the product single view and the
                                                                                         corresponding variant selection is shown.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
priceTagObj                         IMAGE cObject                                        Image for the display of the price
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
usePriceTag                         boolean                                              If true, the priceTagObj will be used. If false, the
                                                                                         text will be displayed.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
useStaticInfoCountry                boolean                                              If true the short fe_users static_info_country field
                                                                                         will be used for country instead of the country field.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
useStaticTaxes                      boolean                                              If true, the tax will be determined from the country
                                                                                         and region by the extension static_info_tables_taxes.
                                                                                         UIDstore must be set.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
whereGift                           string                                               This SQL where clause defines which products will be
                                                                                         treated as gifts.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
whereGiftService                    string                                               This SQL where clause defines which products will be
                                                                                         treated as gift services.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
max_note_length                     int+                                                 **Deprecated.** See Article/Product configuration                10000

                                                                                         Use this instead:

                                                                                         formerly:

                                                                                         In the list view: The item note will be cut after
                                                                                         max_note_length characters, and three dots are added...

                                                                                         This can be dangerous if you use html in your product
                                                                                         notes, because a tag could stay open and the following
                                                                                         items look ugly
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
specialPreparation                  string                                               This text will substitute your
                                                                                         ###PRODUCT_SPECIAL_PREP### markers.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
createUsers                         boolean                                              If you set this and PIDuserFolder, for each customer
                                                                                         that is not logged in and his email address is not
                                                                                         listed as user already, a new frontend user will be
                                                                                         created.

                                                                                         An email with the username (his e-mail address) and the
                                                                                         password will be sent to him (see
                                                                                         ###EMAIL_NEWUSER_TEMPLATE###)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
useMd5Password                      boolean                                              Enable md5 password encryption.

                                                                                         Note: If set, passwords will be encrypted. Consider to
                                                                                         install an extension like kb_md5fepw and the
                                                                                         newloginbox.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
outputFolder                        string                                               Folder where the bill and delivery sheets are created.           fileadmin/data
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
memberOfGroup                       int+                                                 The ID of the frontend user group, the new users should          1
                                                                                         be member of
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
discountGroupName                   string                                               Name of the group for discount pricecalculation
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
getDiscountPrice                    boolean                                              If set the discount price will be used even for normal
                                                                                         customers without having a frontend user in the
                                                                                         discount group.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
discountPriceMode                   integer                                              If unset, then the price field is used as the base to
                                                                                         calculate the discount:

                                                                                         discount = (price – price2) / price

                                                                                         where price contains no discounts

                                                                                         set to 1:

                                                                                         discount = (price2 – price) / price2

                                                                                         where price contains the discounts

                                                                                         This is only needed for setting the behavior of the
                                                                                         price2 markers.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
discountFieldMode                   integer                                              If set the discount field in the product and category
                                                                                         table will be used to get a reducted price for a
                                                                                         product. Modes:

                                                                                         1 ... the highest discount from product and categories
                                                                                         will be used

                                                                                         2 ... use the product discount if set, otherwise use
                                                                                         the highest hierarchical category discount which is
                                                                                         set.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
AGBtarget                           small                                                The target for the PIDagb link                                   _blank
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
AGBattachment                       resource                                             If this file exists, it will be attached to the order            fileadmin/agb.pdf
                                                                                         confirmation email to the customer. The shop
                                                                                         administrator won't receive the agb attachment, but the
                                                                                         CSV if you enable it
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
GiftAttachment                      resource                                             If this file exists, it will be attached to the order
                                                                                         gift email to the customer.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
generateXML                         boolean                                              Generates a XML file from each order. This file will be
                                                                                         saved on the server and sent to the shop administrator
                                                                                         per email (with the order confirmation)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
XMLdestination                      resource                                             The directory on the server, where the XML files should          ../xmlorders/
                                                                                         be saved. This directory should not be accessible over
                                                                                         http, because everyone can read your customers and
                                                                                         their orders.

                                                                                         So don't put this directory unter fileadmin, or rename
                                                                                         it to something cryptical at least.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
generateCSV                         boolean                                              Generates a CSV file from each order. This file will be
                                                                                         saved on the server and sent to the shop administrator
                                                                                         per email (with the order confirmation)
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
CSVdestination                      resource                                             The directory on the server, where the CSV files should          ../csvorders/
                                                                                         be saved. This directory should not be accessible over
                                                                                         http, because everyone can read your customers and
                                                                                         their orders.

                                                                                         So don't put this directory unter fileadmin, or rename
                                                                                         it to something cryptical at least.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
CSVfields                           string                                               Select which product data should be added to the CSV.            (Long, long list)
                                                                                         By default these are all important fields except the
                                                                                         note
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
CSVinOneLine                        boolean                                              If you set this to 1, all additional information
                                                                                         (shipping, payment, address data, delivery note) will
                                                                                         be appended to the first ordered item. This is good if
                                                                                         you want to import this files somewhere.

                                                                                         If you leave this at 0, the file will be formatted for
                                                                                         best view in programs like Excel.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
CSVnotInEmail                       boolean                                              If set no csv file will be appended to the email.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
alwaysInStock                       boolean                                              If set the stock will not get reduced if something has           1
                                                                                         been bought.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
showNotinStock                      boolean                                              If set the items will be shown even if no product is in
                                                                                         the stock.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
notInStockMessage                   string                                               See above. This will be shown if no items are in stock           Not in stock
                                                                                         and showNotinStock is set.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
warningInStockLimit                 int+                                                 Amount of items in stock at which when reached a
                                                                                         warning message is sent.
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
inStockPieces                       string                                               This is the unit for items inStock.                              pieces
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
newItemDays                         int+                                                 In LISTNEWITEMS, the newly added items of the last n             7
                                                                                         days will be showed
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
bulkilyWarning                      string                                               Text for ###BULKILY_WARNING### for bulk goods
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
bulkilyAddition                     int+                                                 See shipping.

                                                                                         Factor to multiply with a product which is bulkily
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
bulkilyFeeTax                       int+                                                 See shipping.

                                                                                         Tax fee in percent for shipping of bulkily
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
javaScript                          *array of integers*                                  Some JavaScript which will be included for
                                                                                         ###JAVASCRIPT_10### markers.

                                                                                         **Example:**

                                                                                         javaScript {

                                                                                         10.value = function addValues (a, b) { return a+b; }

                                                                                         20.value = function multiplyValues (a, b) { return
                                                                                         a\*b; }

                                                                                         }
----------------------------------  ---------------------------------------------------  ---------------------------------------------------------------  ------------------------
payment / shipping                  (see below)                                          Configuration of payment and shipping methods, their
                                                                                         values and costs and additional calculation scripts and
                                                                                         payment gateways.

                                                                                         See description below!
==================================  ===================================================  ===============================================================  ========================

[tsref:(script).class.tt_products.php]
