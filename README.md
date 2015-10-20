#Setup

###Setup Project
1. Download or clone ts-wp-plugin-template to your computer
2. Open ts-wp-plugin-template and install node_module using `npm install`
, For PC user make sure you have python and node.js installed
  
###Changing Name and Data
1. In plugin.php
	* Plugin Name
	-> Change the name of the plugin to the shortcode name eg. __testercode__
	* Author Name
	-> Use author's full name
	* Text Domain
	-> Change it to some unique name
		* eg: Text Domain: tspt, change it to __tstc__
	* Change every __tspt__ inside the plugin.php to __tstc__
	
	 ```php
    	/*
	 * Plugin Name:       TS WP Plugin Template
	 * Version:           1.1.0
	 * Plugin URI:        http://tuningsynesthesia.com/
	 * Description:       A WP plugin template for Tuning Synesthesia. Its origianl code was taken from '<a href="https://github.com/hlashbrooke/WordPress-Plugin-Template">WordPress-Plugin-Template</a>' by hlashbrooke and modified for their purpose. How to use: change its file names and variable names at 4 parts in 'plugin.php' and 1 part in 'includes/class-tspt.php')
	 * Author:            Author Name
	 * Author URI:        http://tuningsynesthesia.com/
	 * Requires at least: 3.2.0
	 * Tested up to:      3.4.0
	 * Text Domain:       tspt
	 * Domain Path:       /lang
	 * License:	      ISC
	 */
	```
		Change it to:	
		```php
		/*
	 	* Plugin Name:       TS Tester Code
	 	* Version:           1.0.0
	 	* Plugin URI:        http://tuningsynesthesia.com/
	 	* Description:       //Plugin Description
	 	* Author:            //Author Name
	 	* Author URI:        http://tuningsynesthesia.com/
	 	* Requires at least: 3.2.0
	 	* Tested up to:      3.4.0
	 	* Text Domain:       tstc
	 	* Domain Path:       /lang
	 	* License:	     ISC
	 	*/
		```
     	
2. In __include__ folder change the __class-tspt.php__ to __class-tstc.php__
3. In package.json
4. In readme file

****

####After done with all the folder data and name try to activated the plugin
	there are already two ready shortcode inside to test your plugin, 
	1. ts_ptshortcode: simple shortcode to input $content | [ts_ptshortcode] [/ts_ptshortcode]
	2. ts_ptshortcodeajax: shortcode with ajax | [ts_ptshortcodeajax] [/ts_ptshortcodeajax]
****

#To Create Shortcode
### Make a new `php` file inside modules folder
   1. Name it according to shortcode name eg. __ts_testercode.php__
   2. Copy the code from __ts_ptshortcode.php__ or __ts_ptshortcodeajax.php__ to __ts_testercode.php__
   3. Replace all __ts_ptshortcode__ with __ts_testercode__
   
   ```php
   	public function __construct( $parent ) {
			$this->parent = $parent;
			add_shortcode("ts_ptshortcode", array($this,"ptshortcode"));
			//change to add_shortcode("ts_testercode", array($this, "ptshortcode"));
		}
	```
	
	
   4. Write your code after /* Shortcode */ comment, example::
   
   ```php
   /**--------------------------------------------------
		 *
		 *	Shortcode 
		 *
		 * -------------------------------------------------- */
		/**
		 *
		 *	Function: ptshortcode.
		 *  @return Shortcode main output in html
		 *
		 */
		 
	public function testercode($atts, $content){
		return ' Hello World ';
	}
   ```
   5. In plugin.php add `$instance` for ts_testercode
   	
   	```php
   	$instance = tspt::instance( __FILE__, $_token, $_version );
	$instance->ptshortcode = TS_PTShortcode::instance( $instance );
	$instance->ptshortcodeajax = TS_PTShortcodeajax::instance( $instance );
	//$instance->testercode = TS_TesterCode::instance($instance);
	return $instance;
	```
   6. Remove __ts_ptshortcode.php__ and __ts_ptshortcodeajax.php__
   	* Remove their `$instance` from plugin.php
   
##Feature
1. In __assets__ folder will have css, js, and also sass you can modified
   * css -> frontend.css
   * js  -> frontend.js
   * sass -> frontend.js
   
   >Everytime you change the sass, js and the sass make sure to use `grunt`,
   >use `grunt watch` in the beginning of editing,
   >make sure to `grunt build` every time the editing done



    
