.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _configuration-pricecalc-discountprice-and:

Pricecalc, discountprice and creditpoints configuration
-------------------------------------------------------

Setup only. 

The pricecalc gives you the possibility to build the price sum of products using a calculation
table. The discount price will be used for all users who belong to the group set in
discountGroupName. 

=========  =============================  =======================================================  ========
Property:  Data type:                     Description:                                             Default:
=========  =============================  =======================================================  ========
prod       *two-edged list of integers*
---------  -----------------------------  -------------------------------------------------------  --------
additive   double                         Only valid for discount price. If set all the products
                                          with any of these discount prices are counted together
                                          to calculate which discount price will apply. If unset
                                          only the products of the same price are counted.
---------  -----------------------------  -------------------------------------------------------  --------
type       string                         Meaning of the right edge integer which usually gets
                                          calculated: count ... the products count (pricecalc and
                                          discountprice only) price ... the total price of all
                                          articles is used (creditpoints only)
---------  -----------------------------  -------------------------------------------------------  --------
sql        select                         SQL conditions over the records.
=========  =============================  =======================================================  ========

[tsref:(script).productsLib.payment/(script).productsLib.shipping]

.. toctree::
    :maxdepth: 2
    :titlesonly:

    CreditpointsConfiguration/Index
