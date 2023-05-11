<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
/**
 * Plugin Name: Bob's Toolkit 
 * Plugin URI: https://www.aavoya.co/tool-kit
 * Author: Pijush Gupta
 * Author uri: https://www.linkedin.com/in/pijush-gupta-php/
 * Description: Mandatory functionalities for Wordpress
 * Version: 2023.05.05
 * Tags: functionality, tools
 */
if (!file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'app.php')) return;
if (!file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php')) return;

function init() {
	/**
	 * text domain
	 */
	if (!defined('TOOLKIT_TEXT_DOMAIN')) define('TOOLKIT_TEXT_DOMAIN', 'toolkit_text_domain');

	/**
	 * plugin's admin page html title
	 */
	if (!defined('TOOLKIT_ADMIN_MENU_TITLE')) define('TOOLKIT_ADMIN_MENU_TITLE', 'Bob\'s toolkit');

	/**
	 * Left hand side menu name 
	 */
	if (!defined('TOOLKIT_ADMIN_MENU_NAME')) define('TOOLKIT_ADMIN_MENU_NAME', 'Bob\'s toolkit');

	/**
	 * This is the slug to used in url of admin page of the plugin 
	 */
	if (!defined('TOOLKIT_SLUG')) define('TOOLKIT_SLUG', 'bobs-toolkit');

	/**
	 * this to load css and js files
	 */
	if (!defined('TOOLKIT_REL')) define('TOOLKIT_REL', plugins_url('', __FILE__));

	/**
	 * this to find css, js and php files
	 */
	if (!defined('TOOLKIT_ABS')) define('TOOLKIT_ABS', plugin_dir_path(__FILE__));

	/**
	 * SPA DOM ROOT
	 */
	if (!defined('TOOLKIT_HTML_ROOT_ID')) define('TOOLKIT_HTML_ROOT_ID', 'toolkit-root');

	/**
	 * loading composer autoload file, Plugin depends on PSR-4 autoload 
	 */
	require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

	/**
	 * loading the rest of Plugin 
	 */
	require_once __DIR__ . DIRECTORY_SEPARATOR . 'app.php';
}

/**
 * Loading everything on plugin_loaded action 
 */
add_action('plugins_loaded', 'init');
