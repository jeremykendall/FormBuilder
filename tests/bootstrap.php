<?php
/**
* PHPUnit Bootstrap
*/

$file_root = realpath(dirname(__FILE__) . '/../');

// Load the class files
require_once $file_root . '/FieldOption.php';
require_once $file_root . '/Fieldset.php';
require_once $file_root . '/FieldsetGroup.php';
require_once $file_root . '/FormBuilder.php';
require_once $file_root . '/FormField.php';

use \FormBuilder;