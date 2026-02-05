

.. _configuration-tracking:

Tracking
--------

Setup only.

These are some settings if you want to change the display of the tracking page.


.. _configuration-tracking-fields:

..  confval:: fields
    :name: fields in selector box
    :required: false
    :type: string

    Defines the fields of sys_products_orders to be shown in the select box of the orders.

    **Example:**

    ..  code-block:: typoscript
        :caption: fields for selector box

        plugin.tt_products.tracking {
            fields = uid,name,tracking_code,amount,status,status_log,bill_no
        }


.. _configuration-tracking-record-line:

..  confval:: recordLine
    :name: HTML record line completion
    :required: false
    :type: string

    Complete HTML line for the options tag of the order select box.

    **Example:**

    ..  code-block:: typoscript
        :caption: text for order selector box

        plugin.tt_products.tracking {
            recordLine = ###ORDER_UID### (###ORDER_BILL_NO###): ###ORDER_NAME### (###ORDER_AMOUNT### ###CUR_SYM###) / ###ORDER_STATUS###) ###ORDER_CRDATE### ###LAST_ORDER_TYPE### ###LAST_ORDER_COUNT###
        }


.. _configuration-tracking-record-type:

..  confval:: recordType
    :name: record type
    :required: false
    :type: string

    type of HTML selector for the orders
    *    select
    *    radio
    *    checkbox

.. _configuration-tracking-record-box:

..  confval:: recordBox
    :name: box around record
    :required: true
    :type: string

    **Example:**

    ..  code-block:: typoscript
        :caption: text for order selector box

         plugin.tt_products.tracking {
             recordBox.wrap = <table id="thetable" cellspacing="0"><tbody> | </tbody></table>
         }


.. _configuration-tracking-sql-where:

..  confval:: sql.where
    :name: SQL Where condition
    :required: true
    :type: string

    SQL where condition for the order select box. The enable fields will be added automatically.

    **Example:**

    ..  code-block:: typoscript
        :caption: text for order selector box

         plugin.tt_products.tracking {
             sql.where = status!=0 AND status<100
         }


.. _configuration-tracking-sql-order-by:

..  confval:: sql.orderBy
    :name: SQL Order By aggregate function
    :required: true
    :type: string

    SQL order by clause for the order select box.

    **Example:**

    ..  code-block:: typoscript
        :caption: SQL order by for sorting

         plugin.tt_products.tracking {
             sql.orderBy = crdate
         }

