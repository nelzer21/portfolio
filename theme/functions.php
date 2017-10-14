<?php

add_action( 'init', 'register_my_menu' );

function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

if ( function_exists('register_sidebar') )
    register_sidebar();

add_custom_background();

add_theme_support( 'automatic-feed-links' );

$response = "";

function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

    if(!$human == 0){
      if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
      else {

      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else
      {

    if(empty($name) || empty($message)){
      my_contact_form_generate_response("error", $missing_content);
    }
    else
    {

$sent = wp_mail($to, $subject, strip_tags($message), $headers);
if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
    }
      }
      }
    }
    else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

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
