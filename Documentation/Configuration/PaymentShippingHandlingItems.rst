.. _configuration-payment-shipping-handling-items:

Selectable Payment / Shipping / Handling Items
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. _configuration-payment-shipping-handling-items-title:

..  confval:: title
    :name: title of item
    :required: false
    :type: string

    Title of item, eg. “Master card” or “Ground mail”
    The title will be cloned, if markers like :php:`###STATIC_COUNTRIES_CN_ISO_3###` are used together with :typoscript:`where.static_countries`.


.. _configuration-payment-shipping-handling-items-type:

..  confval:: type
    :name: type of shipping
    :required: false
    :type: string

    *    pick_store:  pick it up from a store. The delivery address is filled from  a selected store (see UIDstore)
    *    nocopy:      bill address will not be copied into the delivery address even if it has been left empty in the entry form.


.. _configuration-payment-shipping-handling-items-mode:

..  confval:: mode
    :name: mode of payment (only for payment)
    :required: false
    :type: string

    Possible payment options:

    *    bank_transfer ... payment via account
    *    credit_card
    *    cash
    *    PayPal
    *    Saferpay
    *    iPayment
    *    Payone
    *    ClickandBuy
    *    vrepay
    *    Authorize.net

.. _configuration-payment-shipping-handling-items-image:

..  confval:: image
    :name: Logo image
    :required: false
    :type: IMAGE cObject

    Logo image for the item


.. _configuration-payment-shipping-handling-items-price:

..  confval:: price
    :name: price of item
    :required: false
    :type: double or array of integers
           see below for additional parameters

   Price of item, including or excluding VAT, depends on TAXincluded.
   You use integers to specify the minimal number of items for which the price is valid. 
   6 items and more will cost 5.8 in this example.

    **Example:**

    ..  code-block:: typoscript
        :caption: use the subtitle for translations

        30.price.type = count
        30.price.1 = 4
        30.price.6 = 5.8

.. _configuration-payment-shipping-handling-items-replace-tax-percentage:

..  confval:: replaceTAXpercentage
    :name: replacement of previously configured tax. see TAXpercentage
    :required: false
    :type: double of integers

    If set as double, the general TAXpercentage will be overridden by this value. 
    You can alternatively use it as an array. You give the tax to replace on the left side, 
    and the new tax value on the right side. This will replace all taxes of items of zero tax
    by a tax of 8% and it will replace all items of 14% with a tax of 2,5%  instead. 
    Use this to set different taxes for different countries.

    **Example:**

    ..  code-block:: typoscript
        :caption: replaceTAXpercentage depending on sum

        30.replaceTAXpercentage {
           0 = 8
           14 = 2.5
        }

..  confval:: priceFactWeight
    :name: Price is calculated from weight of all products - shipping ONLY
    :required: false
    :type: double

    Will be added to price. The weight is multiplied with this factor to increase the shipping price.
  

..  confval:: priceFactCount
    :name: Price is calculated from count of all products.  - shipping ONLY
    :required: false
    :type: double

    Will be added to price. The product's count is multiplied with this factor to increase the shipping price.


..  confval:: percentOfGoodstotal
    :name: Percent of the total of goods prices
    :required: false
    :type: double

    Price of item, calculated from a percentage of the total amount before payment/shipping
  



