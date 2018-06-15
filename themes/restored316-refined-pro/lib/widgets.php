<?php

/**
 * This file adds all the widget spaces to the Refined theme.
 *
 * @package      Refined
 * @link         http://restored316designs.com/themes
 * @author       Lauren Gaige // Restored 316 LLC
 * @copyright    Copyright (c) 2015, Restored 316 LLC, Released 04/12/2017
 * @license      GPL-2.0+
 */


// Home slider.
genesis_register_sidebar( array(
	'id'            => 'front-page-slider',
	'name'          => __( 'Front Page Hero Image', 'refined' ),
	'description'   => __( 'This widget area is the hero image on the home page', 'refined' ),
));


// Front Page 1 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-1',
	'name'        => __( 'Front Page 1', 'refined' ),
	'description' => __( 'This is the 1st section on the front page.', 'refined' ),
));

// Front Page 2 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-2',
	'name'        => __( 'Front Page 2', 'refined' ),
	'description' => __( 'This is the 2nd section on the front page.', 'refined' ),
));




// Front Page 3 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-3',
	'name'        => __( 'Front Page 3', 'refined' ),
	'description' => __( 'This is the 3rd section on the front page.', 'refined' ),
));

// Front Page 4 widget area.
genesis_register_sidebar( array(
	'id'          => 'front-page-4',
	'name'        => __( 'Front Page 4', 'refined' ),
	'description' => __( 'This is the 4th section on the front page.', 'refined' ),
));

// Rent From Us widget area.
genesis_register_sidebar( array(
	'id'          => 'rent-from-us',
	'name'        => __( 'Rent From Us', 'refined' ),
	'description' => __( 'This is the "Rent From Us" section on the about page.', 'refined' ),
));


// Announcement widget area in navigation.
genesis_register_sidebar( array(
	'id'          	=> 'announcement-widget',
	'name'        	=> __( 'Announcements', 'refined' ),
	'description' 	=> __( 'This is the section at the very top of your site for special announcements.', 'refined' ),
));

// Social menu widget area in navigation.
genesis_register_sidebar( array(
	'id'          	=> 'nav-social-menu',
	'name'        	=> __( 'Nav Social Menu', 'refined' ),
	'description' 	=> __( 'This is the social media section that appears in the menu above the header.', 'refined' ),
));

// Site Wide CTA widget area.
genesis_register_sidebar( array(
	'id'            => 'site-wide-cta',
	'name'          => __( 'Site Wide CTA', 'refined' ),
	'description'   => __( 'This widget space appears at the bottom of every page.', 'refined' ),
));

// Business Template CTA widget area.
genesis_register_sidebar( array(
	'id'            => 'biz-template-cta',
	'name'          => __( 'Business Page CTA', 'refined' ),
	'description'   => __( 'This widget space appears in the Sign Up area of each business page.', 'refined' ),
));

// Category Index widget area.
genesis_register_sidebar( array(
	'id'            => 'category-index',
	'name'          => __( 'Category Index', 'refined' ),
	'description'   => __( 'This widget area that appears on the Category Index page when using the Category Index page template.', 'refined' ),
));

// Above Blog Content widget area.
genesis_register_sidebar( array(
	'id'          	=> 'above-blog-content',
	'name'        	=> __( 'Above Blog Content', 'refined' ),
	'description' 	=> __( 'This is the above blog content section of the custom blog page template.', 'refined' ),
));

// Footer Instagram Widget widget area.
genesis_register_sidebar( array(
	'id'            => 'widget-below-footer',
	'name'          => __( 'Footer Instagram Widget', 'refined' ),
	'description'   => __( 'This widget area appears below the footer.', 'refined' ),
));

// Flexible Footer widget area.
genesis_register_sidebar( array(
	'id'          => 'flex-footer',
	'name'        => __( 'Flexible Footer', 'refined' ),
	'description' => __( 'This is the flexible footer widget section that appears below the instagram feed and above the site footer credits.  Remember that the first widget space will always extended to 100% of the width.', 'refined' ),
));
