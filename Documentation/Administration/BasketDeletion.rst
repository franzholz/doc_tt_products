

.. _administration-basket-deletion:

Deletion of a basket
--------------------

To add a deletion button for a product you must add the following to the template:

**Example:**

..  code-block:: typoscript
    :caption: basket delete button for a product

    <input type="submit" value="delete" onclick="this.form.###FIELD_NAME_BASKET###.value='0'">

