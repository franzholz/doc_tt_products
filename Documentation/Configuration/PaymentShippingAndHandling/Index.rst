.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _configuration-payment-shipping-and-handling:

Payment, shipping and handling configuration
--------------------------------------------

Setup only.

Payment and shipping are very similar in configuration and therefore shared the same property list with special notes if something is for the one type only. The configuration of payment and shipping is in short a question of defining the items to choose from on the basket page. That is, a choice of one out of many transportation methods and one out of many payment methods. Therefore you can for instance select either radio-button representation or selector box.

The number of the selected payment method or shipping method is reflected in the html-template
certain places and you may also want special PHP scripts executed based on the settings. That's all allowed.

**Example:**

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Pluginttproductspayment/Index
