

.. _administration-weight-bulkily-special:

Gewicht, Sperrgut und Spezialanfertigung
----------------------------------------

Jedes Produkt kann ein Gewicht haben und als Sperrgut deklariert werden (Ja/Nein). Das Gesamtgewicht der bestellten Artikel wird berechnet und kann in der Preisberechnung für die Versandkosten berücksichtigt werden.
Wenn ein Produkt als Sperrgut markiert worden ist, dann wird bei dessen Anzeige eine Warnung als 'Sperrgut' angezeigt. ('bulkilyWarning' im Setup). Durch das Setzen von 'bulkilyAddition' im Setup können Sie zusätzliche Versandkosten für dieses Sperrgut dazuaddieren. Ein Spezialanfertigung beinhaltet keine weitere Funktionalität. Es wird nur eine Markierung (ähnlich wie bei BulkilyWarning) geschrieben. Sie können hier einen Link auf die E-Mail Seite setzen.
 Beispiel: 
specialPreparation = special preparation is possible! <A HREF="?id=999&tt_products=###PRODUCT_ID###">Order here</A>. 
