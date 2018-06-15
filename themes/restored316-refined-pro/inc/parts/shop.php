
<div class="beige-background">
	<div class="shop-heading">Shop Information</div>
	<div class="shop-name"><h2><? the_title(); ?></h2></div>	
  <section class="container infohold" >
<?
	        $desc = get_sub_field('description');
            $address = get_sub_field('address');
            $site = get_sub_field('site');
            $phone = get_sub_field('phone');
            $news = get_sub_field('news');
            $hours = get_sub_field('hours');
            
        ?>
			
			
		
		<div class="page-left">
			<div class="shop-container shop-desc" >
				<div class="shop-container-heading">About Us</div>
				<div class="shop-description"><?php echo $desc; ?></div>
			</div>
			        <?php if (have_rows('images')):?>

			<div class="shop-container shop-images">
				        <?php while (have_rows('images')) : the_row(); ?>
						<? 
						$image = get_sub_field('image'); 
						$size = 'thumbnail';
						?>
				<div class="shop-img">
					<? if( $image ) {
					echo wp_get_attachment_image( $image, $size);
				} ?>
				</div>
				<? endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
		
		<div class="page-right">
			<div class="shop-container shop-loc">
				<div class="shop-container-heading">Information</div>
				<div class="shop-address" style="line-height: 24px;"><?php echo $address; ?></div>
				<div class="shop-site"><?php echo $site; ?></div>
				<div class="shop-phone">Phone: <?php echo $phone; ?></div>
				<div class="shop-hours"><b>Hours:</b><br/><?php echo $hours; ?></div>
				<div class="button button-blue"><a href="mailto:info@oldemistickvillage.com">Contact Us</a></div>
			</div>
			
			<div class="shop-container shop-social">
				<div style="text-align: center;">#shopsocial</div>
				<?php if (have_rows('social_media')):?>
				<ul class="shop-social-menu">
					<?php while (have_rows('social_media')) : the_row(); ?>
				<?php $platform = get_sub_field('platform');
					  $url = get_sub_field('url');
				?>

					<li class="shop-social-icon"><a href="<? echo $url; ?>"><div class="fab fa-<?= $platform;?>"></li></a>
				<? endwhile; ?>
				</ul>
				
				<?php endif; ?>		
			</div>	
					
			<div class="shop-container shop-signup">
				<? echo do_shortcode( '[do_widget "Genesis - eNews Extended"]'); ?>
			</div>
		</div>		
  </section>
</div>


	
<section class="container shop-dealhold">
	<div class="wrap">
		<?php if (have_rows('shop_deals')):?>
	<div class="shop-heading">Shop Deals</div>
	<div class="shop-name"><h2>Lorem Ipsum Dolor Sit</h2></div>	
		<?php while (have_rows('shop_deals')) : the_row(); ?>
		<? $deal_image = get_sub_field('deal_image'); 
			$deal_name = get_sub_field('deal_name');
		?>
	<div class="the-deal">
		<div class="deal-img"><img src="<? echo $deal_image; ?>"/></div>
		<div class="deal-name"><? the_sub_field('deal_name'); ?></div>
	</div>
	<? endwhile; ?>
	<?php endif; ?>
	</div>
</section>









