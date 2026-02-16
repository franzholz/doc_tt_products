

.. _configuration-form:

Form configuration
------------------

Setup only.

There are several forms which can be configured. Put the code after the form settings.


..  confval:: data
    :name: data of form
    :type: string/->stdWrap
    :default: *depends on codefield*

    This is the data that sets up the form.     

    *   name: name of the form. 
    *   If empty, default values will be used.

**Example:**

    ..  code-block:: typoscript
        :caption: searchform for the shop

        plugin.tt_products.form.SEARCH.data.name = ShopSearchForm


..  confval:: dataArray
    :name: data array
    :type: *[array of form elements]*
    :default: *depends on codefield*

    Every entry in the dataArray is numeric and has four
    main properties

    *   **label** 
    *   **type**
    *   **value**
    *   **required**

    'label' and 'value' have stdWrap properties.
    
    params ... Put additional parameters here.

    **Example:**

    ..  code-block:: typoscript
        :caption: select for for adddresses

        form.SELECTAD.dataArray {
            10.label =
            10.type = tt_products[address]=select
            10.params = onchange="submit();"
        }

      Enhancement for the selection of variants with selectColor, … specification.

    ..  code-block:: typoscript
        :caption: select for for adddresses

        form.ALL.selectColor.dataArray {
            10.params = onchange="submit();"
        }



-----------  ---------------------------  ------------------------------------------------------  -----------------------
image        IMAGE                        Image to display.
-----------  ---------------------------  ------------------------------------------------------  -----------------------
imageImport  *array of fields*            Fetch the images corresponding to values.

                                          **Example:**

                                          form.ALL.selectColor.imageImport {

                                          10.sql.where =

                                          10.prod.0 = earth-round.gif

                                          10.prod.1 = marigold-round.gif

                                          10.prod.2 = delft-round.gif

                                          }
-----------  ---------------------------  ------------------------------------------------------  -----------------------
layout       string                       This defines how the input field and other markers are
                                          placed towards each other.

                                          **Example:**

                                          This substitutes the "###INPUT###" with the input tag
                                          and the "###IMAGE###' with image data.

                                          <tr><td>###INPUT###</td><td>###IMAGE###</td></tr>
-----------  ---------------------------  ------------------------------------------------------  -----------------------
panel        *array of string*            only for ORDERS.

                                          Inserts a panel with various clickable buttons.

                                          **Example:**

                                          form.ORDERS.panel.input.10 {

                                          marker = button1

                                          label = Sort by title:

                                          name = Button1

                                          params =

                                          }
===========  ===========================  ======================================================  =======================
