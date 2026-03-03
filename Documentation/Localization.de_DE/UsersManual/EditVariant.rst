

.. _users-manual-edit-variant:

Edit Variante
-------------

Sie können auf der Produkt Ebene Eingabefelder als frei definierbare Texte hinzufügen. Sie können einen Text
oder einen Zahlwert eingeben, der im Warenkorb einzeln als Produkt Variante aufgelistet wird. Sie können die
Anzahl einer Produkt Variante so wie jene der normalen Varianten einzeln verändern.

**Beispiel:**
Das Produkt mit der uid 52 wird ein Eingabefeld einer Web Domäne erhalten. Die Web Domäne wird auf
Gültigkeit überprüft.

..  code-block:: typoscript
    :caption: Setup für Edit Variante

    plugin.tt_products {
      ### DOMAIN
      marks {
        p_domain = Domäne
      }
      editVariant {
        10 {
          sql.where = uid = 52
          suffix = domain
          evalValues {
            1 = required, wwwURL
          }
          error = <div class="fehlerbox"><div style="font-size:16px;"> Hinweis:</div> Sie müssen
          eine Internet <span style="color:red;">Domäne</span> angeben.</div></div>
        }
      }
    }

HTML:
~~~~~

Siehe Beispiel HTML Template EXT:tt_products/template/example_locallang_xml.html .
Sie müssen folgende Subpart Markers und Text Marker einfügen.

Einzel/Listenansicht des Produktes:

..  code-block:: html
    :caption: Template for Edit Variant

    <!-- ###edit_variant_domain### begin -->
    <b>###P_DOMAIN###</b> ###EDIT_VARIANT###
    <br />
    <!-- ###edit_variant_domain### end -->
    Warenkorb Ansicht des Produktes:
    <!-- ###edit_variant_domain### begin -->
    ###P_DOMAIN###
    ###EDIT_VARIANT###<br />
    <!-- ###edit_variant_domain### end -->
    Payment Ansicht des Produktes:
    <td valign=top colspan=3><b>###PRODUCT_TITLE### <!-- ###edit_variant_domain### begin -->|
    ###EDIT_VARIANT###<!-- ###edit_variant_domain### end --></b>
    Bestell Bestätigung für ein Produkt:
    <td valign=top><b>###PRODUCT_TITLE### <!-- ###edit_variant_domain### begin -->| ###EDIT_VARIANT###<!--
    ###edit_variant_domain### end --></b>
