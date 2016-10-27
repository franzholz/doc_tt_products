.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _users-manual-calculation-script:

Calculation script:
-------------------

If you write and use your own calculation scripts, then you should always use only the price
variables. The priceTax and priceNoTax variables will be deleted in August 2008 because they can be
calculated from the price variables and the TAXpercentage and TAXincluded constants. You can use the
global PHP variables $this->calculatedArray and $this->itemArray to make your own price
calculations.

10.calculationScript = EXT:tt_products/pi1/products_comp_calcScript.inc
