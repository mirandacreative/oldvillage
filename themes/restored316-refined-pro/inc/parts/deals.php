
<?php 


            $dates = get_sub_field('deal_dates');
            $blurb = get_sub_field('deal_blurb');
        ?>
<div class="beige-background">
<div class="wrap">
	<div class="deal-details">
		<div class="left">
			<div class="deal-img"><? the_post_thumbnail(); ?></div>
		</div>
		<div class="right">
			<div class="deal-title"><h3><?the_title();?></h3></div>
			<div class="deal-desc">
				<? echo $blurb;?>
				<div class="deal-dates">VALID FROM <? echo $dates; ?></div>
			</div>
			
		</div>
	</div>

	<div class="store-info">

	</div>
</div>
</div>
<?

genesis();