<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\LevelSetList;
use Ssch\TYPO3Rector\Configuration\Typo3Option;
use Ssch\TYPO3Rector\FileProcessor\TypoScript\Rector\v10\v0\ExtbasePersistenceTypoScriptRector;
use Ssch\TYPO3Rector\FileProcessor\TypoScript\Rector\v9\v0\FileIncludeToImportStatementTypoScriptRector;
use Ssch\TYPO3Rector\Rector\General\ConvertImplicitVariablesToExplicitGlobalsRector;
use Ssch\TYPO3Rector\Rector\General\ExtEmConfRector;
use Ssch\TYPO3Rector\Set\Typo3LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        Typo3LevelSetList::UP_TO_TYPO3_13,
        LevelSetList::UP_TO_PHP_83,
    ]);

    // In order to have a better analysis from phpstan we teach it here some more things
    $rectorConfig->phpstanConfig(Typo3Option::PHPSTAN_FOR_RECTOR_PATH);

    // Disable parallel otherwise non php file processing is not working i.e. typoscript
    $rectorConfig->disableParallel();

    // this will not import root namespace classes, like \DateTime or \Exception
    $rectorConfig->importShortClasses(false);

    // Define your target version which you want to support
    $rectorConfig->phpVersion(PhpVersion::PHP_83);

    // If you only want to process one/some TYPO3 extension(s), you can specify its path(s) here.
    // If you use the option --config change __DIR__ to getcwd()
    $rectorConfig->paths([
        __DIR__ . '/packages/*',
    ]);

    // If you use importNames(), you should consider excluding some TYPO3 files.
    $rectorConfig->skip([
        // @see https://github.com/sabbelasichon/typo3-rector/issues/2536
        __DIR__ . '/**/Configuration/ExtensionBuilder/*',
        // We skip those directories on purpose as there might be node_modules or similar
        // that include typescript which would result in false positive processing
        __DIR__ . '/**/Resources/**/node_modules/*',
        __DIR__ . '/**/Resources/**/NodeModules/*',
        __DIR__ . '/**/Resources/**/BowerComponents/*',
        __DIR__ . '/**/Resources/**/bower_components/*',
        __DIR__ . '/**/Resources/**/build/*',
        __DIR__ . '/vendor/*',
        __DIR__ . '/Build/*',
        __DIR__ . '/public/*',
        __DIR__ . '/.github/*',
        __DIR__ . '/.Build/*',
        NameImportingPostRector::class => [
            'ext_localconf.php',
            'ext_tables.php',
            'ClassAliasMap.php',
            __DIR__ . '/**/Configuration/*.php',
            __DIR__ . '/**/Configuration/**/*.php',
        ],

        // We skip this rector rule as it interferes with TYPO3 coding standards
        \Rector\Php74\Rector\LNumber\AddLiteralSeparatorToNumberRector::class,
    ]);

    // Rewrite your extbase persistence class mapping from typoscript into php according to official docs.
    // This processor will create a summarized file with all the typoscript rewrites combined into a single file.
    $rectorConfig->ruleWithConfiguration(ExtbasePersistenceTypoScriptRector::class, [
        ExtbasePersistenceTypoScriptRector::FILENAME => __DIR__ . '/Configuration/Extbase/Persistence/Classes.php',
    ]);

    // Add some general TYPO3 rules
    $rectorConfig->rule(ConvertImplicitVariablesToExplicitGlobalsRector::class);
    $rectorConfig->ruleWithConfiguration(ExtEmConfRector::class, [
        ExtEmConfRector::ADDITIONAL_VALUES_TO_BE_REMOVED => [],
    ]);

    // Modernize your TypoScript include statements for files and move from <INCLUDE /> to @import use the FileIncludeToImportStatementVisitor (introduced with TYPO3 9.0)
    $rectorConfig->rule(FileIncludeToImportStatementTypoScriptRector::class);
};
