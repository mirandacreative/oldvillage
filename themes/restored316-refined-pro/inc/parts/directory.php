<?php 
			
            $dir_map = get_sub_field('dir_map');
            $shop_dir_blurb = get_sub_field('shop_dir_blurb');
            $dine_dir_blurb = get_sub_field('dine_dir_blurb');
            $serv_dir_blurb = get_sub_field('serv_dir_blurb');
        ?>
<div class="directory-map">
	<img src="<? echo $dir_map; ?>" />
</div>
<div class="directory-menu wrap">
	<div class="dir-menu-button shop-button"><a style="color:#fff;font-weight:normal;" href="#shopping-directory">Shop</a></div>
	<div class="dir-menu-button dine-button"><a style="color:#fff;font-weight:normal;" href="#dining-directory">Dine</a></div>
	<div class="dir-menu-button serv-button"><a style="color:#fff;font-weight:normal;" href="#services-directory">Services</a></div>
	
</div>
<div class="beige-background">
	    <section class="container infohold" >

	        	
	        
	        	
	        	<!--- Shop Directory -->
	        	<div class="directory-container" id="shopping-directory">
	        		<a name="shopping-directory"></a>
	        		<div class="dir-cat-label" id="shop-cat-label">Shop</div>
	        		<div class="directory-heading">Olde Mistick Village Shops</div>
	        		<div class="directory-blurb"><? echo $shop_dir_blurb; ?></div>
	        		<div class="directory-blurb"></div>
	        	<?php if (have_rows('shops_directory')):?>
				
				<ul class="directory-shops">
										

					<?php while (have_rows('shops_directory')): the_row(); ?>
					
					<?php $biz_name = get_sub_field('biz_name');
				        $biz_loc = get_sub_field('biz_loc');
			            $sm_desc = get_sub_field('sm_desc');
			            $biz_link = get_sub_field('link');
				?>
					
						<li class="the-shop">
							<a class="biz-link" href="<? echo $biz_link; ?>"><div class="biz-name"><? echo $biz_name; ?></div></a>
							<div class="biz-loc"> - <? echo $biz_loc ; ?></div>
							<div class="biz-desc"><? echo $sm_desc ; ?></div>							
						</li>
					<?php endwhile; ?>
				</ul>
				<? endif; ?>	
				</div>		

				<!--- Dining Directory -->
	        	<div class="directory-container" id="dining-directory">
	        		<a name="shopping-directory"></a>
	        		<div class="dir-cat-label" id="dine-cat-label">Dine</div>
	        		<div class="directory-heading">Olde Mistick Village Restaurants</div>
	        		<div class="directory-blurb"><? echo $dine_dir_blurb; ?></div>
	        		<div class="directory-blurb"></div>
				<?php if (have_rows('dining_directory')):?>
				
				<ul class="directory-shops">
										

					<?php while (have_rows('dining_directory')): the_row(); ?>
					
					<?php $biz_name = get_sub_field('biz_name');
				        $biz_loc = get_sub_field('biz_loc');
			            $sm_desc = get_sub_field('sm_desc');
			            $biz_link = get_sub_field('link');
				?>
					
						<li class="the-shop">
							<a class="biz-link" href="<? echo $biz_link; ?>"><div class="biz-name"><? echo $biz_name; ?></div></a>
							<div class="biz-loc"> - <? echo $biz_loc ; ?></div>
							<div class="biz-desc"><? echo $sm_desc ; ?></div>							
						</li>
					<?php endwhile; ?>
				</ul>
				<? endif; ?>	
				</div>	

				<!--- Services Directory -->
				<div class="directory-container" id="services-directory">
					<a name="services-directory"></a>
					<div class="dir-cat-label" id="serv-cat-label">Services</div>
	        		<div class="directory-heading">Olde Mistick Village Services</div>
	        		<div class="directory-blurb"><? echo $serv_dir_blurb; ?></div>
	        		<div class="directory-blurb"></div>
				<?php if (have_rows('services_directory')):?>
				
				<ul class="directory-shops">
					<?php while (have_rows('services_directory')): the_row(); ?>
					
					<?php $biz_name = get_sub_field('biz_name');
				        $biz_loc = get_sub_field('biz_loc');
			            $sm_desc = get_sub_field('sm_desc');
			            $biz_link = get_sub_field('link');
				?>
					
						<li class="the-shop">
							<a class="biz-link" href="<? echo $biz_link; ?>"><div class="biz-name"><? echo $biz_name; ?></div></a>
							<div class="biz-loc"> - <? echo $biz_loc ; ?></div>
							<div class="biz-desc"><? echo $sm_desc ; ?></div>							
						</li>
					<?php endwhile; ?>
				</ul>
				<? endif; ?>	
				</div>	

		</section>
 </div>
<?
	
add_action( 'genesis_after_loop', 'directory_deals', 2) ;	
function directory_deals () {
		if (is_page('shop')) {
			?>
			<section class="container dir-dealhold wrap">
				  <?php
			  $args = array(
			    'post_type'=>'shop_deals', 
			    'orderby'=>'rand', 
			    'posts_per_page'=>'3'
			  );

			  $shop_deal=new WP_Query($args);

			  while ($shop_deal->have_posts()) : $shop_deal->the_post(); ?>
			  <div class="the-deal">
			  		<div class="deal-img"><? the_post_thumbnail(); ?></div>
			  		<div class="deal-name"><? the_title(); ?></div>
			  		<div class="button button-grey"><a href="<? the_permalink(); ?>">Visit Deal!</a></div>
			  </div>
			  <? endwhile;
 			  wp_reset_postdata(); ?>
			  </section>	
			  <?		
		}
		elseif (is_page('dine')) {
			?>
			<section class="container dir-dealhold wrap">
				  <?php
			  $args = array(
			    'post_type'=>'dining_deals', 
			    'orderby'=>'rand', 
			    'posts_per_page'=>'3'
			  );

			  $dine_deal=new WP_Query($args);

			  while ($dine_deal->have_posts()) : $dine_deal->the_post(); ?>
			  <div class="the-deal">
			  		<div class="deal-img"><? the_post_thumbnail(); ?></div>
			  		<div class="deal-name"><? the_title(); ?></div>
			  		<div class="button button-grey"><a href="<? the_permalink(); ?>">Visit Deal!</a></div>
			  </div>
			  <? endwhile;
 			  wp_reset_postdata(); ?>
			  </section>	
			  <?		
		}
		elseif (is_page('services')) {
			?>
			<section class="container dir-dealhold wrap">
				  <?php
			  $args = array(
			    'post_type'=>'service_deal', 
			    'orderby'=>'rand', 
			    'posts_per_page'=>'3'
			  );

			  $serv_deal=new WP_Query($args);

			  while ($serv_deal->have_posts()) : $serv_deal->the_post(); ?>
			  <div class="the-deal">
			  		<div class="deal-img"><? the_post_thumbnail(); ?></div>
			  		<div class="deal-name"><? the_title(); ?></div>
			  		<div class="button button-grey"><a href="<? the_permalink(); ?>">Visit Deal!</a></div>
			  </div>
			  <? endwhile;
 			  wp_reset_postdata(); ?>
			  </section>	
			  <?		
		}

		else {
			
		}
	
	
}
	
	
		
	

	

