

.. _users-manual-calculation-script:

Calculation script:
-------------------

If you write and use your own calculation scripts, then you should always use only the price
variables. The priceTax and priceNoTax variables will be deleted in August 2008 because they can be
calculated from the price variables and the TAXpercentage and TAXincluded constants. You can use the
global PHP variables $this->calculatedArray and $this->itemArray to make your own price
calculations.

..  code-block:: typoscript
    :caption: set calculationScript as EXT:my_extension/Classes/Utility/MyCalculations.php

    10.calculationScript = EXT:my_extension/Classes/Utility/MyCalculations.php
