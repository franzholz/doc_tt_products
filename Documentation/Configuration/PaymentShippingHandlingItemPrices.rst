.. _configuration-payment-shipping-handling-item-prices:

Payment / Shipping / Handling Item Prices
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. _configuration-payment-shipping-handling-items-prices-type:

..  confval:: type
    :name: type of the price
    :required: false
    :type: string

    Meaning of the number:
    *    count:  the items count
    *    weight: the calculated weight in Gramm
    *    price:  the total products price	


.. _configuration-payment-shipping-handling-items-prices-where-pid-min-price:

..  confval:: WherePIDMinPrice
    :name: minimum price - shipping only
    :required: false
    :type: int+

    Set a minimum price for shipping if there is an item in the basket which is from the sysfoldepaymentActivityr of this PID.
    Where 155 is the PID and 7.5 is the minimum price taken for shipping costs when at least one product in the basket comes from the page with that PID.

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






