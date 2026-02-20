.. _configuration-graduated-price:

Graduated Price
~~~~~~~~~~~~~~~

Setup only

The graduated prices gives you the possibility to add special prices for a list of amount of products.


    **Example:**

    ..  code-block:: typoscript
        :caption: use the subtitle for translations

        plugin.tt_products.graduate {
            10.type = count
            10.sql.where = category = 12
            10.marks {
        	    factor = 3
            }
        }


.. _onfiguration-graduated-price-marks:

..  confval:: marks
    :name: markers for price
    :required: false
    :type: array

    Self defined markers for a price formula.




