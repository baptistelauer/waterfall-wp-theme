<?php

/**
 * Main theme class
 * Setups common frontend and backend functions
 */
class WaterfallMain
{
    
    /**
     * Constructor
     */
    public function __construct()
    {
	add_action('init' , array($this , 'actionLoadTextDomain'));
	add_action('after_setup_theme' , array($this , 'actionAfterSetupTheme'));
    }
    
    /**
     * Loads the theme textdomain
     */
    public function actionLoadTextDomain()
    {
	load_theme_textdomain(WATERFALL_THEME , get_template_directory() . '/languages');
    }
    
    /**
     * Inits the theme
     */
    public function actionAfterSetupTheme()
    {
	add_theme_support('post-thumbnails');
    }
    
}

if (defined('ABSPATH'))
    new WaterfallMain();
