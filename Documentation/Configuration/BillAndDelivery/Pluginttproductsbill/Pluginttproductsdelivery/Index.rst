.. _configuration-billdelivery-generation:

..  confval:: configuration-billdelivery-generation
    :name: bill or delivery generation
    :required: true
    :type: string

    Defines the behaviour for the generation of the bill/delivery sheet.
        * auto: Generation will be done when the order is finalized.



==========  ==============  =====================================================  ========
Property:   Data type:      Description:                                           Default:
==========  ==============  =====================================================  ========

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
