<?php 
	        $comm = get_sub_field('comm');
            $history = get_sub_field('history');
            $bio_image = get_sub_field('bio_image');
            $bio_text = get_sub_field('bio_text');
            $news_about = get_sub_field('news_about');
            $hero_image = get_sub_field('about_hero_image');
            $hero_overlay = get_sub_field('about_hero_overlay')
        ?>

<div class="hero-image about-hero">
	<img src=" <? echo $hero_image; ?>" />
	<div class="hero-overlay"><? echo $hero_overlay; ?></div>
</div>



<div class="beige-background">
	<div class="about-heading">Featured News</div>
	<div class="about-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>	
  <section class="container infohold" >

        <div class="page-left">
			<div class="about-container" >
				<div class="about-container-heading">History of the Village</div>
				<div class="about-description"><?php echo $history; ?></div>
				
			</div>
			
			<div class="about-container" >
				<div class="about-container-heading">Community Engagement</div>
				<div class="comm-engagement"><?php echo $comm; ?></div>
			</div>
		</div>
		
		<div class="page-right">
			<div class="about-container about-bio">
				<div class="bio-image"><img src="<?php echo $bio_image; ?>" /></div>
				<div class="bio-text"><?php echo $bio_text; ?></div>
			</div>
			
			<div class="about-container about-social">
				<div style="text-align: center;">#shopatoldemistick</div>
				<?php if (have_rows('social_media_about')):?>
				<ul class="shop-social-menu">
					<?php while (have_rows('social_media_about')) : the_row(); ?>
				<?php $platform = get_sub_field('platform');
					  $url = get_sub_field('url');
				?>

					<li class="about-social-icon"><a target="blank" href="<? echo $url;?>"><div class="fab fa-<?= $platform;?>"></li></a>
				<? endwhile; ?>
				</ul>
				
				<?php endif; ?>		
			</div>	
					
			<div class="about-container about-signup">
				<? echo $news_about; ?>
			</div>
		</div>		

 </div>
	
	
</section>

