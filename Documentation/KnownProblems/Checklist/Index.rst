.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _known-problems-checklist:

Checklist:
----------

- include a 'Shop System' static template file (from extensions)
- **never**  use the 'plugin.tt_producs [DEPRECATED]'
- set 'in stock' greater 0 for the products and articles
- do not use languages or have products in the products alternative languages tables
- the shop template file is found
- an error in the shop produces an entry in the PHP error_log file (activate this in Install Tool
  and php.ini)
- the TYPO3 cache has been cleared before
- the `Firefox cache <http://support.mozilla.com/en-US/kb/How%20to%20clear%20the%20cache>`__  has
  been cleared before
- set the pid_list and recursive in TypoScript or set the startingpoint/recursive inside of the shop
  plugins
