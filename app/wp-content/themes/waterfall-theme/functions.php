<?php

// WP
if (!defined('ABSPATH'))
    exit;

// Theme constants
define('WATERFALL_THEME' , 'waterfall_theme');
define('WATERFALL_THEME_DIR' , rtrim(get_template_directory() , '/'));

// Helpers
$helpers = glob(WATERFALL_THEME_DIR . '/helpers/*');
if (is_array($helpers))
{
    foreach($helpers as $helper)
	require_once($helper);
}

// Classes
$classes = glob(WATERFALL_THEME_DIR . '/classes/*');
if (is_array($classes))
{
    foreach($classes as $class)
	require_once($class);
}
