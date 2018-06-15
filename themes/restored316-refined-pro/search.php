<?

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'search_loop' );


function search_loop () {
?>
<div class="beige-background">
	<div class="wrap">
<?
if ( have_posts() ) :

while ( have_posts() ) : the_post(); ?>
		<div class="search-entry">
			<header class="entry-header">
				<a class="entry-image-link" href="<? the_permalink();?>">
					<img src="<?php the_post_thumbnail_url('full');?>" />
				</a>
			 <h2 class="entry-title"><a href="<? the_permalink();?>"><?php the_title(); ?></a></h2>

			</header>
            <div class="entry-content">
            	<?php the_excerpt(); ?>
            	<div class="button button-blue"><a href="<? the_permalink();?>">See More</a></div>
            </div>
            
         </div>
            <?php endwhile; ?>
        <?     else : ?>
	<h2><? echo wpautop( 'Sorry, no posts were found. Try again.' ); ?></h2>
	<? get_search_form (); ?>
<? endif; ?>
        
</div>
</div>
<?
}


genesis();