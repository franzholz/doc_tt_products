.. _configuration-articles-products-categories-images-generate-path:

..  confval:: generatePath
    :name: path and file name generation for the images
    :required: true
    :type: array of string
    :default: fileadmin/img

    path to the image folders where the images for generateImage are located.
    Pairs of field names and the count of the first characters to be used
    to form the name of the image file.

    Pairs of field names and the count of the first characters to be used to
    form the name of the image file.
    *    type:     tablefields
    *    fieldname name of the table field

    **Example:**

    ..  code-block:: typoscript
        :caption: EXT:my_extension/ext_localconf.php

        ALL.generatePath {
            type = tablefields
            base = fileadmin/images
            field.itemnumber = 2
        }


.. _configuration-articles-products-categories-images-generate-image:

..  confval:: generateImage
    :name: image generation
    :required: true
    :type: array of string

    Pairs of field names and the count of the first characters to be used
    to form the name of the image file.

    *    type: tablefields, foreigntable (for field of another table)
    *    prefix ... a prefix to the image filename
         *field.fieldname ... name of the table field*
    *    separator ... separator in the filename between the
                matched beginning of the filename and the end part of the filename.
    *    table ... use another table and its configuration to get the image
    *    uid_local ... use the value of this local field of the current table
    *    uid_foreign ... use this field of the foreign table to find a match

    The file names will be like :file: 41000_1.jpg . A product will
    have multiple images if there are more files with a
    similar file name, e.g. :file: 41000_2.jpg  .

        **Example:**

    ..  code-block:: typoscript
        :caption: select the image by filenames

        ALL.generateImage {
            type = tablefields
            field.itemnumber = 6

            separator = _
        }

        ALL.generateImage {
            type = foreigntable
            table = tt_products_articles
            uid_local = uid
            uid_foreign = pid
            field.itemnumber = 6
            separator = _
        }


.. _configuration-articles-products-categories-images-image-marker:

..  confval:: imageMarker
    :name: image markers
    :required: true
    :type: array of string

    Defines how the marker for the image is composed. In this example image names like 30_P1_001.jpg can be
    used, where the second part :php:`P1` and the third part :php:`001` form the marker. So the marker will be
    :php:`###CATEGORY_IMAGE_P1_001###`.

    **Example:**

    ..  code-block:: typoscript
        :caption: select the image by filenames

        ALL.imageMarker {
            type = imagename
            parts = 2,3
        }


.. _configuration-articles-products-categories-images-limit:

..  confval:: limit
    :name: Max items displayed
    :required: true
    :type: int+
    :default: 50

   The maximum number of items displayed on a list view.


.. _configuration-articles-products-categories-images-limit-image:

..  confval:: limitImage
    :name:  Max image items displayed
    :required: true
    :type: int+
    :default: 1

   The maximum number of images for one item displayed on the view.

    **Example:**

    ..  code-block:: typoscript
        :caption: maximum of 10 images to be shown on all display views

         plugin.tt_products.conf.tt_products.ALL.limitImage = 10


.. _configuration-articles-products-categories-images-order-by:

..  confval:: orderBy
    :name: Max items displayed
    :required: true
    :type: string
    :default: sorting

    List of the fields by which the items will be ordered.



.. _configuration-articles-products-categories-images-fetch-image:

..  confval:: fetchImage
    :name:  fetch images from another table
    :required: true
    :type: int+
    :default: 1

    If set, the images for the output table are taken from the images of another table

    **Example:**

    ..  code-block:: typoscript
        :caption: fetch images from the table tt_content

        plugin.tt_products.conf.tt_products.ALL.fetchImage {
              type = foreigntable
              table = tt_content
        }


.. _configuration-articles-products-categories-images-language:

..  confval:: language
    :name:  language file for translation
    :required: false
    :type: array of string

    The name of a language file with translations from the default language into another language.

    *    type:
        *    csv: The values are separated by ';' and newline characters
        *    noTranslation: do not use the language overlay table
        *    field: the translation is in fields
        *    table: the translation overlay table

    *    file: Path and name of the file
    *    field: name of the field on left and new value on right side
    *    marker ... Like CSV, but markers inside of the database table contents are substituted


    **Example:**

    ..  code-block:: typoscript
        :caption: use csv file for translations

        [globalVar = GP:L = 1]
        plugin.tt_products.conf.tt_products_cat.ALL.language {
            type = csv
            file = fileadmin/data/EnglishCategories.csv
        }

        [GLOBAL]



    **Example:**

    ..  code-block:: typoscript
        :caption: use the subtitle for translations

        plugin.tt_products.conf.tt_products_cat.ALL.language {
            type = field
            field.title = subtitle
        }


.. _configuration-articles-products-categories-images-image:

