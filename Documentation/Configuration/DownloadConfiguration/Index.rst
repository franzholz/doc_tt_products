
.. _configuration-download:

Download configuration
----------------------

Setup only.

You can configure the generation of downloads here.


.. _configuration-download-where:

..  confval:: download.where
    :name: SQL where for download
    :required: false
    :type: array of string


    **Example:**

    ..  code-block:: typoscript
        :caption: download where condition

        plugin.tt_products.download.10 {
            where.tt_products = uid = 12
        }



    SQL where condition about the table tt_products.

    **Example:**

    ..  code-block:: typoscript
        :caption: for itemnumbers 3422, 3423 and 3424

        download.10.where {
            tt_products = itemnumber IN (3422, 3423, 3424)
        }


.. _configuration-download-generated-path:

..  confval:: generatePath
    :name: generate path
    :required: false
    :type: array of string

    path to the download folders where the downloads for
    :typoscript:`generateDownload` are located.

    Pairs of field names and the count of the first characters to be used
    to form the name of the download folder.
    *    type: tablefields
    *    *fieldname*: name of the table field


    **Example:**

    ..  code-block:: typoscript
        :caption: EXT:my_extension/ext_localconf.php

        download.10.generatePath {
            type = tablefields
            base = fileadmin/downloads
            field.itemnumber = 20
        }


.. _configuration-download-generate-download:

..  confval:: generateDownload
    :name: generate download file names
    :required: false
    :type: array of string

    Pairs of field names and the count of the first characters to be used to form the name of the download file.

    *    type: tablefields, foreigntable (for field of another table)
    *    field.fieldname: name of the table field
    *    table: use another table and its configuration to get the image
    *    uid_local: use the value of this local field of the current table
    *    uid_foreign: use this field of the foreign table to find a match

    **Example:**

    ..  code-block:: typoscript
        :caption: EXT:my_extension/ext_localconf.php

        DOWNLOAD.generateDownload {
            type = tablefields
            field.itemnumber = 6
        }

        DOWNLOAD.generateDownload {
            type = foreigntable
            table = tt_products_articles
            uid_local = uid
            uid_foreign = pid
            field.itemnumber = 6
        }

