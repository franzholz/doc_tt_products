
.. _users-manual-creditpoint-system:

Creditpoint System
------------------

If a customer purchases a certain number of items, then he gains credit points which are stored in
his user's account. If he purchases more items at a later time, he can redeem credit points against
the purchase price. The customer can gather credit points with each purchase.


..  code-block:: php
    :caption: EXT:my_extension/ext_localconf.php

    creditpoints { 
        pricefactor = 0.5
        10.type = price 
        10.prod.1   = 0.02 
        10.prod.101 = 0.04 
       10.prod.501 = 0.06 
    }



