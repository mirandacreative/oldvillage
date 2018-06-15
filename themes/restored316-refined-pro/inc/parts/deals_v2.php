<?php
/**
 * Template Name: Deals Template
 *

 */

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'refined_do_custom_loop' );

function refined_do_custom_loop() {
	?>
<section class="container dealhold shopdealhold">
	<div class="wrap">
		<div class="deal-heading">Shop Deals</div>
		<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>
		<?
			
			$args = array( 'post_type' => 'shop_deals', 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_title();
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			endwhile;
			
		?>
	</div>
</section>

<section class="container dealhold shopdealhold">
	<div class="wrap">
		<div class="deal-heading">Shop Deals</div>
		<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>
		<?
			
			$args = array( 'post_type' => 'dining_deals', 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_title();
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			endwhile;
			
		?>
	</div>
</section>

<section class="container dealhold shopdealhold">
	<div class="wrap">
		<div class="deal-heading">Shop Deals</div>
		<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>
		<?
			
			$args = array( 'post_type' => 'service_deals', 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_title();
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			endwhile;
			
		?>
	</div>
</section>

<section class="container dealhold shopdealhold">
	<div class="wrap">
		<div class="deal-heading">Shop Deals</div>
		<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>
		<?
			
			$args = array( 'post_type' => 'theater_deals', 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_title();
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			endwhile;
			
		?>
	</div>
</section>

   
<?
}
genesis();
