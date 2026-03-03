

.. _users-manual-note:

Note
----

You must fill in the product's 'In Stock (pcs)' field of your product properties, or no item will be
shown in your front end list if set to 0. 

However, you should store the prices with included tax in the database; it makes it easier for you
to reenter the price as well as for the customer to see the prices as you entered them. These prices
should finally have the convention of pricing like php:`€ 1,99` and not :php:`€ 1,72`.

Before you start entering the prices of your products you have to decide whether you want to enter
the prices with or without tax (see :typoscript:`TAXincluded`). All the calculations and configurations will use
the prices as they have been stored into the :php:`price` field of the :php:`tt_products` table. You should use a
CSS styled template or one with multiple columns
(use :typoscript:`plugin.tt_products.conf.tt_products.LIST.displayColumns.1 = 3` or higher)  
even if you only have one column in the list table.

Use an example template from the directory :file:`Resources/Private/Templates/`, like the template,
:file:`example_locallang_xml.html`, when you start your shop. The marker :php:`###DOMAIN###` is the
placeholder for your url. There are several placeholders for the different page ids of the shop.
This is sensible because different hosting environments will be used. In the setup of the shop
templates, the domain marker must become :typoscript:`mydomain.com` by using the following :typoscript:`plugin.tt_products.domain = mydomain.com`.

:composer:`jambagecom/tt-products` is based on the :composer:`jambagecom/table` and :composer:`jambagecom/div2007`. 
So you have to always update to the latest versions of these extensions when you update :composer:`jambagecom/tt-products`. 

If you want to use the variant fields (colour, quantity ...), you must also set the constants
:typoscript:`selectColor` and :typoscript:`selectSize` at :typoscript:`0`  or :typoscript:`1` , :typoscript:`2` , :typoscript:`3` . 
Otherwise, the count in the product list of articles will be calculated incorrectly.

Many adaptations can be undertaken by way of the constant editor. The Typoscript back end module
gives an option to edt the template's setup field and use a constant editor. 
For professional usage you should instead use a sitepackage for the whole website.


