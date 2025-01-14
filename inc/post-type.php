<?php


function swiper_gallery_post_type()
{
    $labels = array(
        'name'               => _x( 'Galleries', 'gallery' ),
        'singular_name'      => _x( 'Photo', 'gallery' ),
        'add_new'            => _x( 'Add New', 'Photo' ),
        'add_new_item'       => __( 'Add New Photo' ),
        'edit_item'          => __( 'Edit Photo' ),
        'new_item'           => __( 'New Photo' ),
        'all_items'          => __( 'All Photos' ),
        'view_item'          => __( 'View Photos' ),
        'search_items'       => __( 'Search Photos' ),
        'not_found'          => __( 'No Photos found' ),
        'not_found_in_trash' => __( 'No Photos found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Swiper Gallery'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => '',
        'public'        => true,
        'show_ui'        => true,
        'capability_type'  => 'post',
        'menu_position' => 26,
        'supports'      => array( 'title' , 'thumbnail'),
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-format-gallery',
    );

    register_post_type( 'gallery', $args );
}

add_action('init', 'swiper_gallery_post_type');