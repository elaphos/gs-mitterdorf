<?php
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['fal_media']['config']['overrideChildTca']['columns']['crop'] = [
    'config' => [
        'cropVariants' => [
            'card' => [
                'title' => 'Karte',
                'allowedAspectRatios' => [
                    '4:3' => [
                        'title' => '3 zu 2',
                        'value' => 3 / 2,
                    ],
                ],
            ],
            'banner' => [
                'title' => 'Banner',
                'allowedAspectRatios' => [
                    '3:1' => [
                        'title' => '3 zu 1',
                        'value' => 3,
                    ],
                ],
            ],
            'thumbnail' => [
                'title' => 'Gallerieübersicht',
                'allowedAspectRatios' => [
                    '1:1' => [
                        'title' => '1 zu 1',
                        'value' => 1,
                    ],
                ],
            ],
        ],
    ],
];
