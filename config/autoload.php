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
    'WeiseUndStark\MarksaleScriptInjector'  => 'system/modules/marksale/classes/MarksaleScriptInjector.php',
));

// Templates
TemplateLoader::addFiles(array
(
    'marksale_default'                      => 'system/modules/marksale/templates/marksale',
));
