

.. _administration-weight-bulkily-special:

Weight, Bulkily Goods and Special Production
--------------------------------------------

Each product can have a weight and be declared as special production `Yes/No`. The
total weight of the ordered articles is calculated and can be considered in the
calculation of the shipping costs.
If a product has been declared as speical production, its display will show a warning
"special production".
(:typoscript:`bulkilyWarning`). By setting :typoscript:`bulkilyAddition` you can add
additional shipping costs for this special production.
A special production contains no further functionality. Only a marker is replaced
(similar to `BulkilyWarning`). You can set a link to the e-mail page.


**Example:**

..  code-block:: typoscript
    :caption: define marker MY_MARKER

    specialPreparation = special preparation is possible! <A HREF="?id=999&tt_products=###PRODUCT_ID###">Order here</A>.

