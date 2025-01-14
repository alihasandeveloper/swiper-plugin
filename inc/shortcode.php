<?php

function swiper_gallery_loops()
{
    ob_start();
    $args = array(
        'post_type' => 'gallery',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    $gallery = new WP_Query($args);

    if ($gallery->have_posts()) : ?>
        <div class="swiper-container mySwiper <?php echo esc_attr(get_theme_mod('slides_effect')); ?>">
            <div class="swiper-wrapper">
                <?php while ($gallery->have_posts()) : $gallery->the_post(); ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" />
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    <?php endif;
    wp_reset_postdata();
    return ob_get_clean();
}

add_shortcode('swiper_gallery', 'swiper_gallery_loops');
