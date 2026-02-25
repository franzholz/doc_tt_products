



.. _administration-template-markers-area-markers:

area markers:
^^^^^^^^^^^^^

========================================  =======================================================  =====
Marker:                                   Description:                                             Area:
========================================  =======================================================  =====
BASKET_TEMPLATE                           The view of the cart with the items to be ordered        top
----------------------------------------  -------------------------------------------------------  -----
BASKET_INFO_TEMPLATE                      This is normally used to let people enter address        top
                                          information or verify their data if they are logged in

                                          Exact same features as BASKET_TEMPLATE.
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERCONFIRMATION_TEMPLATE         the final page after the order has been processed. It    top
                                          will not be used for the display, if PIDthanks is set.
                                          But it will always be used for the text in HTML
                                          emails. It is stored in the order data.

                                          see: BASKET_ORDERTHANKS_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERCONFIRMATION_NOSAVE_TEMPLATE  This HTML data will be added to the display after the    down
                                          order has been stored to the database.
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERTHANKS_TEMPLATE               Used for displaying a thanks page, when PIDthanks is     top
                                          set. This will not be used in the HTML emails.b

                                          see BASKET_ORDERCONFIRMATION_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
BASKET_OVERVIEW_EMPTY                     message 'your basket is empty' for OVERVIEW              top
----------------------------------------  -------------------------------------------------------  -----
BASKET_OVERVIEW_TEMPLATE                  Used for the mini basket display.                        top
----------------------------------------  -------------------------------------------------------  -----
BASKET_PAYMENT_TEMPLATE                   Verification of address data and payment gateway         top
                                          connection
----------------------------------------  -------------------------------------------------------  -----
BASKET_REQUIRED_INFO_MISSING              warning display for missing address data                 top
----------------------------------------  -------------------------------------------------------  -----
BASKET_TEMPLATE_EMPTY                     message 'your basket is empty'                           top
----------------------------------------  -------------------------------------------------------  -----
BASKET_TEMPLATE_NOT_LOGGED_IN             error message that the user is not logged in             top
----------------------------------------  -------------------------------------------------------  -----
BILL_TEMPLATE                             how your bill file will look like                        top
----------------------------------------  -------------------------------------------------------  -----
DELIVERY_TEMPLATE                         for the file of your delivery sheet                      top
----------------------------------------  -------------------------------------------------------  -----
EMAIL_PLAINTEXT_TEMPLATE                  the email notification text                              top

                                          The first line is the subject.
----------------------------------------  -------------------------------------------------------  -----
EMAIL_NEWUSER_TEMPLATE                    email after creation of new front end use                top
----------------------------------------  -------------------------------------------------------  -----
ITEM_LIST_TEMPLATE                        the listing of products on the starting LIST page        top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SEARCH                                                                                        top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SEARCH_EMPTY                                                                                  top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY                       single                                                   top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY_NOT_IN_STOCK          single display when item is not in stock                 top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY_RECORDINSERT          see displayCurrentRecord: render the $cObj->data         top
----------------------------------------  -------------------------------------------------------  -----
MEMO_TEMPLATE                             memorization of items                                    top 
----------------------------------------  -------------------------------------------------------  -----
MEMO_NOT_LOGGED_IN                        error message that use has not been logged in for MEMO   top
----------------------------------------  -------------------------------------------------------  -----
ORDERS_LIST_TEMPLATE                      display of the order list                                top
----------------------------------------  -------------------------------------------------------  -----
TRACKING_ENTER_NUMBER                                                                              top
----------------------------------------  -------------------------------------------------------  -----
TRACKING_WRONG_NUMBER                                                                              top
========================================  =======================================================  =====



.. _administration-template-area-markers-datasheet-for-the-product:

datasheet for the product
"""""""""""""""""""""""""

**Example**  for a wrap:

..  code-block:: html
    :caption: wrap inside of a HTML template

    <!-- ###PRODUCT_LINK_DATASHEET### begin --> datasheet for the product <!-- ###PRODUCT_LINK_DATASHEET### end -->


