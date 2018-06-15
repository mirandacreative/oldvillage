
<div class="beige-background">
	<div class="shop-name"><h2><? the_title(); ?></h2></div>	
  <section class="container infohold" >
<?
	        $desc = get_sub_field('description');
            $address = get_sub_field('address');
            $site = get_sub_field('site');
            $phone = get_sub_field('phone');
            $news = get_sub_field('news');
            $hours = get_sub_field('hours');
            $summer_hours = get_sub_field('summer_hours');
            $logo = get_sub_field('shop_logo');
            
        ?>
			
			
		
		<div class="page-top shop-container">
			<div class="shop-container shop-desc" >
				<div class="shop-container-heading">About Us</div>
				<div class="shop-description"><?php echo $desc; ?></div>
			</div>

			<div class="shop-social">
				
				<?php if (have_rows('social_media')):?>
					<div style="text-align: center;">Social Connections</div>
				<ul class="shop-social-menu">
					<?php while (have_rows('social_media')) : the_row(); ?>
				<?php $platform = get_sub_field('platform');
					  $url = get_sub_field('url');
				?>

					<li class="shop-social-icon biz-social-icon"><a target="_blank" href="<? echo $url; ?>"><div class="fab fa-<?= $platform;?>"></li></a>
					<? endwhile; ?>
				</ul>
				
				<?php endif; ?>		
			</div>	
		</div>
			
		<div class="page-middle shop-container">
			<div class="shop-container-heading shop-name"><? the_title() ?></div>
			<div class="middle-container">
					<div class="shop-logo"><img src="<? echo $logo; ?>" /></div>
				</div>
			<div class="middle-container">
					<div class="shop-address" style="line-height: 24px;"><?php echo $address; ?></div>
					<div class="shop-site"><a target="_blank" href="<?php echo $site; ?>"><?php echo $site; ?></a></div>
					<div class="shop-phone">Phone: <?php echo $phone; ?></div>
			</div>	
			<div class="middle-container">
					<div class="shop-hours"><b>Store Hours:</b><br/><?php echo $hours; ?></div>
			</div>
			<div class="middle-container last">
					<div class="shop-hours summer-hours"><b>Summer Hours:</b><br/><?php echo $summer_hours; ?></div>
			</div>
		</div>
		
			
		<div class="page-bottom">	
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

<?php endif; ?>
			</div>	

			<div class="shop-signup">
				<? echo do_shortcode( '[do_widget "Genesis - eNews Extended"]'); ?>
			</div>
		</div>		


	 </section>
</div>





 

