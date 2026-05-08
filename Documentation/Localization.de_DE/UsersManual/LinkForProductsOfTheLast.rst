
.. _users-manual-link-for-products-of-the-last:

Link für Produkte der letzten X Tage
------------------------------------

Das ist praktisch für Seiten “Was ist neu?”. Erzeugen Sie einfach einen Link zur :typoscript:`SEARCH ` Seite und geben Sie
"newitemdays" als Parameter an. :html:`https://www.big-typo3-shop.com/index.php?id=8&newitemdays=10` 
Die Suche wird alle Produkte der letzten 10 Tage liefern. Sie müssen den Plugin Code :php:`LISTNEWITEMS` eintragen. Sie
können stattdessen auch die Konstante :typoscript:`newItemDays` setzen.

