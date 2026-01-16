.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _configuration-order-confirmation-pluginttproductsfinalize:

plugin.tt_products.finalize {
"""""""""""""""""""""""""""""

productsFilter {

10 {

pid = 12

email = myemail@mytypo3site1.com

}

20 {

pid = 12

email = myemail@mytypo3site2.com

}

}

}

==============  ==========  ======================================================  ========
Property:       Data type:  Description:                                            Default:
==============  ==========  ======================================================  ========
productsFilter  array       This separates the order confirmation emails with the
                            products on different pages. A confirmation email can
                            be sent which includes only the products from specific
                            pages.

                            The array has these items:

                            pid … a list of page ids

                            email … a list of email addresses
==============  ==========  ======================================================  ========
