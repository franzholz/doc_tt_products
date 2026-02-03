
.. _configuration-bill-and-delivery:

Bill and Delivery Configuration
-------------------------------

Setup only.

These are some settings if you want to use the feature of the creation and usage of bill and delivery sheets. 
They are generated in the folder :file:`fileadmin/data/bill`.


.. _configuration-bill-and-delivery-generation:

..  confval:: generation
    :name: generation type of a sheet
    :required: true
    :type: string

    Defines the behaviour for the generation of the bill/delivery sheet.
    *    auto: Generation will be done when the order is finalized.

    Example:
    ..  code-block:: typoscript
        :caption: automatice generation of a bill
    
        plugin.tt_products.bill {
           generation = auto
        }
        
        plugin.tt_products.delivery {
           generation =
        }



