
.. _configuration-articles-products-categories-images:

Articles, Products, Categories, Pages, Addresses and Images
-----------------------------------------------------------
Setup only.

The last but one/two value will be the name of the view. :typoscript:`ALL` means it is valid for all views.

Views correspond to the code field:

*   :typoscript:`SINGLE`
*   :typoscript:`LIST`
*   :typoscript:`BASKET`

Additional possible values are

*   :typoscript:`EMAIL`
*   :typoscript:`PAYMENT`
*   :typoscript:`LISTRELATED` (:typoscript:`LIST`  for related products)


**Example:**

..  code-block:: typoscript
    :caption: generatePath

   plugin.tt_products {
       conf {
           tt_products_articles.LIST.generatePath.base = fileadmin/images
           tt_products.LIST.orderBy = sorting
       }
   }


.. _configuration-articles-products-categories-images-generate-path:

generatePath
~~~~~~~~~~~~

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
    *    type:      tablefields
    *    fieldname: name of the table field


    **Example:**

    ..  code-block:: typoscript
        :caption: generatePath for all codes

        ALL.generatePath {
            type = tablefields
            base = fileadmin/images
            field.itemnumber = 2
        }


.. _configuration-articles-products-categories-images-generate-image:

generateImage
~~~~~~~~~~~~~

..  confval:: generateImage
    :name: image generation
    :required: true
    :type: array of string

    Pairs of field names and the count of the first characters to be used
    to form the name of the image file.

    *   :typoscript:`type`:      tablefields, foreigntable (for field of another table)
    *   :typoscript:`prefix`:    a prefix to the image filename
    *   :typoscript:`field.`*fieldname*: name of the *table field*
    *   :typoscript:`separator`:  separator in the filename between the
                matched beginning of the filename and the end part of the filename.
    *   :typoscript:`table`:       use another table and its configuration to get the image
    *   :typoscript:`uid_local`:   use the value of this local field of the current table
    *   :typoscript:`uid_foreign`: use this field of the foreign table to find a match

    The file names will be like :file:`41000_1.jpg`. A product will
    have multiple images if there are more files with a
    similar file name, e.g. :file:`41000_2.jpg` .


    **Example:**

    ..  code-block:: typoscript
        :caption: select the image by filenames

        ALL.generateImage {
            type = tablefields
            field.itemnumber = 6

            separator = _
        }


    **Example:**

    ..  code-block:: typoscript
        :caption: select the image path by the article table

        ALL.generateImage {
            type = foreigntable
            table = tt_products_articles
            uid_local = uid
            uid_foreign = pid
            field.itemnumber = 6
            separator = _
        }


.. _configuration-articles-products-categories-images-image-marker:

imageMarker
~~~~~~~~~~~

..  confval:: imageMarker
    :name: image markers
    :required: true
    :type: array of string

    Defines how the marker for the image is composed. In this example image names like :file:`30_P1_001.jpg` can be
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

limit
~~~~~

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

orderBy
~~~~~~~

..  confval:: orderBy
    :name: SQL Order By
    :required: true
    :type: string
    :default: sorting

    List of the fields by which the items will be ordered.


.. _configuration-articles-products-categories-images-fetch-image:

fetchImage
~~~~~~~~~~

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

language
~~~~~~~~

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

image
~~~~~

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

joinedImagesWrap
~~~~~~~~~~~~~~~~

..  confval:: joinedImagesWrap
    :name:  wrap around joined images
    :required: false
    :type: stdWrap

    Wrap around all images. separateImage must be 0. This will be wrapped around the
    HTML output of the joined images.


    **Example:**

    ..  code-block:: typoscript
        :caption: joinedImagesWrap

        joinedImagesWrap.wrap = <div id=”myimageid”> |</div>


.. _configuration-articles-products-categories-images-filter:

filter
~~~~~~

..  confval:: filter
    :name:  filter on table records
    :required: false
    :type: *array of string*

        Use only table records which apply to a filter on a field or parameter base.
        *   :typoscript:`param`:  GET/PUT parameter (value: gp) or predefined
        *   :typoscript:`regexp`: use a regular expression
        *   :typoscript:`where`:  use WHERE conditions
        *   :typoscript:`field`:  name of the field on left and value on right side


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

urlparams
~~~~~~~~~

