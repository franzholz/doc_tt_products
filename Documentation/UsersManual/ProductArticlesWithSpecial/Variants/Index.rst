.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _users-manual-product-articles-with-special-variants:

variants:
^^^^^^^^^

    Colour (variant 1)

    2nd Colour (variant 6)

    3rd Colour (variant 7)

    Size Lenght (variant 2)

    2nd Size Width (variant 8)

    3rd Size Height (variant 9)

    Description (variant 3)

    Gradings (variant 4)

    Material (variant 10)

    Quality (variant 11)

    Additional (special variant 5)

#. In the TSSetup for the template add
#.     If you are using columns to List your products like in the Bananaguard example, you also need
#.     All this tells TYPO3 to read from the product articles and display a dropdown selection box if
       variants are used. 
#.     Add the parent product.  This is the primary information that is displayed in the frontend
       List and Single views, ie description, image etc. Create a new entry in the Web > List mode.
       Select Product from the available options.  You will need to fill out the following fields: 
       Title 


  - InStock (must have at least 1 to display in the frontend) 
  - Category (if applicable)
  - Price (this should be the cheapest price for the cheapest size - corresponding to the cheapest
    product article which we will set up next)
  - Size (same applies for Color/Description/Grading if applicable)  This is crucial - in order for
    the frontend to be able to select a product variant you need to list all the size options here
    first, separated by a semi-colon e.g. S;M;X;XL - this will correspond to the product articles
    we'll create next.
  - Note
  - Image

#.     Datasheet (if applicable).

    Add the product variants Here we create the different sizes for the parent product. The
    information is pretty basic, you use to clarify different prices, item numbers (for keeping
    track of stock), amount of stock etc. Each product variant must relate to one of the sizes (or
    colour etc) we listed in the parent product. 

-     Create a new entry in the Web > List mode. 
-     Select Product Articles from the available options. 
-     Fill out the Title (this will appear in the shopping basket) and
-     Instock
-     Price
-     If this variant is the cheapest version this should be the same as the price listed in the
      Parent Product.

#.     Changes to the html template  This is the last thing to do. 

-     You'll need to add new fields to the ###ITEM_LIST_TEMPLATE### and ###ITEM_SINGLE_DISPLAY###. 
-     The Code Listing below for the variant selection box needs to be added and must sit inside of
      the form tags. Also note that any information between ###display_variant1### or
      ###display_variant2### tags will not be displayed if that variant is not used. This is a
      useful feature as we can use this to display or hide the word 'From' before the
      ###PRICE_TAX### value by putting the ###display_variant2### tags either side, giving us for
      example 'From $200' when $200 is the cheapest size (this is why the cheapest price is entered
      in the product parent - by default the parent product price is displayed in the List and
      Single view, the variant price is only displayed in the shopping basket once a size (or color
      etc) has been selected.) When no variant options are available the word From is hidden.  Code
      Listing:

.. toctree::
    :maxdepth: 2
    :titlesonly:

    Autogenerated1d979/Index
    Colorproductcolor/Index
    AutogeneratedEf0f4/Index
    Sizeproductsize/Index
    Autogenerated4f82a/Index
