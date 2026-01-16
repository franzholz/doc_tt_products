.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _administration-template-markers-area-markers:

area markers:
^^^^^^^^^^^^^

========================================  =======================================================  =====
Marker:                                   Description:                                             Area:
========================================  =======================================================  =====
BASKET_TEMPLATE                                                                                    top
----------------------------------------  -------------------------------------------------------  -----
BASKET_INFO_TEMPLATE                      This is normally used to let people enter address        top
                                          information separately from the real basket.

                                          Exact same features as BASKET_TEMPLATE.
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERCONFIRMATION_TEMPLATE         the final page after the order has been processed. It
                                          will not be used for the display, if PIDthanks is set.
                                          But this will always be used for the text in HTML
                                          emails.

                                          see: BASKET_ORDERTHANKS_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERCONFIRMATION_NOSAVE_TEMPLATE  This HTML data will be added to the display after the
                                          order has been stored to the database.
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERTHANKS_TEMPLATE               Used for displaying a thanks page, when PIDthanks is
                                          set. This will not be used in the HTML emails.b

                                          see BASKET_ORDERCONFIRMATION_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
BASKET_OVERVIEW_EMPTY                     message 'your basket is empty' for OVERVIEW
----------------------------------------  -------------------------------------------------------  -----
BASKET_OVERVIEW_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
BASKET_PAYMENT_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
BASKET_REQUIRED_INFO_MISSING
----------------------------------------  -------------------------------------------------------  -----
BASKET_TEMPLATE_EMPTY                     message 'your basket is empty'
----------------------------------------  -------------------------------------------------------  -----
BASKET_TEMPLATE_NOT_LOGGED_IN             error message that the user has not logged in
----------------------------------------  -------------------------------------------------------  -----
BASKET_TEMPLATE_INVALID_GIFT_UNIQUE_ID    error message that a wrong unique id for a gift product
                                          has been entered
----------------------------------------  -------------------------------------------------------  -----
BILL_TEMPLATE                             how your bill file will look like
----------------------------------------  -------------------------------------------------------  -----
DELIVERY_TEMPLATE                         for the file of your delivery sheet
----------------------------------------  -------------------------------------------------------  -----
EMAIL_PLAINTEXT_TEMPLATE                  the email notification text

                                          The first line is the subject.
----------------------------------------  -------------------------------------------------------  -----
EMAIL_NEWUSER_TEMPLATE                    email after creation of new frontend use
----------------------------------------  -------------------------------------------------------  -----
ITEM_LIST_TEMPLATE                        the listing of products on the starting LIST page
----------------------------------------  -------------------------------------------------------  -----
ITEM_LIST_GIFTS_TEMPLATE                  listing of the gift products
----------------------------------------  -------------------------------------------------------  -----
ITEM_SEARCH
----------------------------------------  -------------------------------------------------------  -----
ITEM_SEARCH_EMPTY
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY_GIFT                  single display used when this is a gift product
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY_NOT_IN_STOCK          single display when item is not in stock
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY_RECORDINSERT          see displayCurrentRecord: render the $cObj->data
----------------------------------------  -------------------------------------------------------  -----
MEMO_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
MEMO_NOT_LOGGED_IN                        error message that use has not been logged in for MEMO
----------------------------------------  -------------------------------------------------------  -----
ORDERS_LIST_TEMPLATE                      display of the order list
----------------------------------------  -------------------------------------------------------  -----
TRACKING_EMAIL_GIFTNOTIFY_TEMPLATE        notification to the gift recipient in the order
                                          tracking
----------------------------------------  -------------------------------------------------------  -----
TRACKING_ENTER_NUMBER
----------------------------------------  -------------------------------------------------------  -----
TRACKING_WRONG_NUMBER
========================================  =======================================================  =====
