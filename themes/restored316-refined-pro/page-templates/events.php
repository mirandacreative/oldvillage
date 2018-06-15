<?php
/**
 * Template Name: Events Template
 *

 */	
add_action( 'genesis_after_loop', 'events_page', 2) ;	
add_action( 'genesis_after_loop', 'events_calendar', 2) ;	
	
function events_page (){
	?>
	
	
<div class="featured-events-area">
				  <div class="wrap">
				  	<? echo do_shortcode ('[events_loop]') ?>

				  </div></div>
<?
}


function events_calendar () {
	?>
	<div class="the-content wrap"><? the_content();?></div>
	<?
}


genesis();