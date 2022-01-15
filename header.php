<!DOCTYPE html>
<html <?php language_attributes( ); ?>> <!-- multi-language supports -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/65fe53fca3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri( ); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

</head>

<body <?php body_class( ); ?>>
    <header>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div id="cover">
                <div id="header-title"><?php bloginfo( 'name' ); ?></div>
                <div id="header-discription"><?php bloginfo( 'description' ); ?></div>
            </div>
        </a>
        <?php get_template_part('modules/headermenu'); ?>
        <?php if( function_exists('the_ad_placement') ) { the_ad_placement('manual'); }; ?>
    <?php get_template_part('modules/categories'); ?>
    </header>
