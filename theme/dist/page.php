<?php get_header(); ?>

<main id="content">

    <?php

    if(have_posts()) {
        while(have_posts()) {
            the_post();
            the_content();
        }
    }

    ?>

</main>