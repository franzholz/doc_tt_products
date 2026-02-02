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
  

..  confval:: percentOfTotalShipping
    :name: Percent of the total of shipping prices - payment only
    :required: false
    :type: double

    If set the payment costs are calculated in the percentage of the total product tax price inclusive the shipping tax price.


..  confval:: creditcards
    :name: credit cards  - payment only
    :required: false
    :type: string

    Comma separated list of allowed uids for the creditcards.
    See file :file:`localland_db.xml` about the values. :php:`sys_products_cards.cc_type.I`

    *    0: American Express
    *    1 ... Diners Club
    *    2 ... Mastercard
    *    3 ... Visa


..  confval:: creditcardSelect
    :name: credit cards selection - payment only
    :required: false
    :type: array of form elements

    If set, the month and year for the credit card are selectable from select boxes.
    Subvalues: :typoscript:`mm` (month) and :typoscript:`yy` (year)

    **Example:**

    ..  code-block:: typoscript
        :caption: replaceTAXpercentage depending on sum

        creditcardSelect {
              mm {
                label = Month
                valueArray {
                  10.label = 1
                  10.value = 1
                  20.label = 2
                  20.value = 2
                  30.label = 3
                  30.value = 3
                  40.label = 4
                  40.value = 4
                  50.label = 5
                  50.value = 5
                  60.label = 6
                  60.value = 6
                  70.label = 7
                  70.value = 7
                  80.label = 8
                  80.value = 8
                  90.label = 9
                  90.value = 9
                  100.label = 10
                  100.value = 10
                  110.label = 11
                  110.value = 11
                  120.label = 12
                  120.value = 12
                }
              }
            
              yy {
                label = Year
                type = recs[creditcard][endtime_yy]=select
                valueArray {
                  10.label = 2010
                  10.value = 2010
                  20.label = 2011
                  20.value = 2011
                  30.label = 2012
                  30.value = 2012
                  40.label = 2013
                  40.value = 2013
              }
         }
            




  


