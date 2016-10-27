.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _configuration-files:

Files
-----

==============================================================================  =====================================================
File:                                                                           Description:
==============================================================================  =====================================================
class.tx_ttproducts.php                                                         Main class used to display the product list or the
                                                                                shopping basket.

                                                                                Call it from a USER cObject with 'userFunc =
                                                                                user_products->main_products'
------------------------------------------------------------------------------  -----------------------------------------------------
products_comp_calcScript.inc                                                    Example 'calculationScript'
------------------------------------------------------------------------------  -----------------------------------------------------
products_template.tmpl                                                          Example templates in English.

products_template_htmlmail.tmpl                                                 '.._htmlmail.tmpl' is a HTML-wrap for the HTML-emails
                                                                                sent.
------------------------------------------------------------------------------  -----------------------------------------------------
example_template_bill_de.tmpl                                                   bananaguard.de template with examples for bill and
                                                                                delivery sheet in German
------------------------------------------------------------------------------  -----------------------------------------------------
product_detail.tmpl product_proefpakketten.tmpl shop-a-box.tmpl producten.tmpl  Example templates for gift certificates, creditpoints
                                                                                and voucher system in Dutch
------------------------------------------------------------------------------  -----------------------------------------------------
products_css_en.html                                                            CSS styled template. Use this if you need a
                                                                                barrier-free shop.
==============================================================================  =====================================================

[tsref:(cObject).TEST]
