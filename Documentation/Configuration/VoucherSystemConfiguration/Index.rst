.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _configuration-voucher-system-configuration:

Voucher System Configuration
----------------------------

Setup only. 

The voucher codes must be stored in a database table. Normally the fe_users table will be used. A
voucher will be used as the FE user name of the person who has invited another one to the shop. The
customer who has invited his friend will get a price reduction at his next shopping. If another
table is set here then this will work only together with the voucher extension and the voucher code
can be anything hard to guess to obtain a price reduction.

**Example:** 

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Pluginttproductsvoucher/Index
