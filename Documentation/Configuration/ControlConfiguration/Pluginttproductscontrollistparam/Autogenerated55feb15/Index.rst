.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _configuration-control-configuration-pluginttproductscontrollistparam-autogenerated-55feb-15:

((auto-generated 55feb))
""""""""""""""""""""""""

=========  ====================  ======================================================  ========
Property:  Data type:            Description:                                            Default:
=========  ====================  ======================================================  ========
param      *array of string*     The behaviour of the control parameters can be changed
                                 here. This is needed e.g. if you have several product
                                 lists on the same page and you must turn some URL
                                 parameters off in order the lists are shown correctly
                                 and not show unwanted filter effects.

                                 use … if a parameter is to be activated (only for
                                 backPID)

                                 item … if a link parameter must always be generated
                                 from the item record (for cat)

                                 **Example:**

                                 param {

                                 ignore = pp

                                 use = backPID

                                 item = cat

                                 }
---------  --------------------  ------------------------------------------------------  --------
links      *array of typolink*   Give a configuration to the typolinks in the views. At
                                 first the subpart marker of the link must be given.

                                 **Example:**

                                 links {

                                 LINK_ITEM {

                                 useCacheHash = 0

                                 }

                                 }
=========  ====================  ======================================================  ========
