
.. _administration-important:

Important
^^^^^^^^^

Some of the TypoScript settings do not function via the constants area and can be entered in the setup area only. 
Only those settings which can be found using the Constants Editor or in the file :file:`static/css_styled/constants.txt`
are valid constants. 



.. _administration-important-template-files:

Template files
^^^^^^^^^^^^^^

You need to have the following lines in the template files for the shop so the change of the number of items in the basket will work:

..  code-block:: html
    :caption: required hidden input elements for the basket

    <input type="hidden" name="mode_update" value="1">
    <input type="submit" name="products_update" value="update basket">

Put this into your :html:`FORM` html of the BASKET_TEMPLATE.
