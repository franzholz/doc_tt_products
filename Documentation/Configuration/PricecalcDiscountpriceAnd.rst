.. _configuration-pricecalc-discountprice-creditpoints:

Pricecalc, discountprice and creditpoints configuration
-------------------------------------------------------

Setup only.

The pricecalc gives you the possibility to build the price sum of products using a calculation
table. The discount price will be used for all users who belong to the group set in
:typoscript:`discountGroupName`.

.. _configuration-pricecalc-discountprice-prod:

..  confval:: type
    :name: product calculations 
    :required: false
    :type: two-edged list of integers
    :default: 0

    The left edge of integers correspond to lines belonging together, the meaning of the right edge depends
    on the settings for each line. With :typoscript:`pricecalc` you will get a rebate only with the listed amounts, 
    with discount price you will get a rebate also for all amounts in between.

    *    pricecalc: price calculation

    Special Prices for the products. Where 1 product costs 4.99, 2 products will cost 8.99. 
    With discount price this will form the price for one product. With :typoscript:`pricecalc` it is the price 
    for all products together where 1 has cost :typoscript:`4.99` in the products folder. The :typoscript:`discountprice` overrides 
    the :typoscript:`pricecalc` if possible, because this should be cheaper then. A price calculation from here will get replaced if :php:`price2` is used.
    Attention: :typoscript:`getDiscountPrice` must be :typoscript:`1` if you want to allow it for all customers.

    **Example:**

    ..  code-block:: typoscript
        :caption: price calculation without where

        pricecalc {
            10.type = count
            10.field = price
            10.sql.where = 
            10.prod.1 = 4.99
            10.prod.2 = 8.99
            10.prod.5 = 19.99
            20.type = count
            20.field = price
            20.sql.where = 
            20.prod.1 = 6.99
            20.prod.2 = 13.98
            20.prod.5 = 29.99
        }

    *    discountprice: discount price calculation

    Here the single prices for products are calculated depending on the count of articles, if :typoscript:`type = count`.
    The :typoscript:`additive` settings tells if all the products are counted together even from different lines.
    Use :typoscript:`type = count` and :typoscript:`prod.type = percent` if you want to give a rebate in percentage instead of the total price. 
    But you must set a sql condition in this case in order not all products will offer this reduction.
 
    **Example:**

    ..  code-block:: typoscript
        :caption: discount price calculation with where

        discountprice.50 {
            type = count
            sql.where = color = 'rot'
            prod.type = percent
            prod.0 = 6
        }

    **Example:**

    ..  code-block:: typoscript
        :caption: discount price calculation for red coloured products

        discountprice.50 {
            type = count
            sql.where = color = 'red'
            prod.type = percent
            prod.0 = 6
        }

    **Example:**

    ..  code-block:: typoscript
        :caption: discount price calculation without where

        discountprice {
            10.type = count
            10.field = price
            10.additive = 0
            10.sql.where =
            10.prod.1 = 4.99
            10.prod.100 = 2.49
            10.prod.1050 = 2.39
            20.type = count
            20.field = price
            20.sql.where =
            20.prod.1 = 6.99
            20.prod.100 = 2.59
            20.prod.1050 = 2.49
        }


    *    Credit points:

    This tells you how many credit points someone will get if he buys articles in the shop. 
    The right values are the percentage of the price of the ordered articles, if :typoscript:`type = price`.

    **Example:**

    ..  code-block:: typoscript
        :caption: credit points

        creditpoints {
            pricefactor = 0.5
            10.type = price
            10.prod.1   = 0.02
            10.prod.101 = 0.04
            10.prod.501 = 0.06
        }

.. _configuration-pricecalc-discountprice-additive:

..  confval:: additive
    :name: counting together of parts - only for discount price
    :required: false
    :type: double
  
    Only valid for discount price. If set all the products with any of these discount prices are counted 
    together to calculate which discount price will apply. If unset only the products of the same price are counted.


.. _configuration-pricecalc-discountprice-type:

..  confval:: type
    :name: meaning of the right part
    :required: false
    :type: string
  
    Meaning of the right edge integer which usually gets calculated:
    *    :typoscript:`count`: the products count  (:typoscript:`pricecalc` and :typoscript:`discountprice` only)
    *    :typoscript:`price`: the total price of all articles is used (creditpoints only)

.. _configuration-pricecalc-discountprice-sql:

..  confval:: sql
    :name: SQL condition
    :required: false
    :type: string
  
    SQL conditions over the records


.. _configuration-creditpoints:

Creditpoints Configuration
~~~~~~~~~~~~~~~~~~~~~~~~~~

See above for the main configuration of creditpoints.


.. _configuration-creditpoints-pricefactor:

..  confval:: pricefactor
    :name: price factor for creditpoint to price conversion
    :required: false
    :type: double
    :default: 0

    Used to calculate how much money someone will get for his creditpoints. 
    2 creditpoins will give 1 Euro or it will be in the currency of your choice.
    In this example one creditpoint of a product will have the value of 50 Cent.

    **Example:**

    ..  code-block:: typoscript
        :caption: price calculation without where

        creditpoints {
            pricefactor = 0.5
        }


.. _configuration-creditpoints-mode:

..  confval:: mode
    :name: mode of treatment for credit points
    :required: false
    :type: string

    Normally you must create you HTML template with entry fields for the amount of creditpoins you want to use.
    Change this to the mode :typoscript:`auto`. Then all necessary creditpoints wil be used automatically.


    **Example:**

    ..  code-block:: typoscript
        :caption: price calculation without where

        creditpoints {
            mode = auto
        }


