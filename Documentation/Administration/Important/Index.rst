.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _administration-important:

Important
---------

Since TYPO3 7.6.32 and 8.7.22 you must set the folowing variable in the Install Tool:

:php:`$GLOBALS['TYPO3_CONF_VARS']['FE']['enableRecordRegistration']=true;`

This enables the storage of the entered user data from the "recs" form entries.

tt_products should be fully downwards compatible until tt_products 1.2.7 of the year 2003. But it needs some adaptions to the template file. In ###BASKET_TEMPLATE### you must have the lines

.. toctree::
    :maxdepth: 2
    :titlesonly:

    AutogeneratedF3e05/Index
    TemplateFiles/Index
