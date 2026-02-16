<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Documentation for the Shop System tt_products in reStructuredText format',
    'description' => 'See TYPO3 docs "Rendering the documentation locally" to show the contents of this documentation in HTML format.',
    'category' => 'doc',
    'version' => '0.2.1',
    'state' => 'stable',
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@tt_products.de',
    'author_company' => 'jambage.com',
    'constraints' =>
        [
            'depends'   => [
                'typo3' => '9.5.0-13.4.99',
            ],
            'conflicts' => [],
            'suggests'  => []
        ],
];

