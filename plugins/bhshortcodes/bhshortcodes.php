<?php
/**
* Plugin Name: Business Hours ShortCodes Plugin
* Plugin URI: http://mikericcardi.com/
* Description: This plugin allows you to enter your business hours and use a shortcode to display todays hours, and a list of each day's hours on your site.
* Version: 1.1
* Author: Mike Riccardi
* Author URI: mikericcardi.com
* License: MIT
*/

add_action('admin_menu', 'add_plugin_options_menu');
add_action('init', 'msr_plugin_init', 11);

add_shortcode('todayhours', 'today_hours');
add_shortcode('hourslist', 'hours_list');

function add_plugin_options_menu(){
     add_submenu_page( 'themes.php', 'Business Hours Shortcodes', 'Business Hours Shortcodes', 'administrator', 'active-hours-options', 'msr_plugin_options'); 
}

function msr_plugin_options(){
    include('active_hours_options.php');
}


function msr_plugin_init(){// runs on every page load
    
    define('MSR_THEME_DIR', get_template_directory_uri());
    
    // shows the post array if true
    define('MSR_DEBUG', 'false');
    
    // Define the initial values for the fields
    $page_vars = array(
    'MSR_SUN'   => 'closed',
    'MSR_MON'   => 'closed',
    'MSR_TUE'	=> 'closed',
    'MSR_WED'   => 'closed',
    'MSR_THU'   => 'closed',
    'MSR_FRI'   => 'closed',
    'MSR_SAT'   => 'closed',
    );
    
    // if a field doesn't exist, add it. 
    foreach($page_vars as $key=>$val){
        $var_exists = get_option($key);
        if(!$var_exists){
            add_option($key, $val);
        }
    }
    
    // run an update if we receive data from our form
    if($_POST['MSR_PLUGIN'] == 'true'){
        // update all the values the post array 
        foreach($_POST as $key=>$val){
            update_option($key, htmlspecialchars($val));
        }
        //define everything and redirect
        foreach($page_vars as $key=>$val){
            define($key, stripslashes (get_option($key) ));
        }
        // send you back to the dashboard
        header("location: " . get_site_url() . "/wp-admin/");
        exit();
    }
    
    // get all the updated values from the database, define them as constants
    foreach($page_vars as $key=>$val){
        define($key, stripslashes (get_option($key) ));
    }
    
    // Create the shortcodes based on the values
    
    
} // ends our theme function 

function today_hours(){
    // today hours
	$dayofweek = date('w'); // returns an index from 0 to 6 starting with sunday as 0 - this is today's day of the week
	$all_hours = array(
		0 => MSR_SUN,
		1 => MSR_MON,
		2 => MSR_TUE,
		3 => MSR_WED,
		4 => MSR_THU,
		5 => MSR_FRI,
		6 => MSR_SAT
	);
    // Create the HTML to return for the shortcode 
	$today_hours_html = "<span id='today-hours'>" . $all_hours[$dayofweek] . "</span>";
	return $today_hours_html;
}

function hours_list(){
// hours list
	$dayofweek = date('w'); // returns an index from 0 to 6 starting with sunday as 0 - this is today's day of the week
	$all_hours = array(
		0 => MSR_SUN,
		1 => MSR_MON,
		2 => MSR_TUE,
		3 => MSR_WED,
		4 => MSR_THU,
		5 => MSR_FRI,
		6 => MSR_SAT
	);
    // create the list html to return to the shortcode
	$hourshtml = "<ul id='hours-list'>";
	$hourshtml .= "<li>Sunday:  " . $all_hours[0] . "</li>";
	$hourshtml .= "<li>Monday:  " . $all_hours[1] . "</li>";
	$hourshtml .= "<li>Tuesday:  " . $all_hours[2] . "</li>";
	$hourshtml .= "<li>Wednesday:  " . $all_hours[3] . "</li>";
	$hourshtml .= "<li>Thursday:  " . $all_hours[4] . "</li>";
	$hourshtml .= "<li>Friday:  " . $all_hours[5] . "</li>";
	$hourshtml .= "<li>Saturday:  " . $all_hours[6] . "</li>";
	$hourshtml .= "</ul>";

	return $hourshtml;
}
