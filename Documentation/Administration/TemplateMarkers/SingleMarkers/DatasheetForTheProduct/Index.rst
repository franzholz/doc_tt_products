.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administration-template-markers-single-markers-datasheet-for-the-product:

datasheet for the product
"""""""""""""""""""""""""

=====================================================  =============  ==============================================================================  ==========================================
Marker:                                                Type:          Description:                                                                    Area:
=====================================================  =============  ==============================================================================  ==========================================
BROWSE_LINKS                                                          for browsing the display list over several pages
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
DELIVERYCOSTS                                          value          sum of delivery costs and payment costs
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
DELIVERY_... NOTE NOTE_DISPLAY DESIRED_DATE            value          see also PERSON_...                                                             BASKET_INFO_TEMPLATE

                                                                      input field note for order output field note with <br>
                                                                      instead of linebreaks desired delivery date of the
                                                                      order
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
EXTERNAL_COBJECT                                       value          extra preprocessing Cobject
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
FIELD_NAME                                             value in form  the name of a field in a form
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
FIELD_NAME_BASKET                                      value in form  the basket data in encrypted format
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
GC1, GC2, GC3                                          value          global colours                                                                  all
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
GW1B, GW2B, GW1E, GW2E                                 wrap           global wraps                                                                    all
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PRICE_TAX                                              value          price/price2 of the item with, without and only VAT                             ITEM_SINGLE

PRICE_NO_TAX

PRICE_ONLY_TAX

PRICE2_TAX

PRICE2_NO_TAX

PRICE2_ONLY_TAX
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PRICE_TOTAL_TAX                                        value          total sum of the items with shipping and payment costs                          all

PRICE_TOTAL_NO_TAX

PRICE_TOTAL_ONLY_TAX
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PRICE_GOODSTOTAL_TAX                                   value          total sum ot the items for price or price2                                      all

PRICE_GOODSTOTAL_NO_TAX

PRICE2_GOODSTOTAL_TAX

PRICE2_GOODSTOTAL_NO_TAX
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
LINK_BASKET                                            wrap           link to the basket page                                                         basket
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PRODUCT_LINK_DATASHEET                                 wrap           link to the datasheet file set in the constant
                                                                      file.datasheetIcon.

                                                                      **Example** :

                                                                      <!-- ###PRODUCT_LINK_DATASHEET1### begin -->

                                                                      ###GW1B######P_DATASHEET### 1: ###GW1E### <font
                                                                      size="1"><b><i>###PRODUCT_DATASHEET1###</i></b></font>###ICON_DATASHEET###</p>

                                                                      <!-- ###PRODUCT_LINK_DATASHEET1### end -->

                                                                      <!-- ###PRODUCT_LINK_DATASHEET2### begin -->

                                                                      ###GW1B######P_DATASHEET### 2: ###GW1E### <font
                                                                      size="1"><b><i>###PRODUCT_DATASHEET2###</i></b></font>###ICON_DATASHEET###</p>

                                                                      <!-- ###PRODUCT_LINK_DATASHEET2### end -->
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
ORDER_STATUS_TIME,                                     value          order values                                                                    TRACKING_DISPLAY_INFO

ORDER_STATUS, ORDER_STATUS_INFO, ORDER_STATUS_COMMENT
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PERSON_... NAME, ADDRESS, TELEPHONE,                   value          address information fields have to be connected with a
                                                                      prefix PERSON_... the customer of the order
FAX, EMAIL,
                                                                      DELIVERY_... the recipient of the order
COMPANY,

CITY,

ZIP,

STATE,

COUNTRY
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PID_TRACKING                                           value          the tracking pid
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
STATUS_CODE_60                                         wrap           used to allow the disappearance of the text with status                         TRACKING_DISPLAY_INFO
                                                                      code by the shop
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
STATUS_OPTIONS                                         value          Select menu of state options                                                    ADMIN_CONTROL inside TRACKING_DISPLAY_INFO
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
SHOPADMIN_EMAIL                                        value          Email-Address of the shop admin                                                 all
=====================================================  =============  ==============================================================================  ==========================================
