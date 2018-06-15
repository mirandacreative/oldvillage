

	
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

		<div class="single-deal-container">
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

	


	 </section>

