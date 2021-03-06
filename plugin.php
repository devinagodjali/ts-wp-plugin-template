<?php 
	/*
	 * Plugin Name:       TS WP Plugin Template
	 * Version:           1.0.0
	 * Plugin URI:        http://tuningsynesthesia.com/
	 * Description:       A WP plugin template for Tuning Synesthesia. Its origianl code was taken from '<a href="https://github.com/hlashbrooke/WordPress-Plugin-Template">WordPress-Plugin-Template</a>' by hlashbrooke and modified for their purpose. How to use: change its file names and variable names at 4 parts in 'plugin.php' and 1 part in 'includes/class-tspt.php')
	 * Author:            Author Name
	 * Author URI:        http://tuningsynesthesia.com/
	 * Requires at least: 3.2.0
	 * Tested up to:      3.4.0
	 * Text Domain:       tspt
	 * Domain Path:       /lang
	 * License:	  		  ISC
	 * @package WordPress
	 * @author Author Name
	 * @since 1.0.0
	 */

	/**
     * Get the current plugin data.
     * @since   1.0.0
     * @return  An array contains plugin data 
     **/

if (!function_exists('tspt')) {
	function tspt() {

		$plugin = _get_the_plugin();
		$_token = $plugin['TextDomain'];
		$_version = $plugin['Version'];

		/**
		 * Constants
		 * Uncomment if necessary
		 * @since   1.0.0
		 **/

		/*if ( ! defined( 'CONST' ) )
		define( 'CONST', 'a constant value' );*/

		/**
		 * File inclusion
		 * @since   1.0.0
		 **/

		require_once( 'includes/class-' . $_token . '.php' );
		//require_once( 'includes/modules/tssc_pt.php' );
		// activate addons one by one from modules directory
        foreach(glob(dirname(__FILE__)  . '/includes/modules/*.php') as $module){
            require_once($module);
        }
		/**
		 * Returns the main instance of pn to prevent the need to use globals.
		 *
		 * @since  1.0.0
		 * @return object pn
		 */
		$instance = tspt::instance( __FILE__, $_token, $_version );
		$instance->shortcodes = TS_PT_Shortcode::instance( $instance );
		return $instance;
	}
}

	/**
     * Get the current plugin data.
     * @since   1.0.0
     * @return  An array contains plugin data 
     **/

if (!function_exists('_get_the_plugin')) {
    function _get_the_plugin() {

        if ( ! function_exists( 'get_plugins' ) )
            require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        $plugin_folder = get_plugins( '/' . plugin_basename( dirname( __FILE__ ) ) );
        $plugin_file = basename( ( __FILE__ ) );

        return $plugin_folder[$plugin_file];

    } // End _get_the_plugin ()
}

tspt();

?>