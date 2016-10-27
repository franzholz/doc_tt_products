.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _configuration-pricecalc-discountprice-and-creditpoints-configuration:

Creditpoints Configuration
^^^^^^^^^^^^^^^^^^^^^^^^^^

See the table above for the main configuration of creditpoints.

===========  ==========  =======================================================  ========
Property:    Data type:  Description:                                             Default:
===========  ==========  =======================================================  ========
pricefactor  double      Used to calculate how much money someone will get for
                         his creditpoints. 2 creditpoins will give 1 Euro or the
                         currency of your choice.

                         In this example one creditpoint of a product will have
                         the value of 50 Cent.

                         **Example:**

                         creditpoints {

                           pricefactor = 0.5

                         }
-----------  ----------  -------------------------------------------------------  --------
mode         string      Normally you must create you HTML template with entry
                         fields for the amount of creditpoins you want to use.

                         Change this to the mode 'auto'. Then all necessary
                         creditpoints wil be used automatically.

                         **Example:**

                         creditpoints {

                            mode = auto

                         }
===========  ==========  =======================================================  ========
