# TS-WP-Plugin-Template
A WP plugin template for Tuning Synesthesia. Its origianl code was taken from [WordPress-Plugin-Template](https://github.com/hlashbrooke/WordPress-Plugin-Template) by hlashbrooke and modified for some purpose. 

##Quick Setup

change plugin file names and variable names at 4 parts in 'plugin.php' and 1 part in 'includes/class-tspt.php'

##How To Use Plugin-Template
```
.
+-- _include
|   +--admin.js
|   +--class-tspt.php
|   +--module
|     +--tssc_pt.php
```
###1. Open the tss_pt.php file
###2. Change file name to the shortcode name 
	eg. 
	shortcode name: infocircle
	file name become: tssc_infocircle.php
###3. Change shortcode description name, ect.
```shortcode
    /**
     * Shortcode Name: 	TS Info circle
     * Function Name: 	Infocircle
     * Shortcode Tag: 	[ts_infocircle]
     * Description: 	NA
     * URI: 		http://tuningsynesthesia.com/
     * Depricated Shortcode Tag: NA
     */
```
