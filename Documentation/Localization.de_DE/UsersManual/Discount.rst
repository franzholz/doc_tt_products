
.. _users-manual-discount:

Rabatt
------

Es gibt mehrere Methoden um einen Rabatt zu erhalten.

#.  Verwenden des Rabatt Feldes :php:`discount` eines Frontend Benutzers und Eingabe der Prozente für den Discount.
#.  Verwenden des Feldes :php:`price2` für besondere Frontend Benutzer Gruppen und andere Dinge. Sie können das in
TypoScript über die IF-Anweisung setzen.
#.  Verwenden der :php:`discountprice` Berechnung. Der Rabatt hängt von der Gesamtanzahl der Produkte mit
einem besonderen Preis ab. Dieser Rabatt wird für die Frontend-Benutzer der Gruppe 'discountGroupName'
gewährt.

