<?php get_header(); ?>
<?php 
  $have_post = have_posts();
  if($have_post) the_post();
?>

<div class="outer-container">
  <div class="container">
    <?php
      if($have_post):
    ?>
        <div class="post-header" 
          style="background: <?php if(has_post_thumbnail()): ?> url('<?php the_post_thumbnail_url(); ?>') <?php endif; ?>; background-size: cover; background-position: center center;">
            <div class="header-inner">
              <div class="title-section">
                <h1 class="post-title"><?php the_title() ?></h1>
                <div class="category-section">
                  <?php the_category(", "); ?> <?php if(has_tag()): ?> | <?php the_tags("", ", "); endif; ?>
                </div>
                <div class="author-section">
                  <?php echo get_avatar(get_the_author_email(), "60"); ?> <?php the_author(); ?> 
                </div>
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
    </div>
  </div>
</div>
<?php get_footer(); ?>