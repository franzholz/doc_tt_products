
.. _administration-global-markers:

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



+++++++++++++++++++++++++++++++++++
	.. configuration_marks:

..  confval:: marks
    :name: global-marks
    :required: false
    :type: array

    self defined markers


	.. configuration_marker_file:

..  confval:: markerFile
    :name: global-marks
    :required: false
    :type: array

    **Constants:**:  :typoscript:`file.markerFile`
	 The marker file with the translations

	 **Example: (Setup)**:
	 :typoscript:`plugin.tt_products.markerFile = EXT:myext/marker/fr.locallang.xlf` t3tsref:data-type-resource

