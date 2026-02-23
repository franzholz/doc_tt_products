
.. _users-manual-discount:

Discount:
---------

There are several methods to get a discount.

#. Use the :php:`discount` field for a front end user and enter the percent of discount.
#. Use the :php:`price2` field for special front end user groups or other things. This setting is done in TypoScript
   via the IF-statement.
#. Use the :php:`discountprice` calculation where the discount depends on the value of the total number of
   the products which have a special price. This will be available for the front end user group
   :typoscript:`discountGroupName`.