..  confval:: urlparams
    :name:  tt_products URL parameter
    :required: false
    :type: string

    Comma separated list of tt_products URL parameters which must have a value. Otherwise no items will be displayed.
    Normally no products shall be shown below a category list when no category has been selected yet. If you leave this empty,
    then all products will be listed in the list view when no category parameter is given and you have a category list view on the page.


.. _configuration-articles-products-categories-images-display-columns:

displayColumns
~~~~~~~~~~~~~~

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

displayHeader
~~~~~~~~~~~~~

..  confval:: displayHeader
    :name:  Header of the display
    :required: false
    :type: string

    Each list view of items can have a header for the category. Normally the header is shown and
    after it all items of this category. But sometimes you want to show the header always with each product.

    values:
    *    :typoscript:`always`:  The category and product block is repeated always with each product*
    *    :typoscript:`current`: The current category is taken and not a second category


    **Example:**

    ..  code-block:: typoscript
        :caption: display columns 3 on first category level

        displayHeader {
            1 = always
        }


.. _configuration-articles-products-categories-images-required-fields:

requiredFields
~~~~~~~~~~~~~~

..  confval:: requiredFields
    :name:  required fields for the database tables in list views
    :required: false
    :type: string

    Fields which must be read in from the database table even if not marker for them is found in the used template subpart.


.. _configuration-articles-products-categories-images-special:

special
~~~~~~~

..  confval:: special
    :name:  special treatment
    :required: false
    :type: *array of string*

    Special treatment for the table. Only used with category parameters.
    *   :typoscript:`all`: This uid stands for all uids. 'all=all' means that all uids are always allowed. The tt_products[cat] parameter is ignored.
    *   :typoscript:`no`:  This uid shall never be considered
    *   *field*: name of the field on left and value on right side


    **Example:**

    ..  code-block:: typoscript
        :caption: joinedImagesWrap

        special {
            all = 1
        }


    Table :php:`tt_products_cat`:
    This will display the products of all categories if the parameter :php:`tt_products[cat] = 1'`is :typoscript:`max_note_lengthset`.
    So instead of listing the products of category 1 all products of all categories will be listed.


.. _configuration-articles-products-categories-images-only-childs-of-current:

onlyChildsOfCurrent
~~~~~~~~~~~~~~~~~~~

..  confval:: onlyChildsOfCurrent
    :name:  show only the childs of the current category
    :required: false
    :type: boolean

    If set, the child items (e.g. subcategories) will only be displayed for the current item (category).


.. _configuration-articles-products-categories-images-root-childs-of-current:

rootChildsOfCurrent
~~~~~~~~~~~~~~~~~~~

..  confval:: rootChildsOfCurrent
    :name:  show only the childs of the root categories
    :required: false
    :type: boolean

    If set, the child items of the currently selected item
    will be shown on the root level.


.. _configuration-articles-products-categories-images-field:

field
~~~~~

..  confval:: field
    :name:  cObject IMAGE for a field
    :required: false
    :type: *array of cObject*

    Use :php:`cObjects` for the display of some fields. By default the field's contents are printed as is.
    Only the image field is used to draw an :php:`IMAGE`. Use :typoscript:`untouched=1` to get the original value
    (might be needed for the note field).

    **Example:**

    ..  code-block:: typoscript
        :caption: field

        field {
            title = COA
            title {
                untouched = 0
                10 = TEXT
                10.value = ###PRODUCT_TITLE###  in sizes  ###PRODUCT_SIZE###
                10.wrap = Title: - | -
            }
        }


.. _configuration-articles-products-categories-images-control-fields:

controlFields
~~~~~~~~~~~~~

..  confval:: controlFields
    :name:  use fields for control
    :required: false
    :type: *array of string*
    :default: newItemDays -> starttime

    newitemdays ... name of the field to use with the newItemDays function

    **Example:**

    ..  code-block:: typoscript
        :caption: field

        controlFields {
            newItemDays = starttime
        }


.. _configuration-articles-products-categories-images-display-fields:

displayFields
~~~~~~~~~~~~~

..  confval:: displayFields
    :name:  display configuration for fields
    :required: false
    :type: *array of string*

    Definitions how to display some fields.


    **Example:**

    ..  code-block:: typoscript
        :caption: field

        displayFields {
            note = RTEcssText
        }


.. _configuration-articles-products-categories-images-field-link:

fieldLink
~~~~~~~~~

