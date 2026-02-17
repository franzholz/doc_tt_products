
.. _configuration-order-confirmation:

Order Confirmation Configuration
--------------------------------

Setup only.

These are some settings if you want to change the behaviour of the order confirmation.


.. _configuration-order-confirmation-products-filter:

..  confval:: productsFilter
    :name: filter for products
    :required: false
    :type: array

    This separates the order confirmation emails with the products on different pages. 
    A confirmation email can be sent which includes only the products from specific pages.

    The array has these items:
    *    pid:   a list of page ids
    *    email: a list of email addresses


    **Example:**
    
    ..  code-block:: typoscript
        :caption: use the subtitle for translations
    
        plugin.tt_products.finalize {
            productsFilter {
                10 {
                     pid = 12
                     email = myemail@mytypo3site1.com
                }
                20 {
                     pid = 12
                     email = myemail@mytypo3site2.com
                }
            }
        }


