
.. _configuration-voucher-system:

Voucher System
--------------

Setup only.

The voucher codes must be stored in a database table. Normally the fe_users table
will be used. A voucher will be used as the FE user name of the person who has
invited another one to the shop. The customer who has invited his friend will get a price
reduction at his next shopping. If another table is set here then this will work only together
with the voucher extension and the voucher code can be anything hard
to guess to obtain a price reduction.

.. _configuration-voucher-system-table:

..  confval:: table
    :name: table name
    :required: false
    :type: string

    Name of the table where the voucher codes are stored. It must have a column fe_users_uid with the uid of the FE user.
    If this is empty the voucher code will be stored in the fe_users table in the column tt_products_vouchercode.

    **Example:**

    ..  code-block:: typoscript
        :caption: define voucher table

        plugin.tt_products.voucher {
           table = my_voucher_table
        }


.. _configuration-voucher-system-price-reduction:

..  confval:: amount
    :name: price reduction
    :required: false
    :type: double

    Price reduction for the voucher if the fe_users table is used.


.. _configuration-voucher-system-price:

..  confval:: price
    :name: system price
    :required: false
    :type: double

    Price for a voucher when used as a refund for the invitation of a friend


