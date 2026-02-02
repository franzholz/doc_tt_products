
.. _configuration-payment-shipping-and-handling:

Payment, shipping and handling configuration
--------------------------------------------

  Setup only.
  
  Payment and shipping are very similar in configuration and therefore shared the same property list with special notes if something is for the one type only. 
  The configuration of payment and shipping is in short a question of defining the items to choose from on the basket page. That is, a choice of one 
  out of many transportation methods and one out of many payment methods. Therefore you can for instance select either radio-button representation or selector box.
  The number of the selected payment method or shipping method is reflected in the html-template certain places and you may also want special PHP scripts 
  executed based on the settings. That's all allowed.

    **Example:**

    ..  code-block:: typoscript
        :caption: EXT:my_extension/ext_localconf.php

        plugin.tt_products.payment {
            radio = 1
            TAXpercentage = 19
            10.title = Prepaid
            20.title = PayPal
            20.percentOfTotalShipping = 0.04
            30.title = Cash on Delivery
            30.price.1 = 4
            30.price.6 = 5.8
            30.showLimit = 99
        }
        
        plugin.tt_products.shipping {
            radio = 0
            TAXpercentage = 19
            10.title = Deutschland
            10.image.params = align=absmiddle
            10.price.type = count
            10.price.1 = 2.5
            10.price.20 = 4.8
            10.price.50 = 10
            10.price.100 = 25
            10.price.120 = 30
            10.price.300 = 150
            10.percentOfGoodstotal = 0
        
            20.title = Europa (nicht Deutschland)
            20.image.params = align=absmiddle
            20.price.type = count
            20.price.1 = 8.8
            20.price.20 = 11.8
            20.price.50 = 11.8
            20.price.100 = 25
            20.price.120 = 30
            20.price.300 = 150
            20.percentOfGoodstotal = 0
        
            30.title = Selbstabholung
            30.type = pick_store
            30.price.1 = 0
        }
        
        plugin.tt_products.handling {
            10 {
              TAXpercentage = 19
              10.title = Printing Costs
              10.price = 17
            }
            20 {
              TAXpercentage = 19
              10.title = Small Volume Addition
              10.price = 5
            }
            30 {
              TAXpercentage = 19
              10.title = Packaging Costs
              10.price = 1.95
            }
        }


.. _configuration-payment-shipping-handling-radio:

..  confval:: radio
    :name: radio button layout
    :required: false
    :type: boolean
    :default: 0

    If set, you get radio button layout. If not, selector-box.


.. _configuration-payment-shipping-handling-template:

..  confval:: template (radio layout only)
    :name: layout for radio buttons
    :required: false
    :type: string
    :default: see below

    If :typoscript'`radio` is true, this string is the 'template' layout for the radio items.

       **Example:**

    ..  code-block:: typoscript
        :caption: default template in one line

        <nobr>###IMAGE### <input type="radio" name="recs[tt_products]['.$pskey.']" onClick="submit()" value="###VALUE###"###CHECKED###> ###TITLE###</nobr><br>




