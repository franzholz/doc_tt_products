



.. _administration-template-markers-area-markers:

Bereichsmarker:
^^^^^^^^^^^^^^^

========================================  =======================================================  =====
Marker:                                   Description:                                             Area:
========================================  =======================================================  =====
BASKET_TEMPLATE                           Ansicht des Warenkorbs mit zu bestellenden Produkten     top
----------------------------------------  -------------------------------------------------------  -----
BASKET_INFO_TEMPLATE                      Das wird normalerweise dazu verwendet, damit die Kunden  top
                                          ihre Adressdaten außerhalb des Warenkorbs eingeben.
                                          Es hat dieselben Eigenschaften wie  BASKET_TEMPLATE.
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERCONFIRMATION_TEMPLATE         Die letzte Seite, nach Ausführung der Bestellung         top
                                          Wenn PIDthanks gesetzt ist, wird das nicht für die 
                                          Anzeige benutzt.
                                          Aber diese Teile werden immer für die Benachrichtigungs
                                          E-Mails verwendet, wenn HTML-E-Mails aktiviert sind.
                                          :typoscript:`orderEmail_htmlmail = 1` 

                                          siehe: BASKET_ORDERTHANKS_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERCONFIRMATION_NOSAVE_TEMPLATE  Diese HTML-Daten werden angezeigt, nachdem die           down
                                          Bestellung in der Datenbank gespeichert worden ist.
----------------------------------------  -------------------------------------------------------  -----
BASKET_ORDERTHANKS_TEMPLATE               Used for displaying a thanks page, when PIDthanks is     top
                                          set. This will not be used in the HTML emails.b

                                          see BASKET_ORDERCONFIRMATION_TEMPLATE
----------------------------------------  -------------------------------------------------------  -----
BASKET_OVERVIEW_EMPTY                     Meldung 'Ihr Warenkorb ist noch leer.' für OVERVIEW      top
----------------------------------------  -------------------------------------------------------  -----
BASKET_OVERVIEW_TEMPLATE                  Für die Mini-Warenkorb Anzeige                           top
----------------------------------------  -------------------------------------------------------  -----
BASKET_PAYMENT_TEMPLATE                   Überprüfung der Adressdaten und Bezahl-Gateway           top
                                          Verbindung
----------------------------------------  -------------------------------------------------------  -----
BASKET_REQUIRED_INFO_MISSING              Warnung für fehlende Adressdaten                         top
----------------------------------------  -------------------------------------------------------  -----
BASKET_TEMPLATE_EMPTY                     Meldung 'Ihr Warenkorb ist noch leer.'                   top
----------------------------------------  -------------------------------------------------------  -----
BASKET_TEMPLATE_NOT_LOGGED_IN             Fehlermeldung, dass sich Benutzer nicht eingeloggt hat   top
----------------------------------------  -------------------------------------------------------  -----
BILL_TEMPLATE                             zur Erzeugung der Rechnung                               top
----------------------------------------  -------------------------------------------------------  -----
DELIVERY_TEMPLATE                         Erzeugung der Datei des Lieferscheins                    top
----------------------------------------  -------------------------------------------------------  -----
EMAIL_PLAINTEXT_TEMPLATE                  Text für die E-Mail Benachrichtigung                     top

                                          Die erste Zeile wird für das Betreff Feld verwendet.
----------------------------------------  -------------------------------------------------------  -----
EMAIL_NEWUSER_TEMPLATE                    E-Mail nach der Erzeugung eines Frontend Benutzers       top
----------------------------------------  -------------------------------------------------------  -----
ITEM_LIST_TEMPLATE                        Auflistung der Produkte auf der Startsetite LIST         top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SEARCH                                                                                        top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SEARCH_EMPTY                                                                                  top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY                       single                                                   top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY_NOT_IN_STOCK          single display when item is not in stock                 top
----------------------------------------  -------------------------------------------------------  -----
ITEM_SINGLE_DISPLAY_RECORDINSERT          see displayCurrentRecord: render the $cObj->data         top
----------------------------------------  -------------------------------------------------------  -----
MEMO_TEMPLATE                             memorization of items                                    top 
----------------------------------------  -------------------------------------------------------  -----
MEMO_NOT_LOGGED_IN                        error message that use has not been logged in for MEMO   top
----------------------------------------  -------------------------------------------------------  -----
ORDERS_LIST_TEMPLATE                      display of the order list                                top
----------------------------------------  -------------------------------------------------------  -----
TRACKING_ENTER_NUMBER                                                                              top
----------------------------------------  -------------------------------------------------------  -----
TRACKING_WRONG_NUMBER                                                                              top
========================================  =======================================================  =====



.. _administration-template-area-markers-datasheet-for-the-product:

datasheet for the product
"""""""""""""""""""""""""

**Example**  for a wrap:

..  code-block:: html
    :caption: wrap inside of a HTML template

    <!-- ###PRODUCT_LINK_DATASHEET### begin --> datasheet for the product <!-- ###PRODUCT_LINK_DATASHEET### end -->


