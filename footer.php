<footer class="site-footer">
    <div class="footer-container">
        <section><?php bloginfo('name') ?> ( <?php bloginfo('url') ?> ) By 灆洢 ( Maplewing )</section>
        <nav>
            <?php wp_nav_menu( array( 
            'theme_location' => 'extra-menu',
            'menu_class' => 'extra-menu' ) ); ?>
        </nav>
    </div>
</footer>
 
<?php wp_footer() ?>
</div> <!-- close for div.background-mask -->
</body>
</html>