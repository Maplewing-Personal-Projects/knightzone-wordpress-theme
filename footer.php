<footer class="site-footer">
    <div class="footer-container">
        <section class="left"><?php bloginfo('name') ?> ( <?php bloginfo('url') ?> ) By 灆洢 ( Maplewing )</section>
        <?php wp_nav_menu( array( 
        'theme_location' => 'extra-menu',
        'menu_class' => 'extra-menu right' ) ); ?>
    </div>
</footer>
 
<?php wp_footer() ?>
</div> <!-- close for div.background-mask -->
</body>
</html>