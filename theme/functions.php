<?php

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

if ( function_exists('register_sidebar') )
    register_sidebar();

function register_my_post_types() {
            $portfolio_labels = array(
                "name" => __( 'Portfolio Items', '' ),
                "singular_name" => __( 'Portfolio', '' ),
            );
            $portfolio = array(
                "label" => __( 'Portfolio', '' ),
                "labels" => $portfolio_labels,
                "description" => "",
                "public" => true,
                "publicly_queryable" => true,
                "show_ui" => true,
                "show_in_rest" => false,
                "rest_base" => "",
                "has_archive" => true,
                "show_in_menu" => true,
                "exclude_from_search" => false,
                "menu_icon" => 'dashicons-format-quote',
                "capability_type" => "post",
                "map_meta_cap" => true,
                "hierarchical" => false,
                "rewrite" => array( "slug" => "portfolio", "with_front" => true ),
                "query_var" => true,
                "supports" => array( "title", "editor", "excerpt", "thumbnail", "author", "page-attributes", "post-formats" ),
            );
            register_post_type( "portfolio", $portfolio );
        }
        add_action( 'init', 'register_my_post_types' );
?>
