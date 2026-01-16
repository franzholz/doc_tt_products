.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _configuration-tracking-configuration-pluginttproductstracking:

plugin.tt_products.tracking {
"""""""""""""""""""""""""""""

fields = uid,name,tracking_code,amount,status,status_log,bill_no

}

===========  ==========  =====================================================  ========
Property:    Data type:  Description:                                           Default:
===========  ==========  =====================================================  ========
fields       string      Defines the fields of sys_products_orders to be shown
                         in the select box of the orders.
-----------  ----------  -----------------------------------------------------  --------
recordLine   string      Complete HTML line for the options tag of the order
                         select box.

                         **Example:**

                         recordLine = ###ORDER_UID### (###ORDER_BILL_NO###):
                         ###ORDER_NAME### (###ORDER_AMOUNT### ###CUR_SYM###) /
                         ###ORDER_STATUS###) ###ORDER_CRDATE###
                         ###LAST_ORDER_TYPE### ###LAST_ORDER_COUNT###

                         }
-----------  ----------  -----------------------------------------------------  --------
recordType   string      type of HTML selector for the orders:
-----------  ----------  -----------------------------------------------------  --------
recordBox    ->stdWrap   Box around the record lines.

                         **Example:**

                         recordBox.wrap = <table id="thetable"
                         cellspacing="0"><tbody>

                         | </tbody></table>

                         }
-----------  ----------  -----------------------------------------------------  --------
sql.where    string      SQL where condition for the order select box. The
                         enable fields will be added automatically.

                         **Example:**

                         sql.where = status!=0 AND status<100

                         }
-----------  ----------  -----------------------------------------------------  --------
sql.orderBy  string      SQL order by clause for the order select box.

                         **Example:**

                         sql.orderBy = crdate

                         }
===========  ==========  =====================================================  ========

view
