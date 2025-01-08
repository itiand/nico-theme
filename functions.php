<?php

function nico_files(){
  wp_enqueue_style('nico_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'nico_files');