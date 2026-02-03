
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

..  code-block:: typoscript
    :caption: EXT:my_extension/ext_localconf.php

    plugin.tt_products.voucher {
       table = my_voucher_table
    }




