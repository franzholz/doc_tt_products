

.. _known-problems-checklist:

Checklist:
----------

*   include a 'Shop System' or 'Shop System Variable Content' from 'Advanced Options' -> 'Include TypoScript sets'
*   set 'in stock' greater 0 for the products and articles
*   do not use languages or have products in the products alternative languages tables
*   the shop template file is found
*   an error in the shop produces an entry in the PHP error_log file (activate this in Install Tool
    and :file:`php.ini`, :file:`.user.ini` or :file:`.htaccess`)
*   the TYPO3 cache has been cleared before
*   the web browser cache has been cleared before
*   the cookies have been deleted
*   set the :typoscript:`pid_list` and :typoscript:`recursive` in TypoScript or set the
    "Record Storage Page" / "Recursive" inside of the shop plugins
