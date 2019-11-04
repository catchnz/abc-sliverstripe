<?php

// Ensure compatibility with PHP 7.2 ("object" is a reserved word),
// with SilverStripe 3.6 (using Object) and SilverStripe 3.7 (using SS_Object)
if (!class_exists('SS_Object')) class_alias('Object', 'SS_Object');


// Define path constant
$path = str_replace('\\', '/', __DIR__);
$path_fragments = explode('/', $path);
$dir_name = $path_fragments[count($path_fragments) - 1];
define('ABC_VENDOR_PATH', $dir_name . '/thirdparty');
define('ABC_PATH', $dir_name . '/src/abc');

// Configure Image Extension
AbcImageExtension::$fallback_image = ABC_PATH . '/images/no-image.jpg';

// DatePicker config
SS_Object::useCustomClass('DateField_View_JQuery', 'jQueryUIDateField_View');
