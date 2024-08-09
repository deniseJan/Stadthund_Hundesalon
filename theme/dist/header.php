<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a href="#content" class="screen-reader-text"><?php _e( 'Skip to Content', 'mosheim'); ?></a>

<nav id="navbar">
    <div class="container">
        <div id="brand">
            <?php
            if(function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>
        <input type="checkbox" id="nav-toggle">
        <label for="nav-toggle" id="menu-button">
            <span id="menu-button-icon" aria-hidden="true"></span>
        </label>

        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_id' => 'nav-main',
            'menu_class' => 'nav-menu',
            'depth' => 2,
            'fallback_cb' => false
        ]);
        ?>

    </div>
</nav>