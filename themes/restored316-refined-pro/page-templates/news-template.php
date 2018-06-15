<?php
/**
 * Template Name: News Template
 *

 */


remove_action( 'genesis_loop', 'genesis_do_loop' );

if(is_page ('news')) {
add_action( 'genesis_loop', 'custom_news_loop' );
}
if(is_page ('dining-news')) {
	add_action( 'genesis_loop', 'custom_news_loop_dine' );
}
if(is_page ('shop-news')) {
	add_action( 'genesis_loop', 'custom_news_loop_shop' );
}
if(is_page ('services-news')) {
	add_action( 'genesis_loop', 'custom_news_loop_serv' );
}

genesis();