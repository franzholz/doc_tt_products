.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _users-manual-note:

Note:
-----

The data path is renamed from 'pi' to 'pi1', thereby tt_products will now be put together like
standard TYPO3 extensions. If paths have been employed from previous versions 1.2.x of tt_products
then these must now be renamed in TypoScript setup. If you newly installl or update the extension,
please observe the Depencies in TER (online repository of the extension manager).

You must fill in the product's 'In Stock (pcs)' field of your product properties, or no item will be
shown in your frontend list if set to 0. This has been changed to the older version.

However, you should store the prices with included tax in the database; it makes it easier for you
to reenter the price as well as for the customer to see the prices as you entered them. These prices
should finally have the convention of pricing like 89.99 and not 89.72.

Before you start entering the prices of your products you have to decide whether you want to enter
the prices with or without tax (see TAXincluded). All the calculations and configurations will use
the prices as they have been stored into the price field of the tt_products table. You should use a
template with multiple columns (

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Pluginttproductsconfttproductslistdisplaycolumns1/Index
