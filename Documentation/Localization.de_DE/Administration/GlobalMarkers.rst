
.. _administration-global-markers:

globale Markers
^^^^^^^^^^^^^^^

Die globalen Marker sind für alle Subparts an jeder Position erlaubt. Es können eigene Marker definiert werden.


	.. configuration_marks:

..  confval:: marks
    :name: global marks
    :required: false
    :type: array

    self defined markers

	**Beispiel:**
	
	..  code-block:: typoscript
	    :caption: konfiguriere Marker MY_MARKER
	
	    plugin.tt_products.marks {
	        my_marker = Kaufen Sie bald wieder bei uns ein!
	    }
	

	.. configuration_marker_file:

..  confval:: markerFile
    :name: global marker file
    :required: false
    :type: array

    **Constants:**  :typoscript:`file.markerFile`
	 Die Marker Datei mit den Übersetzungen

	 **Beispiel: (Setup)**:

	..  code-block:: html
	    :caption: verwende HTML Templat Marker MY_MARKER
	
	    ###MY_MARKER###


	**Example: (Setup)**:

	..  code-block:: typoscript
	    :caption: markerFile Datei für Übersetzungen
	
		plugin.tt_products.markerFile = EXT:myext/marker/fr.locallang.xlf

