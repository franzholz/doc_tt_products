.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _configuration-bill-and-delivery-pluginttproductsbill-pluginttproductsdelivery:

plugin.tt_products.delivery {
"""""""""""""""""""""""""""""

generation = 

}

==========  ==============  =====================================================  ========
Property:   Data type:      Description:                                           Default:
==========  ==============  =====================================================  ========
generation  string          Defines the behaviour for the generation of the
                            bill/delivery sheet.

                            auto … Generation will be done when the order is
                            finalized.
----------  --------------  -----------------------------------------------------  --------
type        string          Type of bill or delivery

                            html … HTML format

                            pdf … PDF format (extension 'fpdf' must have been
                            installed.)
----------  --------------  -----------------------------------------------------  --------
handleLib   string / array  **PDF ONLY:**

                            Name of the PHP library to handle the PDF generation.
                            Currently you can set only 'PhpWord' here.

                            **Example:**

                            bill.handleLib = PhpWord

                            array values:

                            path ... file path to the library, relative to the
                            TYPO3 directory

                            rendererLibrary.path ... file path to the helper
                            library to generate formats which the main library
                            cannot handle

                            <text:span text:style-name="T19"/>

                            **Example:**

                            bill.handleLib = PhpWord bill.handleLib {  path =
                            PHPWord-master

                            rendererLibrary {  <text:s text:c="4"/>path =
                            dompdf-0.6.1  } }

                            <text:span text:style-name="T27"/>
==========  ==============  =====================================================  ========
