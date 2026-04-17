
.. _administration-template-markers-single-markers:

Einzelmarker
^^^^^^^^^^^^

=====================================================  =============  ==============================================================================  ==========================================
Marker:                                                Type:          Description:                                                                    Area:
=====================================================  =============  ==============================================================================  ==========================================
BROWSE_LINKS                                                          Zum Durchblättern über mehrere Seiten in der
Anzeige
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
DELIVERYCOSTS                                          value          Summe der Lieferkosten und Kosten für die Bezahlung
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
DELIVERY\_... NOTE NOTE_DISPLAY DESIRED_DATE            value         Siehe auch PERSON\_...                                                           BASKET_INFO_TEMPLATE

                                                                      Eingabefeld Bemerkung zur Bestellung Ausgabe Bemerkung mit <br> für den
                                                                      Zeilenumbruch 
                                                                      gewünschtes Lieferdatum
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
EXTERNAL_COBJECT                                       value          zusätzliches Cobject
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
FIELD_NAME                                             value in form  Name eines Feldes in einem HTML Formular
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
FIELD_NAME_BASKET                                      value in form  Die Daten des Warenkorbs in verschlüsselter Form.
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
GC1, GC2, GC3                                          value          globale Farben                                                                  all
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
GW1B, GW2B, GW1E, GW2E                                 wrap           globale Wraps (HTML-Umrandungen)                                                all
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PRICE_TAX                                              value          price/price2 des Produkts, mit oder ohne oder nur SteuerT                       ITEM_SINGLE

PRICE_NO_TAX

PRICE_ONLY_TAX

PRICE2_TAX

PRICE2_NO_TAX

PRICE2_ONLY_TAX
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PRICE_TOTAL_TAX                                        value          Gesamtbetrag aller Produkte inkl. Kosten für                                    all

PRICE_TOTAL_NO_TAX

PRICE_TOTAL_ONLY_TAX
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PRICE_GOODSTOTAL_TAX                                   value          Gesamtsummer der Produkte aus price oder price2                                 all

PRICE_GOODSTOTAL_NO_TAX                                               Bezahlsystem und Versand

PRICE2_GOODSTOTAL_TAX

PRICE2_GOODSTOTAL_NO_TAX
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
LINK_BASKET                                            wrap           Link auf die Warenkorb Seite                                                    basket
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PRODUCT_LINK_DATASHEET                                 wrap           Link auf die Datenblatt Datei, die in der Konstante
                                                                      file.datasheetIcon gesetzt worden ist.

                                                                      **Beispiel** :

                                                                      <!-- ###PRODUCT_LINK_DATASHEET1### begin -->

                                                                      ###GW1B######P_DATASHEET### 1: ###GW1E### <font
                                                                      size="1"><b><i>###PRODUCT_DATASHEET1###</i></b></font>###ICON_DATASHEET###</p>

                                                                      <!-- ###PRODUCT_LINK_DATASHEET1### end -->

                                                                      <!-- ###PRODUCT_LINK_DATASHEET2### begin -->

                                                                      ###GW1B######P_DATASHEET### 2: ###GW1E### <font
                                                                      size="1"><b><i>###PRODUCT_DATASHEET2###</i></b></font>###ICON_DATASHEET###</p>

                                                                      <!-- ###PRODUCT_LINK_DATASHEET2### end -->
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
ORDER_STATUS_TIME,                                     value          Daten zur Bestellung                                                            TRACKING_DISPLAY_INFO

ORDER_STATUS, ORDER_STATUS_INFO, ORDER_STATUS_COMMENT
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PERSON\_... NAME, ADDRESS, TELEPHONE,                  value          Felder für die Adressinformation
                                                                      Präfix PERSON\_... der Kunde der Bestellung
FAX, EMAIL,
                                                                      DELIVERY\_... der Empfänger der Bestellung

CITY,

ZIP,

STATE,

COUNTRY
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
PID_TRACKING                                           value          Die Seitennummer für den Rückverfolgung über den
                                                                      Status der Bestellung
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
STATUS_CODE_60                                         wrap           wird verwendet, damit das Zusenden von E-Mails an den Empfänger eines           TRACKING_DISPLAY_INFO
                                                                      Geschenkgutscheins erst nach der Bezahlung erscheint
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
STATUS_OPTIONS                                         value          Auswahlmenü für Zustände in der Bestellungsverwaltung                           ADMIN_CONTROL inside TRACKING_DISPLAY_INFO
-----------------------------------------------------  -------------  ------------------------------------------------------------------------------  ------------------------------------------
SHOPADMIN_EMAIL                                        value          E-Mail-Adresse des Shop-Adminstrators                                           all
=====================================================  =============  ==============================================================================  ==========================================
