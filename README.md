#Setup

###Setup Project
> 1. Download or clone the folder to your computer
> 2. Installing node module inside the folder
  
###Changing Name and Data inside
1. In plugin.php
	1. Plugin Name
	-> Change the name of the plugin to the shortcode name
	2. Author name
	-> Change to the person that make it
	3. Text Domain
	-> change it to some unique name
		* TEXT DOMAIN: tspt || the shortcode name is __testercode__ change it to __tstc__
	4. Change every __tspt__ inside the plugin.php to __tstc__
2. In package.json
3. In Readme file
4. In __Include__ folder change the __class-tspt.php__ to __class-tstc.php__

===

####After done with all the folder data and name try to run the plugin
	there are already to ready shortcode inside to test your plugin, 
	1. ts_ptshortcode: simple shortcode to input $content
	2. ts_ptshortcode: shortcode with ajax
    
