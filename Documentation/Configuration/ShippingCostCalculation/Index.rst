

.. _configuration-shipping-cost-calculation:

Shipping Cost Calculation shippingcalc / handlingcalc
-----------------------------------------------------

Setup only.

The calculation of the shipping costs can be even more complex.
Even the order of the calculation is relevant.
This is necessary if you use two different calculation modes simultaneously.
The highest price will be used by default.


.. _configuration-shipping-cost-calculation-type:

..  confval:: type
    :name: type of calculation
    :required: false
    :type: string

    A special price calculation only valid for some products. Identical to discountprice.

    *    percent: in percent of the price

    In this example a shipping price of  25% from  the product's price will be added, if the products total price is more than 0.

    **Example:**

    ..  code-block:: typoscript
        :caption: price calculation deferred to line 10 of another configuration

        shippingcalc.10 {
            type = price
            sql.where = color = 'red'
            prod.type = percent
            prod.0 = 0.06
        }


.. _configuration-shipping-cost-calculation-sql:

..  confval:: sql
    :name: calculation SQL condition
    :required: false
    :type: string

    SQL condition over the database table records



