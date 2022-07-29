<?php
function add_files()
{
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap');
  wp_enqueue_style('style-css', get_template_directory_uri() . '/src/css/style.css');
  wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js');
};

add_action('wp_enqueue_scripts', 'add_files');
