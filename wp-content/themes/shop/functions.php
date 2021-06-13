<?php
function my_custom_wc_theme_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'my_custom_wc_theme_support');

function initTheme()
{
    add_filter('use_block_editor_for_post', '__return_false');
    register_nav_menu('header-top', __('Menu top'));
    register_nav_menu('header-main', __('Menu chính'));
    register_nav_menu('footer-menu', __('Menu footer'));

    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Cột bên',
            'id' => 'sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3><i class="fa fa-bars"></i>',
            'after_title' => '</h3>'
        ));
    }

    function setpostview($postID)
    {
        $count_key = 'views';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, true);
        }
    }

    function getpostviews($postID)
    {
        $count_key = 'views';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return '0';
        }
        return $count;
    }
}

add_action('init', 'initTheme');

function slider_post_type()
{
    $label = array(
        'name' => 'Image slider',
        'singular_name' => 'Image slider'
    );

    $args = array(
        'labels' => $label,
        'description' => 'Image slider',
        'supports' => array(
            'title',
            'thumbnail',
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => '',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
    register_post_type('slider', $args);
}

add_action('init', 'slider_post_type');

function percentSale($price, $price_sale)
{
    $sale = ($price_sale * 100) / $price;
    $percent = 100 - $sale;
    return number_format($percent);
}

function custom_remove_action_woo()
{
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
}

add_action('init', 'custom_remove_action_woo');

