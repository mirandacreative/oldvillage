<?
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'single_event' );


function single_event () {


if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	
	?>
	<div class="wrap">
			<div class="event-title"><h3><? the_title();?><h3></div>
			<div class="event"><? the_content();?></div>
	
	</div>
	<?	
	} 
} 

}






genesis();