.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _configuration-payment-shipping-and-handling-pluginttproductspayment-30showlimit-99:

30.showLimit = 99
"""""""""""""""""

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

===============================================================  ======================================  =======================================================  ===========
Property:                                                        Data type:                              Description:                                             Default:
===============================================================  ======================================  =======================================================  ===========
radio                                                            boolean                                 If set, you get radio button layout. If not,
                                                                                                         selector-box.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
template                                                         string                                  **(Radio layout only)**

                                                                                                         If .radio is true, this string is the 'template' for
                                                                                                         the radio items.

                                                                                                         **Default is (in one line):**

                                                                                                         <nobr>###IMAGE### <input type="radio"
                                                                                                         name="recs[tt_products]['.$pskey.']" onClick="submit()"
                                                                                                         value="###VALUE###"###CHECKED###>
                                                                                                         ###TITLE###</nobr><br>
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
wrap                                                             string                                  **(Select layout only)**

                                                                                                         If .radio is false, this string wraps the <option> tags
                                                                                                         in a <select>-tag!

                                                                                                         **Default is (in one line):**

                                                                                                         '<select name="recs[tt_products]['.$key.']"
                                                                                                         onChange="submit()">|</select>'
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
TAXpercentage                                                    double                                  TAX/VAT percentage.                                      from global

                                                                                                         Double value (!) (means, "use . as decimal point")

                                                                                                         This substitutes priceNoTax. This can be different to
                                                                                                         the global tax with the same name.

                                                                                                         **Example:**

                                                                                                         # Danish payment TAX is 25%:

                                                                                                         payment.TAXpercentage = 25.00
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
TAXincluded                                                      boolean                                 Set this, if TAX **is** included in the                  from global
                                                                                                         payment/shipping prices.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
*Array of integers*                                                                                      Configuration, see below

                                                                                                         **Examples:**

                                                                                                         TAXpercentage = 12

                                                                                                         10.title = Credit card

                                                                                                         10.image.file =
                                                                                                         typo3/sysext/cms/tslib/media/logos/dankort.gif

                                                                                                         10.price =

                                                                                                         10.percentOfGoodstotal = 0

                                                                                                         10.calculationScript =
                                                                                                         EXT:tt_products/pi1/products_comp_calcScript.inc

                                                                                                         30.title = By mail

                                                                                                         30.image.file =
                                                                                                         typo3/sysext/cms/tslib/media/logos/postdanmark.gif

                                                                                                         30.price = 40
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
Configuration of selectable payment / shipping / handling items
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
title                                                            string                                  Title of item, eg. “Master card” or “Ground
                                                                                                         mail”

                                                                                                         The title will be cloned, if markers like
                                                                                                         ###STATIC_COUNTRIES_CN_ISO_3### are used together with
                                                                                                         where.static_countries.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
type                                                             string                                  type of shipping (shipping only)

                                                                                                         pick_store … pick it up from a store. The delivery
                                                                                                         address is filled from a selected store (see UIDstore)

                                                                                                         nocopy … the bill address will not be copied into the
                                                                                                         delivery address even if it has been left empty in the
                                                                                                         entry form.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
mode                                                             string                                  mode of payment (payment only)

                                                                                                         bank_transfer ... payment via account

                                                                                                         credit_card

                                                                                                         cash

                                                                                                         PayPal

                                                                                                         Saferpay

                                                                                                         iPayment

                                                                                                         Payone

                                                                                                         ClickandBuy

                                                                                                         vrepay

                                                                                                         Authorize.net
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
image                                                            IMAGE cObject                           Logo image for the item
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
price                                                            double or array of integers             Price of item, including or excluding VAT, depends on
                                                                                                         TAXincluded.
                                                                 *see below for additional parameters*
                                                                                                         You use integers to specify the minimal number of items
                                                                                                         for which the price is valid. 6 items and more will
                                                                                                         cost 5.8 in this example.

                                                                                                         **Example:**

                                                                                                         30.price.type = count 30.price.1 = 4

                                                                                                         30.price.6 = 5.8
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
replaceTAXpercentage                                             double or array of integers             see TAXpercentage If set as double, the general
                                                                                                         TAXpercentage will be overridden by this value. You can
                                                                                                         alternatively use it as an array. You give the tax to
                                                                                                         replace on the left side, and the new tax value on the
                                                                                                         right side. This will replace all taxes of items of
                                                                                                         zero tax by a tax of 8% and it will replace all items
                                                                                                         of 14% with a tax of 2,5% instead. Use this to set
                                                                                                         different taxes for different countries.

                                                                                                         **Example:**

                                                                                                         30.replaceTAXpercentage {

                                                                                                         0 = 8

                                                                                                         14 = 2.5

                                                                                                         }
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
priceFactWeight                                                  double                                  **shipping ONLY:** Price is calculated from weight of
                                                                                                         all products. Will be added to price.

                                                                                                         The weight is multiplied with this factor to increase
                                                                                                         the shipping price.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
priceFactCount                                                   double                                  **shipping ONLY:** Price is calculated from count of
                                                                                                         all products. Will be added to price.

                                                                                                         The product's count is multiplied with this factor to
                                                                                                         increase the shipping price.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
percentOfGoodstotal                                              double                                  Price of item, calculated from a percentage of the
                                                                                                         total amount before payment/shipping
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
percentOfTotalShipping                                           double                                  **payment ONLY:**

                                                                                                         If set the payment costs are calculated in the
                                                                                                         percentage of the total product tax price inclusive the
                                                                                                         shipping tax price.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
creditcards                                                      string                                  **payment ONLY:**

                                                                                                         Comma separated list of allowed uids for the
                                                                                                         creditcards.

                                                                                                         See file localland_db.xml about the values.
                                                                                                         (sys_products_cards.cc_type.I)

                                                                                                         0 ... American Express

                                                                                                         1 ... Diners Club

                                                                                                         2 ... Mastercard

                                                                                                         3 ... Visa
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
creditcardSelect                                                 *[array of form elements]*              **payment ONLY:**

                                                                                                         If set, the month and year for the credit card are
                                                                                                         selectable from select boxes.

                                                                                                         Subvalues: mm (month) and yy (year)

                                                                                                         **Example:**

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
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
accounts                                                         boolean                                 **payment ONLY:**

                                                                                                         If set the payment with booking from the entered bank
                                                                                                         account will be allowed.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
useAsterisk                                                      Int+                                    **payment ONLY:**                                        1

                                                                                                         If set then the account and credit data is replaced
                                                                                                         with asterisks after having been entered.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
bulkilyAddition                                                  int+                                    **shipping ONLY:dis**

                                                                                                         Factor to multiply with a product which is bulkily
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
bulkilyFeeTax                                                    int+                                    **shipping ONLY:**

                                                                                                         Tax fee in percent for shipping of bulkily
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
calculationScript                                                resource                                PHP script which is included in a “blank” function
                                                                                                         and it should be written to manipulate amounts in the
                                                                                                         internal arrays.

                                                                                                         This script could be used to calculate a special fee
                                                                                                         regarding a payment/shipping item.

                                                                                                         For an example of application, see
                                                                                                         media/script/products_comp_calcScript.inc which shows
                                                                                                         you how to raise the final amount with 5.75% of it's
                                                                                                         own value as to compensate for fees to international
                                                                                                         credit card organisations.

                                                                                                         Properties of the calculation script is passed to the
                                                                                                         function as $conf array.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
handleScript                                                     resource                                PHP script which is included in a “blank” method
                                                                                                         called from products_basket() in user_products class
                                                                                                         when the order is finalized.

                                                                                                         This function must take care of displaying templates
                                                                                                         during the payment process with a payment gateway as
                                                                                                         well as finalizing the order afterwards.

                                                                                                         See payment_DIBS.php in addons_tt_products for an
                                                                                                         example. A HTML-template file follows.

                                                                                                         Properties of the handle script is passed to the
                                                                                                         function as $conf array. The content of the variable
                                                                                                         $content is returned as content.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
handleLib                                                        string / array                          **payment ONLY:**

                                                                                                         Name of the TYPO3 library to handle the Payment.
                                                                                                         Currently you can set only 'paymentlib' here to use
                                                                                                         Rober Lemke's Payment Library Extension.

                                                                                                         **Example:**

                                                                                                         30.handleLib = paymentlib

                                                                                                         array values:

                                                                                                         extName ... name of the specific Payment Library (SPL)
                                                                                                         extension

                                                                                                         paymentMethod ... method of the SPL (e.g.
                                                                                                         paymentlib_transcentral_cc_mastercard)

                                                                                                         Currency ... currency to use

                                                                                                         templateFile ... template file for the display of the
                                                                                                         payment

                                                                                                         gatewaymode ... mode of the gateway (form / request)

                                                                                                         <text:span text:style-name="T19"/>

                                                                                                         **Example:**

                                                                                                         40.title = Mastercard 40.handleLib = paymentlib
                                                                                                         40.image.file =
                                                                                                         EXT:tt_products/res/icons/fe/mastercard.gif
                                                                                                         40.handleLib {  extName = transcentral  paymentMethod =
                                                                                                         paymentlib_transcentral_cc_mastercard  Currency = $
                                                                                                         templateFile = EXT:tt_products/template/paymentlib.tmpl

                                                                                                         gatewaymode = form

                                                                                                         }
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
handleURL                                                        string                                  If set, this handleURL is called instead of the
                                                                                                         THANKS-url (by PIDthanks) in order to let eg. a
                                                                                                         handleScript process the information if payment by
                                                                                                         credit card or so.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
handleTarget                                                     string                                  Alternative target for the form.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
excludePayment                                                   *list of integers*                      **shipping ONLY:**

                                                                                                         This is a list of payment method keys (their numbers)
                                                                                                         which are not available given a certain delivery form.
                                                                                                         For instance if people pick up goods in the store, you
                                                                                                         don't want them to transfer money or pay online but
                                                                                                         just order the goods. So you can exclude those payment
                                                                                                         methods.

                                                                                                         **Example:**

                                                                                                         ...

                                                                                                         40.title = Pick up in store

                                                                                                         40.excludePayment = 10,40

                                                                                                         }
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
excludeHandling                                                  *list of integers*                      **shipping ONLY:**

                                                                                                         This is a list of handling method keys (their numbers)
                                                                                                         which are not available given a certain delivery form.
                                                                                                         For instance if people pick up goods in the store, you
                                                                                                         don't need a packaging for transport. So you can
                                                                                                         exclude those handling methods.

                                                                                                         **Example:**

                                                                                                         ...

                                                                                                         40.title = Pick up in store

                                                                                                         40.excludeHandling = 10,40

                                                                                                         }
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
replacePayment                                                   *list of integers*                      **shipping ONLY:**

                                                                                                         This is a list of payment settings which will be
                                                                                                         overridden if this shipping method has been selected.

                                                                                                         **Example:**

                                                                                                         ...

                                                                                                         40.title = China

                                                                                                         40.replacePayment.10.title = Payment with China

                                                                                                         40.replacePayment.10.price = 100

                                                                                                         }
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
show                                                             boolean                                 If set, the item is shown in the list.                   1
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
showLimit                                                        double                                  If set, then this item will only get shown when there
                                                                                                         is at least this number of products in the basket.  0
                                                                                                         ... always show this item
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
type                                                             string                                  **Payment ONLY:**

                                                                                                         fe_users ... the payment can be configured via the
                                                                                                         fe_users table
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
visibleForGroupID                                                int+                                    **Payment ONLY:**

                                                                                                         This payment method is only available, if a user is
                                                                                                         logged in and member of this frontend user group
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
addRequiredInfoFields                                            string                                  **Payment ONLY:**

                                                                                                         Additional required fields in the INFO page, if this
                                                                                                         payment method is selected. Useful for credit card
                                                                                                         payment.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
where.static_countries                                           string                                  **shipping ONLY:**  Set a SQL WHERE condition to follow
                                                                                                         for the selected country in the static_countries table
                                                                                                         of the static_info_tables extension.

                                                                                                         **Example:**

                                                                                                         plugin.tt_products.shipping {   10.title = Parcel
                                                                                                         Germany   10.where.static_countries = cn_short_local =
                                                                                                         'Deutschland'

                                                                                                         10.price = 5.9  20.title = Parcel EU
                                                                                                         ###STATICCOUNTRIES_CN_SHORT_EN###
                                                                                                         20.where.static_countries = cn_eu_member = 1 AND
                                                                                                         cn_short_local != 'Deutschland'

                                                                                                         20.price = 8.9  30.title = Outside EU
                                                                                                         ###STATICCOUNTRIES_CN_SHORT_EN###
                                                                                                         30.where.static_countries = cn_eu_member <> 1

                                                                                                         30.price = 15 }
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
Configuration price Parameters for payment / shipping
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
type                                                             string                                  Meaning of the number: count ... the products count

                                                                                                         weight ... the calculated weight in Gramm price ... the
                                                                                                         total products price
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
WherePIDMinPrice                                                 int+                                    **shipping ONLY:**  Set a minimum price for shipping if
                                                                                                         there is an item in the basket which is from the
                                                                                                         sysfoldepaymentActivityr of this PID.

                                                                                                         Where 155 is the PID and 7.5 is the minimum price taken
                                                                                                         for shipping costs when at least one product in the
                                                                                                         basket comes from the page with that PID.

                                                                                                         **Example:**

                                                                                                         plugin.tt_products.shipping {   10.title = Parcel
                                                                                                         10.price.type = weight   10.price.WherePIDMinPrice.155
                                                                                                         = 7.5   10.price.1 = 1.5   10.price.500 = 2.5
                                                                                                         10.price.1000 = 3.5  }
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
calc                                                             array                                   **shipping ONLY:**  the shippingcalc price calculations
                                                                                                         to be used. (see chapter shipping cost calculation)

                                                                                                         plugin.tt_products.shipping {   10.title = Parcel
                                                                                                         10.price.calc {

                                                                                                         use = 10

                                                                                                         } }
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
productsNoTax                                                    int+                                    **Deprecated**

                                                                                                         **shipping ONLY:**  Set if the taxes are included in
                                                                                                         the price for all products.
---------------------------------------------------------------  --------------------------------------  -------------------------------------------------------  -----------
noCostsAmount                                                    double                                  When the total amount for the products reaches this
                                                                                                         value then no costs will be calculated.

                                                                                                         **Example:**

                                                                                                         plugin.tt_products.shipping {   10.title = Parcel
                                                                                                         10.price.type = count   10.price.noCostsAmount = 200
                                                                                                         10.price.1 = 1.5  }
===============================================================  ======================================  =======================================================  ===========
