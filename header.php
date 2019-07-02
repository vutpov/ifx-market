<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php
    if ( ! function_exists( '_wp_render_title_tag' ) ) {
        function theme_slug_render_title() {
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
        }
        add_action( 'wp_head', 'theme_slug_render_title' );
    }
    ?>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto+Condensed|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/css/style.css" />

    

</head>
<body id="body">
    <a href="#body" class="sticky-bottom">
        <div><i class="fas fa-caret-up"></i></div>
        Top
    </a>
    <?php require_once('navbar.php'); ?>