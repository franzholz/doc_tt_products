
.. _users-manual-creditpoint-system:

Gutscheinpunkte System
----------------------

Wenn ein Kunde eine gewisse Anzahl an Waren gekauft hat, dann gewinnt er dadurch Gutscheinpunkte, die
auf seinem Benutzerkonto gespeichert werden. Zu einem späteren Zeitpunkt, wenn er weitere Waren kauft,
kann er diese Gutscheinpunkte in Waren einlösen und beim Kauf einen besonderen Rabatt kalkulieren. Die
Kunden können bei jedem Kauf Gutscheinpunkte sammeln.



..  code-block:: typoscript
    :caption: creditpoints

    creditpoints { 
        pricefactor = 0.5
        10.type     = price 
        10.prod.1   = 0.02 
        10.prod.101 = 0.04 
        10.prod.501 = 0.06 
    }



