

.. _administration-automatic-creation-of-frontend-users:

Automatic creation of front end users and address fields
--------------------------------------------------------

It is possible to create front end users automatically after each order. You have to set :typoscript:`createUsers` to :typoscript:`1`, 
enter the *PID* of the sysfolder as :typoscript:`PIDuserFolder` in the Setup field. Then you have to set :typoscript:`memberOfGroup` to
the *ID* of your front end user group.  The customer will get an email with his account data after his first order. 
This email will contain his account name, which is his email address, and his automatically created password.

If you do not want to use a single address field, but a separate address field for the name of the street, the house number and 
additional fields for the ZIP, city and country, then you have to insert the appropriate parts in your template file. 
If you install extension :composer:`sjbr/static-info-tables` and set :typoscript:`useStaticInfoCountry = 1` then 
the small field :code:`static_info_country` of the :code:`fe_users` will be used instead of a :code:`country` string. 
It is customer friendly to have a select box for the country.
