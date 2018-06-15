<?php


remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'sub_page' );

function sub_page () {
	$hero_image = get_field('hero_image');
	$hero_overlay = get_field('hero_overlay');

	?>
	<? if( get_field('hero_image') ): ?><div class="hero-image"><img src="<? echo $hero_image; ?>" /></div><? endif; ?>
	<? if( get_field('hero_overlay') ): ?><div class="hero-overlay"><? echo $hero_overlay; ?></div><? endif; ?>
	<div class="wrap the-content">
		<div class="page-title"><? the_title();?></div>
		<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
		//
		// Post Content here
		//
	} // end while
} // end ifs
?>
	</div>
	<?
}

genesis();

add_action('genesis_after_entry','default_flexing');
function default_flexing(){
  get_template_part('inc/flex'); 
};