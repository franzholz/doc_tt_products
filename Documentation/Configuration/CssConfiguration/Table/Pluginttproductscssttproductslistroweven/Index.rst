.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _configuration-css-configuration-table-pluginttproductscssttproductslistroweven:

plugin.tt_products.CSS.tt_products.LIST.row.even = 35
"""""""""""""""""""""""""""""""""""""""""""""""""""""

==============  ==========  ==================================================  ==========================
Property:       Data type:  Description:                                        Default:
==============  ==========  ==================================================  ==========================
row                         even: Cascading Stylesheets (CSS) even rows in the
                            products display.

                            uneven
--------------  ----------  --------------------------------------------------  --------------------------
default                     CSS for default entries in the list
--------------  ----------  --------------------------------------------------  --------------------------
current                     CSS for the currently selected item in the list
--------------  ----------  --------------------------------------------------  --------------------------
menu            string      CSS for the menu
--------------  ----------  --------------------------------------------------  --------------------------
itemSingleWrap  wrap        HTML part to replace the markers                    <div>|</div> or <td>|</td>
                            ###ITEM_SINGLE_PRE_HTML### and
                            ###ITEM_SINGLE_POST_HTML### at single item level.
--------------  ----------  --------------------------------------------------  --------------------------
itemRowWrap     wrap        HTML part to replace the markers                    empty or <tr>|</tr>
                            ###ITEM_SINGLE_PRE_HTML### and
                            ###ITEM_SINGLE_POST_HTML### at item row level.
==============  ==========  ==================================================  ==========================
