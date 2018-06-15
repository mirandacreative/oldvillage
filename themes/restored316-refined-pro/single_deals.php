<?php
/**
 * Template Name: Deals Template
 *

 */

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'refined_do_custom_loop' );

function refined_do_custom_loop() {
	?>
<section class="container dealhold" id="shopping-deals">
	<div class="wrap">
		<div class="deal-heading">Shop Deals</div>
		<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>
		<?
			
			$cat = 7;
			$args = array( 'post_type' => 'deals', 'posts_per_page' => -1, 'cat' => $cat );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="the-deal">';
				?>
					<div class="deal-img"><? the_post_thumbnail(); ?></div>
					<div class="deal-name"><? the_title(); ?></div>
					<div class="button button-grey"><a href="<? the_permalink(); ?>">Visit Deal!</a></div>
				<?
				echo '</div>';
			endwhile;
			
		?>
	</div>
</section>

<section class="container dealhold" id="dining-deals">
	<div class="wrap">
		<div class="deal-heading">Dining Deals</div>
		<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>
		<?
			
			$cat = 16;
			$args = array( 'post_type' => 'deals', 'posts_per_page' => -1, 'cat' => $cat );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="the-deal">';
				?>
					<div class="deal-img"><? the_post_thumbnail(); ?></div>
					<div class="deal-name"><? the_title(); ?></div>
					<div class="button button-grey"><a href="<? the_permalink(); ?>">Visit Deal!</a></div>
				<?
				echo '</div>';
			endwhile;
			
		?>
	</div>
</section>

<section class="container dealhold" id="service-deals">
	<div class="wrap">
		<div class="deal-heading">Service Deals</div>
		<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>
		<?

			$cat = 7;
			$args = array( 'post_type' => 'deals', 'posts_per_page' => -1, 'cat' => $cat );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="the-deal">';
				?>
					<div class="deal-img"><? the_post_thumbnail(); ?></div>
					<div class="deal-name"><? the_title(); ?></div>
					<div class="button button-grey"><a href="<? the_permalink(); ?>">Visit Deal!</a></div>
				<?
				echo '</div>';
			endwhile;
			
		?>
	</div>
</section>

<section class="container dealhold" id="theater-deals">
	<div class="wrap">
		<div class="deal-heading">Theater Deals</div>
		<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>
		<?
			
			$cat = 17;
			$args = array( 'post_type' => 'deals', 'posts_per_page' => -1, 'cat' => $cat );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="the-deal">';
				?>
					<div class="deal-img"><? the_post_thumbnail(); ?></div>
					<div class="deal-name"></div>
					<div class="button button-grey"><a href="<? the_permalink(); ?>">Visit Deal!</a></div>
				<?
				echo '</div>';
			endwhile;
			
		?>
	</div>
</section>

   
<?
}
genesis();
