<?php get_header(); ?>

<div class="outer-container">
  <img src="<?php echo get_template_directory_uri(); ?>/images/me.png" class="me"/>
  <div class="container">
    <div class="content-header default-background-header home-header">
        <div class="header-inner">
            <div class="breadcrumb">
                <div class="breadcrumb-inner">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
            <div class="title-section">
                <h1 class="post-title">404 Not Found</h1>
            </div>
        </div>
    </div>
    <article class="post">
        <a href="<?php bloginfo("url"); ?>" class="button404">回首頁看看吧！</a>
    </article>
  </div>
</div>
<?php get_footer(); ?>