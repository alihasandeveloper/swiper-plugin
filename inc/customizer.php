<?php

function swiper_customize_register($wp_customize)
{
    $wp_customize->add_section('gallery_section', array(
        'title' => 'Gallery Slide Effects Customizer',
        'description' => 'Customize the slide effects for each gallery item.',
    ));
    $wp_customize->add_setting('slides_effect', array(
        'type' => 'theme_mod',
        'default' => 'coverflow',
    ));
    $wp_customize->add_control('slides_effect', array(
        'type' => 'select',
        'label' => 'Slide Effect',
        'section' => 'gallery_section',
        'settings' => 'slides_effect',
        'choices' => array(
            'cube' => 'Cube',
            'coverflow' => 'Coverflow',
            'freemode' => 'freemode',
        )
    ));
}

add_action('customize_register', 'swiper_customize_register');
