<?php

/*
Plugin Name: Custom Featured Pages Widget
Plugin URI: mirandacreative.com
Description: Display featured pages on the home page. 
Author: Caitlin
Version: 1
Author URI: 
*/


class my_plugin extends WP_Widget {

// constructor
function my_plugin() {
// Give widget name here
parent::WP_Widget(false, $name = __('Custom Featured Pages', 'wp_widget_plugin') );

}

function form($instance) {

// Check values
if( $instance) {
$title = esc_attr($instance['title']);
$img_url = $instance['image_url'];
$page_url = $instance['page_url'];
$color = $instance['label_color'];
} else {
$title = '';
$img_url = '';
$page_url = '';
}
?>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('page_url'); ?>"><?php _e('Page URL:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('page_url'); ?>" name="<?php echo $this->get_field_name('page_url'); ?>" type="text" value="<?php echo $page_url; ?>"?></input>
</p>
<p>
<label for="<?php echo $this->get_field_id('image_url'); ?>"><?php _e('Image URL:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('image_url'); ?>" name="<?php echo $this->get_field_name('image_url'); ?>" type="text" value="<?php echo $img_url; ?>"</input>
</p>

		<p>
<label for="<?php echo $this->get_field_id('label_color'); ?>"><?php _e('Label Coor (HEX CODE #):', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('label_color'); ?>" name="<?php echo $this->get_field_name('label_color'); ?>" type="text" value="<?php echo $color; ?>"?></input>
</p>

<?php
}

function update($new_instance, $old_instance) {
$instance = $old_instance;
// Fields
$instance['title'] = strip_tags($new_instance['title']);
$instance['page_url'] = strip_tags($new_instance['page_url']);
$instance['image_url'] = strip_tags($new_instance['image_url']);
$instance['label_color'] = strip_tags($new_instance['label_color']);

return $instance;
}

// display widget
function widget($args, $instance) {
extract( $args );

// these are the widget options
$title = apply_filters('widget_title', $instance['title']);
$page_url = $instance['page_url'];
$img_url = $instance['image_url'];
$color = $instance['label_color'];
echo $before_widget;

// Display the widget
echo '<div class="custom-featured-page"';

// Check if title is set
if ( $title ) {

}
echo '</div>';

// Check if page url is set
echo '<div class="custom-featured-page-title">';
if( $page_url ) {

}
echo '</div>';

// Check if image url is set
if( $img_url ) {
echo '<div class="custom-featured-page-image" style="background-image: url('.$img_url.')"><div class="front-page-1-label" style="background-color:'.$color.'"><a href="'.$page_url.'">'.$title.'</a></div></div>';

}



echo '</div>';
echo $after_widget;
}
}


// register widget
add_action('widgets_init', create_function('', 'return register_widget("my_plugin");'));


