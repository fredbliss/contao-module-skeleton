<?php
/**
 * Frontend Module Skeleton for Contao Open Source CMS
 *
 * Copyright (C) 2017 Intelligent Spark
 *
 * @package    Contao Module Skeleton
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Register PSR-0 namespace
 */
if (class_exists('NamespaceClassLoader')) {
    NamespaceClassLoader::add('IntelligentSpark', 'system/modules/contao-module-skeleton/library');
}

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_my_module'                  => 'system/modules/contao-module-skeleton/templates/modules'
));