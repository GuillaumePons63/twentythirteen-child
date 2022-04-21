<?php

?>

</div><!-- #main -->
<footer id="colophon" class="site-footer-custom" role="contentinfo">
    <?php the_custom_logo() ?>
    <?php wp_nav_menu([
                  'theme_location' => "foot",
                  'container' => true,
                  'menu_class' => 'nav-menu-bas'
                 ])        
                ?>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>