<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

<main id="content">

    <h1><?php echo get_the_title() ?></h1>

    <?php include(locate_template('components/services_block.php')); ?>

    <?php

    if(have_posts()) {
        while(have_posts()) {
            the_post();
            the_content();
        }
    }

    ?>

</main>

<?php get_footer(); ?>

