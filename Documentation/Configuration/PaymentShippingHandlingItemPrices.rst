.. _configuration-payment-shipping-handling-item-prices:

Payment / Shipping / Handling Item Prices
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. _configuration-payment-shipping-handling-items-prices-type:

price.type
~~~~~~~~~~

..  confval:: price.type
    :name: type of the price
    :required: false
    :type: string

    Meaning of the number:
    *    :typoscript:`count`:  the items count
    *    :typoscript:`weight`: the calculated weight in Gramm
    *    :typoscript:`price`:  the total products price	


.. _configuration-payment-shipping-handling-items-prices-where-pid-min-price:

price.WherePIDMinPrice
~~~~~~~~~~~~~~~~~~~~~~

..  confval:: price.WherePIDMinPrice
    :name: minimum price - shipping only
    :required: false
    :type: int+

    Set a minimum price for shipping if there is an item in the basket which is from the sysfolder with PID :typoscript:`155`.
    Where :typoscript:`7.5` is the minimum price taken for :typoscript:`shipping` costs when at least one product in the basket comes from the page with that *UID*.

    **Example:**

    ..  code-block:: typoscript
        :caption: price based on minimum weight for page 155

        plugin.tt_products.shipping { 
            10.title = Parcel 
            10.price.type = weight 
            10.price.WherePIDMinPrice.155 = 7.5 
            10.price.1 = 1.5 
            10.price.500 = 2.5 
            10.price.1000 = 3.5 
        }


.. _configuration-payment-shipping-handling-items-prices-calc:

price.calc
~~~~~~~~~~

..  confval:: calc
    :name: price calculations - shipping only
    :required: false
    :type: array

    the :typoscript:`shippingcalc` price calculations to be used. (see chapter shipping cost calculation)

    **Example:**

    ..  code-block:: typoscript
        :caption: price calculation deferred to line 10 of another configuration

        plugin.tt_products.shipping { 
             10.title = Parcel 
             10.price.calc {
                 use = 10
             }
        }


.. _configuration-payment-shipping-handling-items-prices-no-costs-amount:

price.noCostsAmount
~~~~~~~~~~~~~~~~~~~

..  confval:: price.noCostsAmount
    :name: no cost for minimum amount - shipping only
    :required: false
    :type: double

    When the total amount for the products reaches this value then no costs will be calculated.

    **Example:**

    ..  code-block:: typoscript
        :caption: price calculation deferred to line 10 of another configuration

        plugin.tt_products.shipping { 
             10.title = Parcel 
             10.price.type = count 
             10.price.noCostsAmount = 200 
             10.price.1 = 1.5 
        }