..  confval:: image
    :name:  image cObject
    :required: false
    :type: IMAGE cObject

    Image is copied into the others via TypoScript and can be used for several code fields.


    **Example:**

    :php:`###PRODUCT_IMAGE1:M###` 

    ..  code-block:: typoscript
        :caption: Image cObect

        plugin.tt_products.conf.tt_products.ALL.image.m {
            wrap = |<br />
            file.maxW = 320
            file.maxH = 280
        }


.. _configuration-articles-products-categories-images-joined-images-wrap:

..  confval:: joinedImagesWrap
    :name:  image cObject
    :required: false
    :type: stdWrap

    Wrap around all images. separateImage must be 0. This will be wrapped around the 
    HTML output of the joined images.


    **Example:**

    ..  code-block:: typoscript
        :caption: joinedImagesWrap

        joinedImagesWrap.wrap = <div id=”myimageid”> |</div>


.. _configuration-articles-products-categories-images-filter:

..  confval:: filter
    :name:  filter on table records
    :required: false
    :type: *array of string*

    Use only table records which apply to a filter on a field or parameter base.
    *   param ... GET/PUT parameter (value: gp) or predefined
    *   regexp ... use a regular expression
    *   where ... use WHERE conditions

   field: name of the field on left and value on right side

    **Example:**

    ..  code-block:: typoscript
        :caption: joinedImagesWrap

        filter {
            regexp {
                field {
                    title = [:alpha:]+[:blank:]+1[:blank:]+
                }
            }
        }

        filter {
            where {
                field {
                    bargain = 1
                }
            }
        }

        filter {
             param {
                 cat = gp
             }
        }


   It will filter all records of the table to use only those where the title has characters and a 1 on the last position.


.. _configuration-articles-products-categories-images-urlparams:

..  confval:: urlparams
    :name:  tt_products URL parameter
    :required: false
    :type: string

    Comma separated list of tt_products URL parameters which must have a value. Otherwise no items will be displayed.
    Normally no products shall be shown below a category list when no category has been selected yet. If you leave this empty, 
    then all products will be listed in the list view when no category parameter is given and you have a category list view on the page.


.. _configuration-articles-products-categories-images-display-columns:

..  confval:: displayColumns
    :name:  Number of columns on the display
    :required: false
    :type: array

    You have to adapt your template using special template markers. The :php:`ITEM_SINGLE_PRE_HTML` 
    and :php:`ITEM_SINGLE_POST_HTML` must surround your :php:`<TD>-</TD>` tags, so the table 
    will be created correctly. The first number is the order in the category hierarchy.

    **Example:**

    ..  code-block:: typoscript
        :caption: display columns 3 on first category level

        displayColumns {
            1 = 3
        }


    **Example:**

    ..  code-block:: html
        :caption: HTML part to support columns

        <!-- ###ITEM_SINGLE### begin--> 
         ###ITEM_SINGLE_PRE_HTML### 
         <td height="150" bgcolor="###GC1###" valign="bottom" align="center"> 
         <!--###LINK_ITEM###--> ###GW1B###<b>###PRODUCT_TITLE###</b>###GW1E### 
         <!--###LINK_ITEM###--> 
         <br> 
         ###PRODUCT_IMAGE### <br> 
         ###GW1B### item count: ###GW1E### <INPUT size="3" maxlength="4" type="text" name="###FIELD_NAME###" value="###FIELD_QTY###"> 
         <p> </td> 
         ###ITEM_SINGLE_POST_HTML### 
         <!-- ###ITEM_SINGLE### end -->



.. _configuration-articles-products-categories-images-display-header:

..  confval:: displayHeader
    :name:  Header of the display
    :required: false
    :type: string

    Each list view of items can have a header for the category. Normally the header is shown and 
    after it all items of this category. But sometimes you want to show the header always with each product.

    values:
    *    always:  The category and product block is repeated always with each product*    
    *    current: The current category is taken and not a second category


    **Example:**

    ..  code-block:: typoscript
        :caption: display columns 3 on first category level

        displayHeader {
            1 = always
        }



""""""""""""""""""""""""

=========================  ===========================  =======================================================  ========================
Property:                  Data type:                   Description:                                             Default:
=========================  ===========================  =======================================================  ========================



