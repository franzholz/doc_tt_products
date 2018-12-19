.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administration-template-markers-global-markers-pluginttproductsmarks:

: ::

	plugin.tt_products.marks {
	  my_marker = Come soon back to our shop!
	}


###MY_MARKER###

.. container:: ts-properties

	=========================== ===================================== ====================
	Property                    Data type                             Default
	=========================== ===================================== ====================
	marks_
	markerFile_
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
         :typoscript:`plugin.tt_products.markerFile = EXT:myext/marker/fr.locallang.xml` t3tsref:data-type-resource
