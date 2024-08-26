<footer class="footer-section">

    <nav id="nav-footer ">

        <?php
        wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'nav-menu',
            'depth' => 1,
            'fallback_cb' => false,
        ]);
        ?>
    </nav>

</footer>

<div id="to-top"><?php _e('Top', 'stadthund'); ?></div>

<?php wp_footer(); ?>

</body>
</html>