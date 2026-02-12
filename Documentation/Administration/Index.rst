
.. _administration:

Administration
==============



In the normal case the categories from the category table are used. You have to set

:php:`$TYPO3_CONF_VARS['EXTCONF']['tt_products']['pageAsCategory'] = 0;`

to be able to use them. Otherwise the pages will form the category and the category will be used as
subcategory (:php:`= 1`) of a page or not used at all but replaced by the page (:php:`= 2`).

The flexforms in the back end are always activated automatically.

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Installation/Index
    HandlingOfCategories/Index
    TemplateMarkers/Index
    AutomaticCreationOfFrontend/Index
    ,/Important
    TypoScript/Setup
