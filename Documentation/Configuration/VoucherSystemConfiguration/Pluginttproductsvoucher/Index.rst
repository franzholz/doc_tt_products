.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _configuration-voucher-system-configuration-pluginttproductsvoucher:

plugin.tt_products.voucher {
""""""""""""""""""""""""""""

table = my_voucher_table

}

=========  ==========  =======================================================  ========
Property:  Data type:  Description:                                             Default:
=========  ==========  =======================================================  ========
table      string      Name of the table where the voucher codes are stored.
                       It must have a column fe_users_uid with the uid of the
                       FE user.

                       If this is empty the voucher code will be stored in the
                       fe_users table in the column tt_products_vouchercode.
---------  ----------  -------------------------------------------------------  --------
amount     double      Price reduction for the voucher if the fe_users table
                       is used.
---------  ----------  -------------------------------------------------------  --------
price      double      Price for a voucher when used as a refund for the
                       invitation of a friend
=========  ==========  =======================================================  ========
