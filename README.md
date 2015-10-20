#Setup

###Setup Project
1. Download or clone ts-wp-plugin-template to your computer
2. Open ts-wp-plugin-template and install node_module using `npm install`
, For PC user make sure you have python and node.js installed
  
###Changing Name and Data
1. In plugin.php
	* Plugin Name
	-> Change the name of the plugin to the shortcode name eg. __testercode__
	* Author name
	-> Use author's full name
	* Text Domain
	-> change it to some unique name
		* eg: TEXT DOMAIN: tspt change it to __tstc__
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
     	
2. In __Include__ folder change the __class-tspt.php__ to __class-tstc.php__
3. In package.json
4. In Readme file

****

####After done with all the folder data and name try to run the plugin
	there are already to ready shortcode inside to test your plugin, 
	1. ts_ptshortcode: simple shortcode to input $content
	2. ts_ptshortcode: shortcode with ajax
****

#To Create Shortcode
### Make a new `php` file inside modules folde
   1. Name it according to shortcode name eg. ts_testercode.php
   2. Copy the code from ts_ptshortcode.php or ts_ptshortcodeajax.php to ts_testercode.php
   3. Replace all ts_ptshortcode with ts_testercode
   
   ```php
   	public function __construct( $parent ) {
			$this->parent = $parent;
			add_shortcode("ts_ptshortcode", array($this,"ptshortcode"));
		}
	```
   4. Write your code after /* Shortcode */ comment
   
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
   ```
  
   



    
