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

    *    :typoscript:`pick_store`:  pick it up from a store. The delivery address is filled from a selected store (see :typoscript:`UIDstore`)
    *    :typoscript:`nocopy`:      bill address will not be copied into the delivery address even if it has been left empty in the entry form.


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

    If set as double, the general :php:`TAXpercentage` will be overridden by this value.
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


.. _configuration-payment-shipping-handling-items-price-factor-weight

..  confval:: priceFactWeight
    :name: Price is calculated from weight of all products - shipping ONLY
    :required: false
    :type: double

    Will be added to price. The :php:`weight` is multiplied with this :php:`factor` to increase the shipping price.

.. _configuration-payment-shipping-handling-items-price-factor-count:

..  confval:: priceFactCount
    :name: Price is calculated from count of all products.  - shipping ONLY
    :required: false
    :type: double

    Will be added to price. The product's :php:`count` is multiplied with this factor to increase the shipping price.


.. _configuration-payment-shipping-handling-items-percentage-of-goods-total:

..  confval:: percentOfGoodstotal
    :name: Percent of the total of goods prices
    :required: false
    :type: double

    Price of item, calculated from a percentage of the total amount before :typoscript:`payment`/:typoscript:`shipping`

.. _configuration-payment-shipping-handling-items-percentage-of-total-shipping:

..  confval:: percentOfTotalShipping
    :name: Percent of the total of shipping prices - payment only
    :required: false
    :type: double

    If set the payment costs are calculated in the percentage of the total product tax price inclusive the shipping tax price.

.. _configuration-payment-shipping-handling-items-credit-cards:

..  confval:: creditcards
    :name: credit cards  - payment only
    :required: false
    :type: string

    Comma separated list of allowed uids for the creditcards.
    See file :file:`localland_db.xml` about the values. :php:`sys_products_cards.cc_type.I`

    *    :typoscript:`0`: American Express
    *    :typoscript:`1`: Diners Club
    *    :typoscript:`2`: Mastercard
    *    :typoscript:`3`: Visa

.. _configuration-payment-shipping-handling-items-credit-card-select:

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
                  10.label = 2026
                  10.value = 2027
                  20.label = 2028
                  20.value = 2029
                  30.label = 2030
                  30.value = 2031
                  40.label = 2032
                  40.value = 2033
              }
         }

.. _configuration-payment-shipping-handling-items-accounts:

..  confval:: accounts
    :name: allowed bank account - payment only
    :required: false
    :type: boolean

    If set the payment with booking from the entered bank account will be allowed.

.. _configuration-payment-shipping-handling-items-asterisk:

..  confval:: useAsterisk
    :name: use asterisk - payment only
    :required: false
    :type: int+
    :default: 1

    If set then the account and credit data is replaced with asterisks after having been entered..


.. _configuration-payment-shipping-handling-bulkily-addition:

..  confval:: bulkilyAddition
    :name: bulkily addition - shipping only
    :required: false
    :type: int+
    :default: 1

    Factor to multiply with a product which is bulkily


.. _configuration-payment-shipping-handling-items-bulkily-fee-tax:

..  confval:: bulkilyFeeTax
    :name: bulkily fee tax - shipping only
    :required: false
    :type: int+

    Tax fee in percent for shipping of bulkily


.. _configuration-payment-shipping-handling-calculation-script:

..  confval:: calculationScript
    :name: calculation script - shipping only
    :required: false
    :type: resource

    PHP script which is included in a “blank” function and it should be written to manipulate amounts in the internal arrays.
    This script could be used to calculate a special fee regarding a :php:`payment`/:php:`shipping` item.
    It is not recommended to use this feature. Write your own TYPO3 extension instead which is based on hooks.
    Properties of the calculation script is passed to the function as :php:`$confScript` array.
    The resulting prices need to be written into the variables :php:`$priceShippingTax` and
    :php:`$priceShippingNoTax`.


.. _configuration-payment-shipping-handling-handle-script:

..  confval:: handleScript
    :name: handle script
    :required: false
    :type: resource

    PHP script which is included in a “blank” method called from :php:`products_basket()` in :php:`user_products` class when the order is finalized.
    This function must take care of displaying templates during the payment process with a payment gateway as well as finalizing the order afterwards.
    See :file:`payment_DIBS.php` in :composer:`jambagecom/addons-tt-products` for an example. A HTML-template file follows.
    Properties of the handle script is passed to the function as :php:`$conf` array. The content of the variable :php:`$content` is returned as content.


.. _configuration-payment-shipping-handling-handle-lib:

