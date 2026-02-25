

.. _users-manual-calculation-script:

Calculation script:
-------------------

If you write and use your own calculation scripts, then you should always use only the price
variables. The priceTax and priceNoTax variables will be deleted in August 2008 because they can be
calculated from the price variables and the TAXpercentage and TAXincluded constants. You can use the
local PHP variables $calculatedArray and

..  code-block:: php
    :caption: basket calculation example

    use TYPO3\CMS\Core\Utility\GeneralUtility;
    use JambageCom\TtProducts\Api\BasketApi;

    $basketObj = GeneralUtility::makeInstance(Basket::class);
    $itemArray = $basketObj->getItemArray();

to make your own price calculations.

..  code-block:: typoscript
    :caption: set calculationScript as EXT:my_extension/Classes/Utility/MyCalculations.php

    10.calculationScript = EXT:my_extension/Classes/Utility/MyCalculations.php

