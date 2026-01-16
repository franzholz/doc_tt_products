.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _configuration-shipping-cost-calculation-pluginttproductsshippingcalc:

plugin.tt_products.shippingcalc {
"""""""""""""""""""""""""""""""""

10.type = price

10.sql.where = category = 12

10.prod.250 = 4

}

=========  ==========  ====================================================  ========
Property:  Data type:  Description:                                          Default:
=========  ==========  ====================================================  ========
type       string      A special price calculation only valid for some
                       products. Identical to discountprice.

                       percent ... in percent of the price

                       In this example a shipping price of 25% from the
                       product's price will be added, if the products total
                       price is more than 0.

                       **Example:**

                       shippingcalc.10 {

                       type = price

                       sql.where = color = 'red'

                       prod.type = percent

                       prod.0 = 0.06

                       }
---------  ----------  ----------------------------------------------------  --------
sql        select      SQL condition over the database table records
=========  ==========  ====================================================  ========
