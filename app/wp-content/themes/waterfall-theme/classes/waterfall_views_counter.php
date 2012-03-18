<?php

/**
 * Views counter
 * Provides a frontend API and backend stats
 */
class WaterfallViewsCounter
{
        
    /**
     * Constructor
     */
    public function __construct()
    {
	add_action('template_redirect' , array($this , 'actionCountView'));
	add_action('manage_posts_custom_column' , array($this , 'actionOutputViewsColumn') , 10 , 2);
	add_action('manage_pages_custom_column' , array($this , 'actionOutputViewsColumn') , 10 , 2);
	add_filter('manage_posts_columns' , array($this , 'filterRegisterViewsColumn'));
	add_filter('manage_pages_columns' , array($this , 'filterRegisterViewsColumn'));
    }
    
    /**
     * Registers the "Views" column when viewing posts & pages
     * @param Array $columns the default columns
     */
    public function filterRegisterViewsColumn($columns)
    {
	$columns[WATERFALL_THEME_PREFIX . 'views'] = __('Views count' , WATERFALL_THEME_DOMAIN);
	return $columns;
    }
    
    /**
     * Displays the "Views" column when viewing posts & pages
     * @param String $column the current column ID
     * @param int $post_id the current post ID
     */
    public function actionOutputViewsColumn($column , $post_id)
    {
	if ($column == WATERFALL_THEME_PREFIX . 'views')
	{
	    $views = intval(get_post_meta($post_id , WATERFALL_THEME_PREFIX . 'views' , true));
	    if ($views == 0)
		_e('No views' , WATERFALL_THEME_DOMAIN);
	    else if ($views == 1)
		_e('One view' , WATERFALL_THEME_DOMAIN);
	    else
		echo sprintf(__('%s views' , WATERFALL_THEME_DOMAIN) , $views);
	}
    }
    
    /**
     * Counts a view if needed when viewing a single post
     */
    public function actionCountView()
    {
	// Checks context
	global $post;
	if ((!is_single() && !is_page()) || !is_object($post) || is_wp_error($post))
	    return;
	
	// Updates the views if needed
	if (array_search($post->ID , $this->getUserViewsList()) === false)
	    $this->addViewTo($post);
    }
    
    /**
     * Adds a view to the given post
     * @param Object $post
     */
    private function addViewTo($post)
    {
	// Adds a view in the post meta
	$current_views = intval(get_post_meta($post->ID , WATERFALL_THEME_PREFIX . 'views' , true));
	update_post_meta($post->ID , WATERFALL_THEME_PREFIX . 'views' , $current_views + 1);
	
	// Updates the user cookie
	$current_user_views = $this->getUserViewsList();
	$current_user_views[] = $post->ID;
	$current_user_views = base64_encode(implode(',' , $current_user_views));
	setcookie(WATERFALL_THEME_PREFIX . 'views' , $current_user_views , WATERFALL_COOKIES_DURATION);
    }
    
    /**
     * Gets the current user list using the cookies
     */
    private function getUserViewsList()
    {
	$views = isset($_COOKIE) && !empty($_COOKIE[WATERFALL_THEME_PREFIX . 'views']) ? base64_decode($_COOKIE[WATERFALL_THEME_PREFIX . 'views'] , true) : false;
	$views = is_string($views) ? explode(',' , $views) : array();
	return $views;
    }
    
}

if (defined('ABSPATH'))
    new WaterfallViewsCounter();