-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
requiredFields             string                       Fields which must be read in from the database table
                                                        even if not marker for them is found in the used
                                                        template subpart.
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
special                    *array of string*            Special treatment for the table. Only used with
                                                        category parameters.

                                                        **Example:**

                                                        special {

                                                        all = 1

                                                        }

                                                        Table tt_products_cat:

                                                        This will display the products of all categories if the
                                                        parameter 'tt_products[cat] = 1' is max_note_lengthset.
                                                        So instead of listing the products of category 1 all
                                                        products of all categories will be listed.
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
onlyChildsOfCurrent        boolean                      If set, the child items (e.g. subcategories) will only
                                                        be displayed for the current item (category).
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
rootChildsOfCurrent        boolean                      If set, the child items of the currently selected item
                                                        will be shown on the root level.
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
field                      *array of cObject*           Use cObjects for the display of some fields. By default
                                                        the field's contents are printed as is. Only the image
                                                        field is used to draw an IMAGE.

                                                        Use ”untouched=1” to get the original value (might
                                                        be needed for the note field).

                                                        **Example:**

                                                        field {

                                                        title = COA

                                                        title {

                                                        untouched = 0

                                                        10 = TEXT

                                                        10.value = ###PRODUCT_TITLE### in sizes
                                                        ###PRODUCT_SIZE###

                                                        10.wrap = Title: - | -

                                                        }

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
fieldIndex                 int+/**Array of integers**   Index for fields with multiple contents. This is only
                                                        used to define which article images shall overwrite
                                                        which products images. On the left side you have the
                                                        index of the image (starting with 1) and on the right
                                                        the destinamtion index of the image. The marker for the
                                                        first image would be ###<TABLESHORT>_IMAGE2###.

                                                        fieldIndex {

                                                        image {

                                                        1 = 2

                                                        }

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
controlFields              *array of string*            Control fields                                           newItemDays -> starttime

                                                        newitemdays ... name of the field to use with the
                                                        newItemDays function

                                                        **Example:**

                                                        controlFields {

                                                        newItemDays = starttime

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
displayFields              *array of cObject*           Display fields

                                                        Definitions how to display some fields.

                                                        **Example:**

                                                        displayFields {

                                                        note = RTEcssText

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
fieldLink                  *array of typolink*          The definition for the field links.

                                                        **Example:**

                                                        conf.tt_products.ALL {

                                                        fieldLink {

                                                        datasheet.ATagParams=class="datasheetClass"

                                                        }

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
fe_users                   *array of string*            FE user fields for limitations

                                                        period

                                                        date_of_birth.period ... This period of time since the
                                                        FE user's birth must have been passed, if products with
                                                        uid 12 oder 24 are in the basket.

                                                        **Example:**

                                                        fe_users {

                                                        date_of_birth.period.y = 12

                                                        where = uid IN (12, 24)

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
view                       *array of string*            code view configuration

                                                        sortselect … array of form elements

                                                        filterselect … filtering

                                                        **Example:**

                                                        view.sortSelect {

                                                        1 {

                                                        label = sort by

                                                        type = select

                                                        attribute {

                                                        onchange=submit();

                                                        }

                                                        valueArray {

                                                        10.label = title

                                                        10.value = 1

                                                        10.field = title

                                                        }

                                                        }

                                                        }

                                                        browser … configuration for the record browser with
                                                        types div2007  showFirstLast … if the first and last
                                                        link is shown.

                                                        **Example:**

                                                        view.browser = div2007

                                                        view.browser {

                                                        browseLinksWrap = <div class="browseLinksWrap">|</div>

                                                        disabledLinkWrap = <span
                                                        class="disabledLinkWrap">|</span>

                                                        inactiveLinkWrap = <span
                                                        class="inactiveLinkWrap">|</span>

                                                        activeLinkWrap = <span class="activeLinkWrap">|</span>

                                                        disabledNextLinkWrap = <span
                                                        class="pagination-next">|</span>

                                                        inactiveNextLinkWrap = <span
                                                        class="pagination-next">|</span>

                                                        disabledPreviousLinkWrap = <span
                                                        class="pagination-previous">|</span>

                                                        inactivePreviousLinkWrapn = <span
                                                        class="pagination-previous">|</span>

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
subpart                    *array of string*            This determines the behaviour of the display of the
                                                        subparts.

                                                        show … default. if a record for a default category
                                                        must be shown even if no product is found (for cat).
                                                        This is used if you have a default category on each
                                                        page and the category header should always be shown.

                                                        **Example:**

                                                        subpart.ITEM_CATEGORY {

                                                        show = default

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
marks                      array                        Self defined markers for the record.

                                                        **Example:**

                                                        marks {

                                                        mymarker = COA

                                                        mymarker {

                                                        10 = TEXT

                                                        10.value = ###PRODUCT_TITLE### in sizes
                                                        ###PRODUCT_SIZE###

                                                        10.wrap = Title: - | -

                                                        }

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
tagmark                    array                        defines how the marker ###CATALLTAGS### is filled with
                                                        the tags of the categories.
(only categories in LIST)
                                                        **Example:**

                                                        tagmark {

                                                        parents = 1

                                                        prefix = cat

                                                        }
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
hideID                     int+                         The ID of the item for which the whole shop plugin gets
                                                        hidden (invisible). Use this with care! The shop plugin
                                                        will not be shown in the FE if the table's url
                                                        parameter is set to one of these elements of the comma
                                                        separated list of values.
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
hideZero                   boolean                      If true then a plugin is hidden if no category
                                                        parameter with a uid is given.
(only categories)
-------------------------  ---------------------------  -------------------------------------------------------  ------------------------
hideChildless              boolean                      If true then a plugin is hidden if a category parameter
                                                        with a uid is given which has no child category. This
(only categories)                                       can only be used with hierarchical categories.
=========================  ===========================  =======================================================  ========================
