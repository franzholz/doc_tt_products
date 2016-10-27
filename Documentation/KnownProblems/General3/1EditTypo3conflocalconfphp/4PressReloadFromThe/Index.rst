.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _known-problems-general-3-1-edit-typo3conflocalconfphp-4-press-reload-from-the:

4. press reload from the browser
""""""""""""""""""""""""""""""""

- Always use the version of the Table Library and fh_library as described in the Extension Manager
  for tt_products.
- Please look at the website `http://wiki.typo3.org/index.php/Ext_tt_products
  <http://wiki.typo3.org/index.php/Ext_tt_products>`__  .
- Get the latest development version from TER. Or have a look at `http://jambage.com
  <http://jambage.com/>`__ 
- .htaccess must be properly configured otherwise tt_products doesn't work as expected because the
  plugin can't find all necessary scripts with poor configuration of .htaccess.
- **Wrong parameters, GET/POST var 'tt_products[product]' was missing or no product with uid = 0
  found. You should set the PIDitemDisplay to inform the shop how the link parameter
  'tt_products[product]' to the single view shall be generated.** 
- **Pay attention to all legal claims of all the countries to where you send goods!** 
- Plugin doesn't produce any output See the checklist above.
- Set the hook $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_products']['extendingTCA'] in order that
  the $TCA of your extension is included. Otherwise the markers of your fields will not be replaced.
  Make sure that your extension is installed before tt_products. Adjust the order in the variable
  $TYPO3_CONF_VARS['EXT']['extList'].