..  confval:: fieldLink
    :name:  The definition for the field links
    :required: false
    :type: *array of typolink*


    **Example:**

    ..  code-block:: typoscript
        :caption: field

        conf.tt_products.ALL {
            fieldLink {
                datasheet.ATagParams=class="datasheetClass"
            }
        }


.. _configuration-articles-products-categories-images-control-feusers:

fe_users
~~~~~~~~

..  confval:: fe_users
    :name:  FE user fields for limitations
    :required: false
    :type: *array of string*

    date_of_birth.period: This period of time since the FE user's birth must have been passed,
        if products with uid 12 oder 24 are in the basket.

    **Example:**

    ..  code-block:: typoscript
        :caption: field

        fe_users {
            date_of_birth.period.y = 12
            where = uid IN (12, 24)
        }


.. _configuration-articles-products-categories-images-view:

view
~~~~

..  confval:: view
    :name:  code view configuration
    :required: false
    :type: *array of string*

    *    :typoscript:`sortselect`:   array of form elements
    *    :typoscript:`filterselect`: filtering
    *    :typoscript:`browser`:       configuration for the record browser with types div2007
    *    :typoscript:`showFirstLast`: if the first and last link is shown.


    **Example:**

    ..  code-block:: typoscript
        :caption: field

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


    **Example:**

    ..  code-block:: typoscript
        :caption: field

        view.browser = div2007
        view.browser {
            browseLinksWrap = <div class="browseLinksWrap">|</div>
            disabledLinkWrap = <span class="disabledLinkWrap">|</span>
            inactiveLinkWrap = <span class="inactiveLinkWrap">|</span>
            activeLinkWrap = <span class="activeLinkWrap">|</span>
            disabledNextLinkWrap = <span class="pagination-next">|</span>
            inactiveNextLinkWrap = <span class="pagination-next">|</span>
            disabledPreviousLinkWrap = <span class="pagination-previous">|</span>
            inactivePreviousLinkWrapn = <span class="pagination-previous">|</span>
        }


.. _configuration-articles-products-categories-images-subpart:

subpart
~~~~~~~

..  confval:: subpart
    :name:  subpart behaviour
    :required: false
    :type: *array of string*

    This determines the behaviour of the display of the subparts.

    *    :typoscript:`show`:  :typoscript:`default`: if a record for a default category must be shown even if no product is found
           (for cat). This is used if you have a default category on each page and the category header should always be shown.


    **Example:**

    ..  code-block:: typoscript
        :caption: set the subpart behaviour for :php:`ITEM_CATEGORY`

        subpart.ITEM_CATEGORY {
            show = default
        }


.. _configuration-articles-products-categories-images-marks:

marks
~~~~~

..  confval:: marks
    :name:  marks
    :required: false
    :type: *array*

    Self defined markers for the record.


    **Example:**

    ..  code-block:: typoscript
        :caption: table based markers

        marks {
            mymarker = COA
            mymarker {
                10 = TEXT
                10.value = ###PRODUCT_TITLE###  in sizes  ###PRODUCT_SIZE###
                10.wrap = Title: - | -
            }
        }


.. _configuration-articles-products-categories-images-tag-mark:

tagmark
~~~~~~~

..  confval:: tagmark (only categories in LIST)
    :name:  tag mark
    :required: false
    :type: *array*

    defines how the marker :php:`###CATALLTAGS###` is filled with the tags of the categories.

    **Example:**

    ..  code-block:: typoscript
        :caption: tag marker

        tagmark {
            parents = 1
            prefix = cat
        }


.. _configuration-articles-products-categories-images-hide-id:

hideID
~~~~~~

..  confval:: hideID
    :name:  hide id
    :required: false
    :type: *int+*

    The ID of the item for which the whole shop plugin gets hidden (invisible). Use this with care!
    The shop plugin will not be shown in the front end if the table's url parameter is set to one of these
    elements of the comma separated list of values.


.. _configuration-articles-products-categories-images-hide-zero:

hideZero
~~~~~~~~

..  confval:: hideZero
    :name:  hide with no parameter (only categories)
    :required: false
    :type: boolean

    If true then a plugin is hidden if no category parameter with a uid is given.


.. _configuration-articles-products-categories-images-hide-childless:

hideChildless
~~~~~~~~~~~~~

..  confval:: hideChildless
    :name:  hide childs (only with hierarchical categories)
    :required: false
    :type: boolean

    If true then a plugin is hidden if a category parameter with a uid is given which has no child category.
    This can only be used with hierarchical categories.


