
.. _administration-template-markers-global-markers:

global markers
^^^^^^^^^^^^^^

The global markers are allowed to be used within all subparts. You can even define your own markers.

**Example:**

..  code-block:: typoscript
    :caption: define marker MY_MARKER

    plugin.tt_products.marks {
        my_marker = Come soon back to our shop!
    }


..  code-block:: html
    :caption: use HTML template marker MY_MARKER

    ###MY_MARKER###


.. _administration-template-markers-global-markers-pluginttproductsmarks:

.. container:: ts-properties

	=========================== ===================================== ====================
	Property                    Data type                             Default
	=========================== ===================================== ====================
	marks_
	markerFile_
	Constants: file.markerFile
	=========================== ===================================== ====================

	.. _tsMarks:

marks
"""""
.. container:: table-row

   Property
         marks
   Data type
         array
   Description
         self defined markers


	.. _tsMarkerFile:

markerFile
""""""""""
.. container:: table-row

   Property
         markerFile **Constants:** file.markerFile
   Data type
         resource / **array of string**
   Description
         The marker file with the translations. (v2.9)
         **Example: (Setup)**:
         :typoscript:`plugin.tt_products.markerFile = EXT:myext/marker/fr.locallang.xlf` t3tsref:data-type-resource
