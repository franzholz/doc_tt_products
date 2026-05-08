

.. _users-manual-calculation-script:

Berechnungsskript
-----------------

Wenn Sie Ihr eigenes Berechnungsskript schreiben und verwenden wollen, dann sollten Sie immer die Preise
inkl. Mehrwertsteuer eingeben. Verwenden Sie die price Variablen und 
die Konstanten :typoscript:`TAXpercentage` und :typoscript:`TAXincluded`.
Sie können die global PHP-Variablen :php:`$calculatedArray` und

..  code-block:: php
    :caption: basket calculation example

    use TYPO3\CMS\Core\Utility\GeneralUtility;
    use JambageCom\TtProducts\Api\BasketApi;

    $basketObj = GeneralUtility::makeInstance(Basket::class);
    $itemArray = $basketObj->getItemArray();

für Ihre eigenen Preisberechnungen verwenden.

..  code-block:: typoscript
    :caption: set calculationScript as EXT:my_extension/Classes/Utility/MyCalculations.php

    10.calculationScript = EXT:my_extension/Classes/Utility/MyCalculations.php

