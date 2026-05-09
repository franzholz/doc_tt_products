

.. _administration-basket-deletion:

Löschen des Warenkorbes
-----------------------

Um ein Löschfeld für ein Produkt anzugeben, muß folgendes im Template eingetragen werden:
<input type="submit" value="löschen" onclick="this.form.###FIELD_NAME_BASKET###.value='0'">

