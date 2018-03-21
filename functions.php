<?php

function sd_restaurant_files(){
  wp_enqueue_script('sd_restaurant_main_script',get_theme_file_uri('/js/main-script.js'),array('jquery'), '1.0', true);//name,filepath,dependancies,version,bottom of page
  wp_enqueue_script('sd_restaurant_google_map_script', '//maps.googleapis.com/maps/api/js?key=AIzaSyB__7EZnr4clFGF1qA7SOb__GxN0Ll9Yxw&callback=myMap',array(), '', true);
  //wp_enqueue_script('sd_restaurant_jquery_script','//code.jquery.com/jquery-1.10.1.min.js',array(), '1.0', true);
  wp_enqueue_style('sd_restaurant_animation_style',get_theme_file_uri('/style/animations.css'));
  wp_enqueue_style('sd_restaurant_google_font_style', '//fonts.googleapis.com/css?family=Amita');
  wp_enqueue_style('sd_restaurant_google_font_style', '//fonts.googleapis.com/css?family=Shrikhand');
  wp_enqueue_style('sd_restaurant_font_style', '////cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('sd_restaurant_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','sd_restaurant_files');
