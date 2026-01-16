.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _configuration-display-modes-code:

Display Modes (CODE)
--------------------

Here comes a list of the possible display types of the plugin.

Code to define, what the script does. In the backend these entries are made using flexforms instead
of the Codes (capital letters). Use the codefields ony in TypoScript setup.

=======================================  ========================  =======================================================
Display Mode:                            CODE:                     Description:
=======================================  ========================  =======================================================
Products: list                           LIST                      isting of the products
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list gifts                     LISTGIFTS                 listing of gifts
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list highlights                LISTHIGHLIGHTS            listing of the products marked as highlights
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list offers                    LISTOFFERS                listing of the products marked as offers
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list new items                 LISTNEWITEMS              listing of the new items entered to the sysfolder
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list recently visited items    LISTVIEWEDITEMS           Listing of the recently visited products of the logged
                                                                   in user
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list mostly visited            LISTVIEWEDMOST            Listing of the mostly visited products of the logged in
                                                                   user
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list all users mostly visited  LISTVIEWEDMOSTOTHERS      Listing of the mostly visited products of all users
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list affordable items          LISTAFFORDABLE            Listing of the products which the logged in user can
                                                                   afford to pay with his creditpoints
---------------------------------------  ------------------------  -------------------------------------------------------
Products: list DAM                       LISTDAM                   list DAM images or media files
---------------------------------------  ------------------------  -------------------------------------------------------
Products: single view                    SINGLE                    single view of an article (LIST code can be

                                                                   used also) or GET/POST var 'tt_products' can

                                                                   be set.
---------------------------------------  ------------------------  -------------------------------------------------------
Products: search                         SEARCH                    displays a search dialog for searching for products
---------------------------------------  ------------------------  -------------------------------------------------------
Products: memo                           MEMO                      memo of products
---------------------------------------  ------------------------  -------------------------------------------------------
Basket: shopping cart, options           BASKET                    Displays the shopping basket.

                                                                   The code 'BASKET' works in general but using the
                                                                   specific codes INFO, PAYMENT and FINALIZE, you can
                                                                   split out the function over

                                                                   multiple pages
---------------------------------------  ------------------------  -------------------------------------------------------
Basket: overview                         OVERVIEW                  a minimum basket containing only the number of items
                                                                   and the total sum
---------------------------------------  ------------------------  -------------------------------------------------------
Basket: collect addresses                INFO                      enter address information
---------------------------------------  ------------------------  -------------------------------------------------------
Basket: order review, payment            PAYMENT                   last check and payment gateway
---------------------------------------  ------------------------  -------------------------------------------------------
Basket: order confirmation               FINALIZE                  finalize the order and send emails – thanks page for
                                                                   the order
---------------------------------------  ------------------------  -------------------------------------------------------
Orders: tracking                         TRACKING                  to track the order state, bill and delivery
---------------------------------------  ------------------------  -------------------------------------------------------
Orders: billing                          BILL                      creates a file containing the bill
---------------------------------------  ------------------------  -------------------------------------------------------
Orders: delivery                         DELIVERY                  creates a file containing the delivery sheet
---------------------------------------  ------------------------  -------------------------------------------------------
Orders: list                             ORDERS                    display orders on per fe-user basis
---------------------------------------  ------------------------  -------------------------------------------------------
Orders: downloads (variable content)     DOWNLOAD                  a list of products with downloads gained by the orders
---------------------------------------  ------------------------  -------------------------------------------------------
General: help                            HELP                      information how to use tt_products
---------------------------------------  ------------------------  -------------------------------------------------------
Categories: list                         LISTCAT                   listing of categories
---------------------------------------  ------------------------  -------------------------------------------------------
Categories: select                       SELECTCAT                 categories inside of select boxes
---------------------------------------  ------------------------  -------------------------------------------------------
Categories: menu                         MENUCAT                   category menu
---------------------------------------  ------------------------  -------------------------------------------------------
Categories: single                       SINGLECAT                 category single view
---------------------------------------  ------------------------  -------------------------------------------------------
DAM: memo                                MEMODAM                   DAM memo
---------------------------------------  ------------------------  -------------------------------------------------------
DAM: memo overview                       MEMODAMOVERVIEW           overview for DAM memo
---------------------------------------  ------------------------  -------------------------------------------------------
DAM Categories: list                     LISTDAMCAT                listing of DAM categories
---------------------------------------  ------------------------  -------------------------------------------------------
DAM Categories: select                   SELECTDAMCAT              DAM categories inside of select boxes
---------------------------------------  ------------------------  -------------------------------------------------------
DAM Categories: menu                     MENUDAMCAT                DAM category menu
---------------------------------------  ------------------------  -------------------------------------------------------
DAM Categories: single                   SINGLEDAMCAT              DAM category single view
---------------------------------------  ------------------------  -------------------------------------------------------
Articles: list                           LISTARTICLES              listing of articles
---------------------------------------  ------------------------  -------------------------------------------------------
Addresses: list                          LISTAD                    list of addresses
---------------------------------------  ------------------------  -------------------------------------------------------
Addresses: select                        SELECTAD                  addresses inside of select boxes
---------------------------------------  ------------------------  -------------------------------------------------------
Adresses: menu                           MENUAD                    addresses as a menu
---------------------------------------  ------------------------  -------------------------------------------------------
Adresses: single                         SINGLEAD                  addresses as single view
---------------------------------------  ------------------------  -------------------------------------------------------
\                                        SCRIPT                    execution as a PHP script without any output
=======================================  ========================  =======================================================
