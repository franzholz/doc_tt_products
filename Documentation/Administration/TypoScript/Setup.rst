:navigation-title: Typoscript Setup
..  _typoscript-setup:

================
TypoScript Setup
================



Properties
==========

..  contents::
    :local:

..  _setup-template-file:

templateFile
------------

..  confval:: templateFile
    :name: templateFile
    :type: resource

    Same as :typoscript:`file.templateFile` from Constants.
    The template-file.
    See example in 'addons_tt_products/Resources/Private/Templates/collection/products_template.tmpl'
    You can also specify a CODE and ERROR for error cases.
    (siehe display mode)

    **Example:**

    ..  code-block::typoscript
        :caption:  set templateFile

        plugin.tt_products {
            templateFile = EXT:/addons_tt_products/Resources/Private/Templates/collection/example_template_bill_de.tmpl
        }

    **Example:**

    ..  code-block::typoscript
        :caption:  set templateFile.LIST

        plugin.tt_products {
            templateFile.LIST = EXT:tt_products/Resources/Private/Templates/example_locallang_xml.html
        }


..  _template-suffix:

templateSuffix
--------------

..  confval:: templateSuffix
    :name: template-suffix
    :type: string

    This suffix is appended to all template's major subparts.


..  _fe:

fe
--

..  confval:: fe
    :name: fe
    :type: boolean

    If FE output is used. You can turn the FE output off.
    This is useful for a callback script (see CODE SCRIPT).
    No template file is needed in this case.



..  _pid-list:

pid_list
--------

..  confval:: pid_list
    :name: pid-list
    :type: list of page_id's

    The pids from where to fetch categories, products and so on.
    Default is the current page. Accepts multiple pid's separated by comma.


..  _default-code:

defaultCode
-----------

..  confval:: defaultCode
    :name: default-code
    :type: string

    The default code (see below) if the value is empty. By default it is not set
    and a help screen will appear. You should not set anything here.

    **Example:**

    ..  code-block:: typoscript
        :caption:  defaultCode = HELP

        defaultCode = HELP


..  _code:

code
----

..  confval:: code
    :name: code
    :type: string

    The default code (see below) if the value is empty. By default it is not set
    and a help screen will appear. You should not set anything here.

    **Example:**

    ..  code-block:: typoscript
        :caption:  defaultCode = HELP

        defaultCode = HELP
