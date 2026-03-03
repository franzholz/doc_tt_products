
.. _administration:

Administration
==============


Im Normalfall werden die Kategorien über die Kategorietabelle und ihre Erweiterungen angezeigt. Um das zu
nutzen, muss

:php:`$TYPO3_CONF_VARS['EXTCONF']['tt_products']['pageAsCategory'] = 0;`

eingestellt sein. Andernfalls bestimmen die Seite die Kategorie und die Kategorie ist die Unterkategorie (=1)
oder die Kategorie wird nicht benutzt sondern komplett durch die Seite ersetzt (=2).
Das hat historische Gründe als es noch keinen Kategoriebaum gegeben hat und weil der Seitenbaum im TYPO3 Backend eine
bessere Benutzerführung bietet.

.. toctree::
    :maxdepth: 2
    :titlesonly:

    HandlingOfCategories
    TemplateMarkers
    AutomaticCreationOfFrontend
    Important
    TypoScript/Setup
