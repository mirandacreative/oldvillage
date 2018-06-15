<?php 
			$hero = get_sub_field('hero_img');
	        $map = get_sub_field('map');
            $visit_address = get_sub_field('visit_address');
            $directions = get_sub_field('directions');
            $park = get_sub_field('park');
            $access = get_sub_field('access');
            $safety = get_sub_field('safety');
            
        ?>

<div class="hero-img"><img src="<? echo $hero; ?>" /></div>
<div class="beige-background">
	<div class="visit-heading"><h3>Visit the Village</h3></div>

  <section class="container infohold visit" >

        <div class="page-left">
			<div class="visit-container" >
				<div class="visit-map"><?php echo $map; ?></div>
			</div>
		</div>
		
		<div class="page-right">
			<div class="visit-container">
				<div class="visit-container-heading">Hours</div>
				<?php echo do_shortcode("[hourslist]"); ?>
			</div>
		</div>		
		
		<div class="page-bottom">
			<div class="bottom-section visit-container">
				<div class="visit-container-heading">Address</div>
				<div class="visit-address"><? echo $visit_address; ?></div>
			</div>
			
			<div class="bottom-section visit-container">
				<div class="visit-container-heading">Directions</div>
				<? echo $directions; ?>
				<div class="visit-container-heading">Parking</div>
				<? echo $park; ?>
			</div>
			
			<div class="bottom-section visit-container">
				<div class="visit-container-heading">Accessibility</div>
				<? echo $access; ?>
				<div class="visit-container-heading">Safety</div>
				<? echo $safety; ?>
			</div>

			
		</div>

 </div>
	
	
</section>