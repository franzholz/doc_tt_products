
.. _configuration-bill-and-delivery:

Bill and Delivery Configuration
-------------------------------

Setup only.

These are some settings if you want to use the feature of the creation and usage of bill and delivery sheets. 
They are generated in the folder :file:`fileadmin/data/bill`.


.. _configuration-bill-and-delivery-generation:

..  confval:: generation
    :name: generation type of a sheet
    :required: true
    :type: string

    Defines the behaviour for the generation of the bill/delivery sheet.
    *    auto: Generation will be done when the order is finalized.

    **Example:**

    ..  code-block:: typoscript
        :caption: automise generation of a bill without a delivery sheet
    
        plugin.tt_products.bill {
           generation = auto
        }
        
        plugin.tt_products.delivery {
           generation =
        }


.. _configuration-bill-and-delivery-type:

..  confval:: type
    :name: type of generation
    :required: true
    :type: string

    Type of bill or delivery
    *    html: HTML format
    *    pdf:  PDF format (extension 'fpdf' must have been installed.)


.. _configuration-bill-and-delivery-handle-lib:

..  confval:: handleLib
    :name: name of the PHP library  * PDF only
    :required: true
    :type: string / arry

    Name of the PHP library to handle the PDF generation. Currently you can set only :typoscript:`PhpWord` here.

    **Example:**

    ..  code-block:: typoscript
        :caption: automise generation of a bill without a delivery sheet
    
        bill.handleLib =  PhpWord
    
    array values:
    path ... file path to the library, relative to the TYPO3 directory
    rendererLibrary.path ... file path to the helper library to generate formats which the main library cannot handle

    **Example:**

    ..  code-block:: typoscript
        :caption: automatice generation of a bill by PhpWord by a master branch
        
        bill.handleLib = PhpWord
        bill.handleLib {
            path = PHPWord-master
            rendererLibrary {
               path = dompdf-0.6.1
            }
        }





