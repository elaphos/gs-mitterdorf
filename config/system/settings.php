<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$a1BRVkJZbTBPVlE1eW5rbA$nrdZvIXzcSkG7RFenOhyTeXKIWWct/RBiv6az6afuQk',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'staging_gs_mitterdorf',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => 'tk5fgD24lG5lfeN',
                'port' => '3306',
                'user' => 'gs-mitterdorf',
            ],
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'bootstrap_package' => [
            'disableCssProcessing' => '0',
            'disableGoogleFontCaching' => '0',
            'disablePageTsBackendLayouts' => '0',
            'disablePageTsContentElements' => '0',
            'disablePageTsRTE' => '0',
            'disablePageTsTCADefaults' => '0',
            'disablePageTsTCEFORM' => '0',
            'disablePageTsTCEMAIN' => '0',
        ],
        'cf_cookiemanager' => [
            'CF_CONSENTMODAL_TEMPLATE' => 'EXT:cf_cookiemanager/Resources/Static/consentmodal.html',
            'CF_SCRIPTBLOCKER' => 'EXT:cf_cookiemanager/Resources/Static/scriptblocker.html',
            'CF_SETTINGSMODAL_CATEGORY_TEMPLATE' => 'EXT:cf_cookiemanager/Resources/Static/settingsmodal_category.html',
            'CF_SETTINGSMODAL_TEMPLATE' => 'EXT:cf_cookiemanager/Resources/Static/settingsmodal.html',
            'disablePlugin' => '0',
            'endPoint' => 'https://cookieapi.coding-freaks.com/api/',
            'scanApiKey' => 'scantoken',
            'scriptBlocking' => '0',
            'thumbnailApiEnabled' => '1',
            'trackingEnabled' => '1',
            'trackingObfuscate' => '0',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'news' => [
            'advancedMediaPreview' => '1',
            'archiveDate' => 'date',
            'categoryBeGroupTceFormsRestriction' => '0',
            'categoryRestriction' => '',
            'contentElementRelation' => '1',
            'dateTimeNotRequired' => '0',
            'hidePageTreeForAdministrationModule' => '0',
            'manualSorting' => '0',
            'pageTreePluginPreview' => '1',
            'prependAtCopy' => '1',
            'resourceFolderImporter' => '/news_import',
            'rteForTeaser' => '0',
            'showAdministrationModule' => '1',
            'slugBehaviour' => 'unique',
            'storageUidImporter' => '1',
            'tagPid' => '1',
        ],
        'redirects' => [
            'showCheckIntegrityInfoInReports' => '1',
            'showCheckIntegrityInfoInReportsSeconds' => '86400',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
        ],
        'zabbix_client' => [
            'allowedIps' => '*',
            'apiKey' => '',
            'program' => [
                'gm' => '/usr/bin/gm',
                'im' => '/usr/bin/convert',
                'jpegoptim' => '/usr/bin/jpegoptim',
                'openssl' => '/usr/bin/openssl',
                'optipng' => '/usr/bin/optipng',
                'webp' => '/usr/bin/cwebp',
            ],
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => true,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '70b281d76c646d27244b17263ff15b798095867cfa819ef3ee09b7a7bc2e7c1ef8c21b3e872d7cc1cbfdb1da0dd2ee60',
        'exceptionalErrors' => 12290,
        'features' => [
            'frontend.cache.autoTagging' => true,
        ],
        'sitename' => 'Grundschule Mitterdorf',
        'systemMaintainers' => [
            1,
        ],
    ],
];
