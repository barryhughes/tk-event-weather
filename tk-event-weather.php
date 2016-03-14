<?php
/*
   Plugin Name: TK Event Weather
   Plugin URI: https://wordpress.org/plugins/tk-event-weather/
   Version: 1.0
   Author: TourKick (Clifford Paulick)
   Author URI: http://tourkick.com/
   Description: Accurate, reliable, and free weather forecasts for your WordPress events
   Text Domain: tk-event-weather
   License: GPLv3
   License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/*
    "WordPress Plugin Template" Copyright (C) 2016 Michael Simpson  (email : michael.d.simpson@gmail.com)

    This following part of this file is part of WordPress Plugin Template for WordPress.

    WordPress Plugin Template is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    WordPress Plugin Template is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Contact Form to Database Extension.
    If not, see http://www.gnu.org/licenses/gpl-3.0.html
*/

$TkEventWeather_minimalRequiredPhpVersion = '5.0';

/**
 * Check the PHP version and give a useful error message if the user's version is less than the required version
 * @return boolean true if version check passed. If false, triggers an error which WP will handle, by displaying
 * an error message on the Admin page
 */
function TkEventWeather_noticePhpVersionWrong() {
    global $TkEventWeather_minimalRequiredPhpVersion;
    echo '<div class="updated fade">' .
      __('Error: plugin "TK Event Weather" requires a newer version of PHP to be running.',  'tk-event-weather').
            '<br/>' . __('Minimal version of PHP required: ', 'tk-event-weather') . '<strong>' . $TkEventWeather_minimalRequiredPhpVersion . '</strong>' .
            '<br/>' . __('Your server\'s PHP version: ', 'tk-event-weather') . '<strong>' . phpversion() . '</strong>' .
         '</div>';
}


function TkEventWeather_PhpVersionCheck() {
    global $TkEventWeather_minimalRequiredPhpVersion;
    if (version_compare(phpversion(), $TkEventWeather_minimalRequiredPhpVersion) < 0) {
        add_action('admin_notices', 'TkEventWeather_noticePhpVersionWrong');
        return false;
    }
    return true;
}


/**
 * Initialize internationalization (i18n) for this plugin.
 * References:
 *      http://codex.wordpress.org/I18n_for_WordPress_Developers
 *      http://www.wdmac.com/how-to-create-a-po-language-translation#more-631
 * @return void
 */
function TkEventWeather_i18n_init() {
    $pluginDir = dirname(plugin_basename(__FILE__));
    load_plugin_textdomain('tk-event-weather', false, $pluginDir . '/languages/');
}


//////////////////////////////////
// Run initialization
/////////////////////////////////

// Initialize i18n
add_action('plugins_loadedi','TkEventWeather_i18n_init');

// Run the version check.
// If it is successful, continue with initialization for this plugin
if (TkEventWeather_PhpVersionCheck()) {
    // Only load and run the init function if we know PHP version can parse it
    include_once('includes/tk-event-weather_init.php');
    TkEventWeather_init(__FILE__);
}


define( 'TK_EVENT_WEATHER_PLUGIN_ROOT_DIR', plugin_dir_path( __FILE__ ) ); // e.g. /Users/cmp/Documents/git/GitHub/tk-event-weather/