<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<header>
    <img src="http://localhost/wp-content/uploads/2026/03/banner.jpg" width="100%" height="auto">
</header>
 <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <?php wp_nav_menu([
            'theme_location' => 'main'
        ]) ?>
<main>
    <aside class="site_sidebar">
        <?php dynamic_sidebar('tp-sidebar'); ?>
    </aside>