<?php
// check if the flexible content field has rows of data
if (have_rows('main')):

    // loop through the rows of data
    while (have_rows('main')) : the_row();

        if ( get_row_layout() == 'biz_info'):
            get_template_part('inc/parts/dealbiz-info');

        elseif (get_row_layout() == 'deals'):
            get_template_part('inc/parts/deals');

        elseif (get_row_layout() == 'about'):
            get_template_part('inc/parts/about');

         elseif (get_row_layout() == 'visit'):
            get_template_part('inc/parts/visit');

         elseif (get_row_layout() == 'directory'):
            get_template_part('inc/parts/directory');



        endif;

    endwhile;

else :
    // no layouts found
 ?>
    <?php
endif;
?>
