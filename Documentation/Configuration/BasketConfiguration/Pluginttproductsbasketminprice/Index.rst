.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _configuration-basket-configuration-pluginttproductsbasketminprice:

plugin.tt_products.basket.minPrice {
""""""""""""""""""""""""""""""""""""

type = price

collect = goodstotal

value = 250

}

=========  ==================  ======================================================  ======================
Property:  Data type:          Description:                                            Default:
=========  ==================  ======================================================  ======================
minPrice   *array of string*   minimum price which the products must reach to get a
                               permission to buy them. E.g. only products of a total
                               price of at least 250 shall be accepted. The products
                               which have the 'no minimum price checked, will not be
                               counted here.

                               **Example:**

                               minPrice {

                               type = price

                               collect = goodstotal

                               value = 250

                               }
---------  ------------------  ------------------------------------------------------  ----------------------
maxPrice   *array of string*   maximum price which the products may reach to get a
                               permission to buy them. E.g. only products of a total
                               price of at most 2500 shall be accepted. The products
                               which have the 'no maximum price' checked, will not be
                               counted here.

                               **Example:**

                               maxPrice {

                               type = price

                               collect = goodstotal

                               value = 2500

                               }
---------  ------------------  ------------------------------------------------------  ----------------------
view       *array of string*   basket view configuration                               *showAmount = basket*

                               showAmount … basket … if the amount of items in the
                               basket is shown with each product in single and list
                               view.

                               … 0 … if the default amount with each product is
                               always zero (needed for caching)

                               input … input tag with radio buttons for the list
                               view of products and the marker ###BASKET_INPUT###

                               insert the name of the radio buttons

                               where: SQL where condition for products

                               checked: preselected product uid

                               **Example:**

                               basket.view.input {

                               10.label = Buy:

                               10.type = radio

                               10.where = uid IN (12,13,14,15)

                               10.checked = 12

                               10.name = Radiobox1

                               10.params =

                               }
---------  ------------------  ------------------------------------------------------  ----------------------
activity   *array of string*   activity configuration

                               Possible activities are:

                               basket, info, payment, verify, finalize, overview

                               check:

                               address … if the required fields have been filled in
                               (see requiredInfoFields)

                               agb … if the trading conditions checkbox has been
                               clicked

                               basket … if the basket has entries.

                               edit_variant .. if the edit variants follows some
                               restrictions

                               clear:

                               memo … If the MEMO for the items shall be cleared.

                               **Example:**

                               basket.activity.payment {

                               check = address,agb,basket

                               }
---------  ------------------  ------------------------------------------------------  ----------------------
store      boolean             If set to 0, then no basket will be stored. This is
                               only usefull, if you have several shop plugins on a
                               site. Then items are added to the basket only once.
---------  ------------------  ------------------------------------------------------  ----------------------
round      string              Rounding format for the prices in the basket.

                               round.discount ... rounding format for the discount
                               from the discount field

                               **Example:**

                               basket {

                               round = .XX

                               round.discount = .XX

                               }
=========  ==================  ======================================================  ======================
