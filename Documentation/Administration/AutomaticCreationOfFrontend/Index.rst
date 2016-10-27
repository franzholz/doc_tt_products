.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _administration-automatic-creation-of-frontend:

Automatic creation of frontend users and address fields
-------------------------------------------------------

It is possible to create frontend users automatically after each order. You have to set "createUsers" to "1", enter the PID of the sysfolder as PIDuserFolder in the Setup field. Then you have to set memberOfGroup to the ID of your front end user group.  The customer will get an email with his account data after his first order. This email will contain his account name which is his email address, and his automatically created password.

If you do not want to use a single address field, but a separate address field for the name of the street, the housenumber and additional fields for the ZIP, city and country, then you have to insert these in your template file. If you install static_info_tables and set "useStaticInfoCountry=1" then the small field static_info_country of the fe_users will be used instead of a country string. It is useful to make a select box for the country.
