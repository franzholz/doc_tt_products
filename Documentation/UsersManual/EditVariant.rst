

.. _users-manual-edit-variant:

Edit Variant
------------

You can add freely definable texts at the product level. You can enter a text 
or a number, which the basket ists a single porduct variant. You can change 
the number of a product variant in the same manner as with normal variants.

**Example:**
The products with uid 52 will have the entry field of a web domain. The web domain will be checked for validity. 

..  code-block:: typoscript
    :caption: Setup for Edit Variant

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
          error = <div class="errorbox"><div style="font-size:16px;"> Hint:</div> You must enter
          an internet <span style="color:red;">Domain</span> !</div></div>
        }
      }
    }

HTML:
~~~~~

See example HTML template EXT:tt_products/template/example_locallang_xml.html .
You must insert the following subpart Marker and text markers.

Single/List view of a product:

..  code-block:: html
    :caption: Template for Edit Variant

    <!-- ###edit_variant_domain### begin -->
    <b>###P_DOMAIN###</b> ###EDIT_VARIANT###
    <br />
    <!-- ###edit_variant_domain### end -->
    Basket view of product:
    <!-- ###edit_variant_domain### begin -->
    ###P_DOMAIN###
    ###EDIT_VARIANT###<br />
    <!-- ###edit_variant_domain### end -->
    Payment view of product:
    <td valign=top colspan=3><b>###PRODUCT_TITLE### <!-- ###edit_variant_domain### begin -->|
    ###EDIT_VARIANT###<!-- ###edit_variant_domain### end --></b>
    Order confirmation of product:
    <td valign=top><b>###PRODUCT_TITLE### <!-- ###edit_variant_domain### begin -->| ###EDIT_VARIANT###<!--
    ###edit_variant_domain### end --></b>
