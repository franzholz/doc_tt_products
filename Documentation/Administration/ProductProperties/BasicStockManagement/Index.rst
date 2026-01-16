.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _administration-product-properties-basic-stock-management:

Basic stock management
^^^^^^^^^^^^^^^^^^^^^^

The field inStock can be used for a stock administration. If "in stock" is at "0", the item will not be visible for the customers any more.  After each order the number of the ordered items will be reducted from 'in stock'.

If a new item gets created, its number will be set to "1" by default. If you have set "alwaysInStock=1" then this item will always be available and visible. Otherwise the number of products will be reducted with each order.

You can fill in the checkbox for each product to have it always in stock.  You can define the unit on the store by "inStockPieces" like "pieces".
