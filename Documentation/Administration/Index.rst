
.. _administration:

Administration
==============



In the normal case the categories from the category table and its enhancements are used. You have to set

:php:`$TYPO3_CONF_VARS['EXTCONF']['tt_products']['pageAsCategory'] = 0;`

to be able to use them. Otherwise the pages will form the category and the category will be used as
subcategory (:php:`= 1`) or not used at all but replaced by the page (:php:`= 2`).

The flexforms in the backup are always activated automatically.

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Installation/Index
    HandlingOfCategories/Index
    TemplateMarkers/Index
    AutomaticCreationOfFrontend/Index
    ,/Important
    TypoScript/Setup
