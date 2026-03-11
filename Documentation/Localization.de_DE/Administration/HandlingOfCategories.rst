

.. _administration-handling-of-categories:

Behandlung der Kategorien
-------------------------

Es gibt mehrere Möglichkeiten ein Shop aufzubauen. Der normale Weg läuft über die Erzeugung
von :ref:`Folder <t3coreapi:list-of-page-types-sysfolder>` für die Produkte, damit
sie in Listen- und Einzelansichten angezeigt werden. 
Für den Aufbau eines größeren Shops mit TYPO3 wäre das etwas unpraktisch.
Wenn Sie größere Shops mit hierarchischen Kategorien anlegen wollen, dann sollten 
Sie die :composer:`jambagecom/mbi-products-categories` Extension installieren. 
Sie verwendet eine mm-Tabelle, mit der man jedem Produkt eine
beliebige Anzahl an Kategorien zuordnen kann. 
Es enthält auißerdem eine verbesserte Version des PHP Skript aus der veralteten
Extension *nsb_cat2menu*. 
Nur damit wird es möglich sein ein Produkt in der Listenansicht unterhalb mehrerer Kategorien anzuzeigen. Der Bau eines Shops mit FAL Bildern wird außerdem nur damit möglich sein.

**Beispiel:**

..  code-block:: php
    :caption: tt_products/ext_localconf.php unset pageAsCategory

    $TYPO3_CONF_VARS['EXTCONF']['tt_products']['pageAsCategory'] = 0;



