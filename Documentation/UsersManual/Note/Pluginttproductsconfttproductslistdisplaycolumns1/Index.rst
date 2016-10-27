.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _users-manual-note-pluginttproductsconfttproductslistdisplaycolumns1:

plugin.tt_products.conf.tt_products.LIST.displayColumns.1 = 3
"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""

or higher) even if you only have one column in the list table.

Use an example template from the directory tt_products/template, like the template,
example_template_bill_de.tmpl, when you start your shop. You have to change the page id in the links
(after the 'id=...') to the page id of the basket on your site. The marker ###DOMAIN### is the
placeholder for your url. There are several placeholders for the different page ids of the shop.
This is sensible because different hosting environments will be used. In the setup of the shop
templates, the domain marker must become mydomain.com by using the following TypoScript :
plugin.domain=mydomain.com).

tt_products is based on the Table Library (table) and Static Methods for Extensions since 2007
(div2007). So you have to always update to the latest versions of these extensions when you update
tt_products.

If you want to use the variant fields (colour, quantity ...), you must also set the constants
'selectColor' and 'selectSize' at 0 or 1, 2, 3. Otherwise, the count in the product list of articles
will be calculated incorrectly.

Many adaptations can be undertaken by way of the constant editor. For entering in the shop page,
most should be directed in the template's setup field and constant editor. 
