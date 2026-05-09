
.. _administration-simple-stock-management:

Einfache Lagerverwaltung
------------------------

Das Feld inStock kann für eine Lagerverwaltung verwendet werden. Wenn `in stock` auf `0` gesetzt ist, wird der Artikel für die Benutzer nicht mehr sichtbar sein. Nach jeder Bestellung wird die Anzahl der bestellten Artikel von `in stock` abgezogen.
Wenn ein neuer Artikel angelegt wird, wird dessen Wert standardmäßig auf `1` gesetzt. Wenn Sie :typoscript:`alwaysInStock=1` gesetzt haben, dann werden diese Artikel immer verfügbar und sichtbar sein. Ansonsten wird die Anzahl der Artikel bei jeder Bestellung reduziert, auch auf negative Werte. Ein negativer Wert bedeutet, dass ein Produkt nun schleunigst beim Lieferanten bestellt werden muss.
Sie können, um einzelne Artikel immer auf Lager zu halten, die entsprechende Checkbox ankreuzen. Dies gilt aber nur für den jeweiligen Artikel. Sie können die Einheiten der Waren auf dem Lager über `inStockPieces` setzen, wie z.B. `Stück`.  oder `Bundle`. Diese Mengeneinheit kann jedoch nur einmal gesetzt werden und gilt dann für alle Produkte.
