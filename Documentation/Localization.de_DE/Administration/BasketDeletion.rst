

.. _administration-basket-deletion:

Löschen des Warenkorbs
----------------------

Um ein Löschfeld für ein Produkt anzugeben, muss Folgendes im Template eingetragen werden:

**Beispiel:**

..  code-block:: typoscript
    :caption: Warenkorb Lösch-Button für ein Produkt

    <input type="submit" value="löschen" onclick="this.form.###FIELD_NAME_BASKET###.value='0'">

