<?php


function swiper_scripts_and_styles()
{
//    style enqueue

    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_style('swiper-custom-css', plugin_dir_url(__FILE__) . '../assets/css/style.css', array('swiper-css'));

//    scripts enqueue
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('swiper-custom-js', plugin_dir_url(__FILE__) . '../assets/js/swiper.js', array('swiper-js'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'swiper_scripts_and_styles');