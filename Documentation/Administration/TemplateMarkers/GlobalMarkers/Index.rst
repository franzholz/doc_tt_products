
.. _administration-global-markers:

global markers
^^^^^^^^^^^^^^

The global markers are allowed to be used within all subparts on any position. You can define your own markers.


	.. configuration_marks:

..  confval:: marks
    :name: global-marks
    :required: false
    :type: array

    self defined markers

	**Example:**
	
	..  code-block:: typoscript
	    :caption: define marker MY_MARKER
	
	    plugin.tt_products.marks {
	        my_marker = Come soon back to our shop!
	    }
	

	.. configuration_marker_file:

..  confval:: markerFile
    :name: global-marks
    :required: false
    :type: array

    **Constants:**:  :typoscript:`file.markerFile`
	 The marker file with the translations

	 **Example: (Setup)**:

	..  code-block:: html
	    :caption: use HTML template marker MY_MARKER
	
	    ###MY_MARKER###


	 **Example: (Setup)**:

	..  code-block:: typoscript
	    :caption: markerFile for translations
	
		plugin.tt_products.markerFile = EXT:myext/marker/fr.locallang.xlf

