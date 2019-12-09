<footer class="site-footer">
    <div class="category-navigator">
        <h2>分類瀏覽</h2>
        <div class="list-total-categories">
        <?php
            wp_list_categories(array("title_li" => "全部分類"));
        ?>
        </div>
    </div>
    <div class="tag-navigator">
        <h2>標籤瀏覽</h2>
        <div class="list-total-tags">
        <?php
            the_all_tags();
        ?>
        </div>
    </div>
    <div class="footer-container">
        <section class="copyright"><?php bloginfo('name') ?> ( <?php bloginfo('url') ?> ) By 灆洢 ( Maplewing )</section>
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