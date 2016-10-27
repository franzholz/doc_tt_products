.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _users-manual-voucher-system:

Voucher System
--------------

An interested customer is obtained through invitation by e-mail to visit a shop and purchase
products. This e-mail is attached to a unique code which corresponds to a certain amount of credit
points (voucher). When they make a purchase, they can redeem these credit points by inputing the
unique code. 

If a customer states in his registration that he has been recruited by another customer, then the
referring customer gets credit points. The new customer gets a discount with his first order. 

Somebody (lets say user 1) can enter a voucher code if he concludes an order. Then user 1 will
obtain a discount. This credit entry code undergoes a change with each different user name (which is
the e-mail address). Let's say user 2 gets 5 credit points altogether and applies his code to his
purchase. Only one entry code out of a voucher system can be used by each user. In fe_users table
there is a field given for this "tt_products_vouchercode" which contains the used credit entry code
(e-mail of user 2).
