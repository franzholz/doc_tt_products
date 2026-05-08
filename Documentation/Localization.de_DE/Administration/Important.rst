
.. _administration-important:

Wichtige Hinweise
^^^^^^^^^^^^^^^^^

Einige der TypoScript Einstellungen funktionieren nicht über das Constants Feld und müssen im Setup Feld
eingetragen werden. Nur die Konfigurationen, die im Konstanteneditor oder in der Datei
:file:`Configuration/TypoScript/PluginSetup/Main/constants.typoscript` vorkommen, 
sind gültige Konstantenwerte. 


.. _administration-important-template-files:

Template Dateien
^^^^^^^^^^^^^^^^

In den Template Dateien Ihres Shop müssen Sie die folgenden Korrekturen machen, damit Sie 
verwendet werden können:

..  code-block:: html
    :caption: required hidden input elements for the basket

    <input type="hidden" name="mode_update" value="1">
    <input type="submit" name="products_update" value="update basket">

Stellen Sie diese :html:`FORM` Html in Ihr :php:`BASKET_TEMPLATE`.
