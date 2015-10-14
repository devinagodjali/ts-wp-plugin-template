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
|   | +--tssc_pt.php
```

###1. Open the tssc_pt.php file
###2. Change file name using the shortcode name 
	eg. 
	shortcode name: infocircle
	file name become: tssc_infocircle.php
###3. Change shortcode description name, ect.

```shortcode
    /**
    * Shortcode Name: 	TS PT Shortcode
    * Function Name: 	ptshortcode
    * Shortcode Tag: 	[ts_ptshortcode]
    * Description: 	Shortcode for TS WP Plugin Template Shortcode. It simply outputs '$content'.
    * URI: 		http://tuningsynesthesia.com/
    * Depricated Shortcode Tag: NA
    */
```
Change it to:
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
###4. Every TS_PT_Shortcode replace with the new shortcode name
`eg.
 TS_PT_Shortcode change to TS_InfoCircle`
###5. So do the ts_ptshortcode 
` ts_ptshortcode to ts_infocircle'

###6. Input the Javacript file inside the frontend.js
###7. If you download it from GitHub you need to `npm install`
###8. The parent(public.php) and the child
###9. and grunt the code
