
.. _administration-important:

Wichtige Hinweise
^^^^^^^^^^^^^^^^^

Einige der TypoScript Einstellungen funktionieren nicht über das Constants Feld und müssen im Setup Feld
eingetragen werden. Nur die Konfigurationen, die im Konstanteneditor oder in der Datei
:file:`Configuration/TypoScript/PluginSetup/Main/constants.typoscript` vorkommen, 
sind gültige Konstantenwerte. 



.. _administration-important-template-files:

Template files
^^^^^^^^^^^^^^

You need to have the following lines in the template files for the shop so the change of the number of items in the basket will work:

..  code-block:: html
    :caption: required hidden input elements for the basket

    <input type="hidden" name="mode_update" value="1">
    <input type="submit" name="products_update" value="update basket">

Put this into your :html:`FORM` html of the :php:`BASKET_TEMPLATE`.
