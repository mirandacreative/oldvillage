<?php
/**
 *
 *
 */


remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'sub_page' );
remove_action('genesis_after_entry','flexing');

function sub_page () {

	?>
	<div class="beige-background">
	<div class="wrap single-the-deal">
		<div class="single-deal-img"><? the_post_thumbnail();?></div>
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
$r = $_SERVER['REQUEST_URI'];

$r = explode('/', $r);
$r = array_filter($r);
$r = array_merge($r, array()); //reset keys
$code = $r[1];
	$args = array( 'name' => $code , 'post_type' => 'businesses', 'posts_per_page' => 1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		echo '<div class="wrap single-the-deal">';
		?>
		<?
		get_template_part('inc/dealflex');
		echo '</div>';
	endwhile;

?>
	</div>
	<?
}

genesis();
