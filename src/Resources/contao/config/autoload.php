<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

// Classes
ClassLoader::addClasses(array
(
    // Classes
    'WeiseUndStark\MarksaleScriptInjector'    => 'vendor/contao/marksale-bundle/src/Resources/contao/classes/MarksaleScriptInjector.php',
));

// Templates
TemplateLoader::addFiles(array
(
    'analytics_marksale'                => 'vendor/contao/marksale-bundle/src/Resources/contao/templates/analytics',
));
