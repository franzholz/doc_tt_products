
.. _users-manual-link-for-products-of-the-last:

Link for products of the last X days
------------------------------------

This is practical for “What is new?” pages. Create simply a link to the :typoscript:`SEARCH `page and add
"newitemdays" as parameters.  :html:`https://www.big-typo3-shop.com/index.php?id=8&newitemdays=10` 
The search result will contain all the products of the last 10 days if available. You have to use the plugin code
:php:`LISTNEWITEMS`. You can also set the constant :typoscript:`newItemDays`.
