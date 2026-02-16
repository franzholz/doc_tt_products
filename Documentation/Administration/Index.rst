
.. _administration:

Administration
==============


In the normal case the categories from the category table are used. You have to set

:php:`$TYPO3_CONF_VARS['EXTCONF']['tt_products']['pageAsCategory'] = 0;`

to be able to use them. Otherwise the pages will be taken for categories and the category will be used as
the subcategory (:php:`= 1`) of a page or not used at all but replaced by the page (:php:`= 2`).
The only advantage of the latter is that you simply place the records on a page without the need to assign a category. 
This has historical reasons when no category tree had been available and because the back end page tree has the better
user guidance.

.. toctree::
    :maxdepth: 2
    :titlesonly:

    HandlingOfCategories/Index
    TemplateMarkers/Index
    AutomaticCreationOfFrontend/Index
    Important
    TypoScript/Setup
