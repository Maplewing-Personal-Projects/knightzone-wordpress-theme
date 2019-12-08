<?php get_header(); ?>
<?php 
  $have_post = have_posts();
  if($have_post) the_post();
?>

<div class="outer-container">
  <img src="<?php echo get_template_directory_uri(); ?>/images/me.png" class="me"/>
  <div class="container">
    <?php
      if($have_post):
    ?>
        <div class="page-header">
            <div class="header-inner">
              <div class="breadcrumb">
                <div class="breadcrumb-inner">
                  <?php the_breadcrumb(); ?>
                </div>
              </div>
              <div class="title-section">
                <h1 class="post-title"><?php the_title() ?></h1>
              </div>
            </div>
        </div>
    <?php
      endif;
    ?>
    <?php
      if($have_post):
    ?>
        <article class="post">
          <?php the_content() ?>
        </article>
    <?php 
      endif;
    ?>
      <section class="comment-area">
    <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>
      </section>
  </div>
</div>
<?php get_footer(); ?>