..  confval:: handleLib
    :name: handle library - payment only
    :required: false
    :type: string / array

    Name of the TYPO3 library to handle the Payment. Currently you can set only :composer:`jambagecom/transactor` here to use the Payment Transactor Library Extension.

    array values:
    *    :typoscript:`extName`: name of the specific Payment Library (SPL) extension
    *    :typoscript:`paymentMethod`: method of the SPL (e.g. paymentlib_transcentral_cc_mastercard)
    *    :typoscript:`currency`:     currency to use
    *    :typoscript:`templateFile`: template file for the display of the payment
    *    :typoscript:`gatewaymode`:  mode of the gateway (form / request)


    **Example:**

    ..  code-block:: typoscript
        :caption: transactor for Mastercard

        40.title = Mastercard
        40.handleLib = transactor
        40.image.file = EXT:tt_products/res/icons/fe/mastercard.gif
        40.handleLib {
            extName = transcentral
            paymentMethod = paymentlib_transcentral_cc_mastercard
            Currency = $
            templateFile = EXT:tt_products/template/paymentlib.tmpl
            gatewaymode = form
        }

.. _configuration-payment-shipping-handling-handle-url:

..  confval:: handleURL
    :name: handle url
    :required: false
    :type: string

    If set, this handleURL is called instead of the THANKS-url (by :typoscript:`PIDthanks`) in order to let eg. a :typoscript:`handleScript` process the information if payment by credit card or so.

.. _configuration-payment-shipping-handling-handle-target:

..  confval:: handleTarget
    :name: handle form target
    :required: false
    :type: string

    Alternative target for the form.


.. _configuration-payment-shipping-handling-exclude-payment:

..  confval:: excludePayment
    :name: exclude payment options - shipping only
    :required: false
    :type: string

    This is a list of payment method keys (their numbers) which are not available given a certain delivery form. For instance
    if people pick up goods in the store, you don't want them to transfer money or pay online but just order the goods.
    So you can exclude those payment methods.

    **Example:**

    ..  code-block:: typoscript
        :caption: excludePayment for pickup in store

        40.title = Pick up in store
        40.excludePayment = 10,40


.. _configuration-payment-shipping-handling-exclude-handling:

..  confval:: excludeHandling
    :name: exclude handling options - shipping only
    :required: false
    :type: string

    This is a list of handling method keys (their numbers) which are not available given a certain delivery form.
    For instance if people pick up goods in the store, you don't need a packaging for transport. So you can exclude those handling methods


    **Example:**

    ..  code-block:: typoscript
        :caption: excludePayment for pickup in store

        40.title = Pick up in store
        40.excludeHandling = 20,70


.. _configuration-payment-shipping-handling-replace-payment:

..  confval:: replacePayment
    :name: replace payment options - shipping only
    :required: false
    :type: list of integers

    This is a list of :typoscript:`payment` settings which will be overridden if this :typoscript:`shipping` method has been selected.

    **Example:**

    ..  code-block:: typoscript
        :caption: excludePayment for pickup in store

        40.title = China
        40.replacePayment.10.title = Payment with China
        40.replacePayment.10.price = 100


. _configuration-payment-shipping-handling-show:

..  confval:: show
    :name: show this item
    :required: true
    :type: boolean
    :default: 1

    If set, the item is shown  in the list.


. _configuration-payment-shipping-handling-show-limit:

..  confval:: showLimit
    :name: show with as many items in the basket
    :required: true
    :type: double
    :default: 0

    If set, then this item will only get shown when there is at least this number of products in the basket.

    *    :typoscript:`0`: always show this item


. _configuration-payment-shipping-handling-type:

..  confval:: type
    :name: type of handling - payment only
    :required: true
    :type: string

    *    :typoscript:`fe_users`: the :typoscript:`payment` can be configured via the :php:`fe_users` table

. _configuration-payment-shipping-handling-visible-for-group-id:

..  confval:: visibleForGroupID
    :name: visible for front end group - payment only
    :required: true
    :type: string

    This :typoscript:`payment` method is only available, if a user is logged in and member of this front end user group


. _configuration-payment-shipping-handling-add-required-info-fields:

..  confval:: addRequiredInfoFields
    :name: additional required fields for a selected payment option - payment only
    :required: false
    :type: string

    Additional required fields in the :typoscript:`INFO` page, if this :typoscript:`payment` method is selected. Useful for credit card payment.


. _configuration-payment-shipping-handling-where-static-countries:

..  confval:: where_static_countries
    :name: SQL Where for countries - shipping only
    :required: true
    :type: string

    Set a SQL WHERE condition to follow for the selected country in the :php:`static_countries` table of the :composer:`sjbr/static-info-tables` extension.

    Example:
    ..  code-block:: typoscript
        :caption: excludePayment for pickup in store

        plugin.tt_products.shipping {
             10.title = Parcel Germany
             10.where.static_countries = cn_short_local = 'Deutschland'
             10.price = 5.9
             20.title = Parcel EU ###STATICCOUNTRIES_CN_SHORT_EN###
             20.where.static_countries = cn_eu_member = 1 AND cn_short_local != 'Deutschland'
             20.price = 8.9
             30.title = Outside EU ###STATICCOUNTRIES_CN_SHORT_EN###
             30.where.static_countries = cn_eu_member <> 1
             30.price = 15
        }

