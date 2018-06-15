<?

add_action( 'genesis_loop', 'custom_loop' );

// this is the custom loop
function custom_loop(){

$hero_image = get_field('hero_image');
$hero_overlay = get_field('hero_overlay');

if( get_field('hero_image') ): ?><div class="hero-image"><img src="<? echo $hero_image; ?>" /></div><? endif;
if( get_field('hero_overlay') ): ?><div class="hero-overlay"><? echo $hero_overlay; ?></div><? endif;

if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
		<? $content = get_the_content(); ?>
		<div class="wrap">
			
			<? if (strlen($content) > 0) {
	  ?>
	  <div class="the-content">
	  	<div class="page-title"><? the_title();?></div>
	  	<? the_content();?></div>
	  <?
} else {
	
};
?>
			
		</div>
		<? endwhile; ?>
<? endif; ?>


<?
}

genesis();