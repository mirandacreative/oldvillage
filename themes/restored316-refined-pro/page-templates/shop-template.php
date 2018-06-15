<?php
/**
 * Template Name: Shop Template
 *

 */

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'refined_do_custom_loop' );

function refined_do_custom_loop() {

   

}

genesis();