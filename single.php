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
        <div class="post-header parallax-window" data-parallax="scroll" data-image-src="<?php if(has_post_thumbnail()): the_post_thumbnail_url(); endif; ?>;">
            <div class="header-inner">
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
    </div>
  </div>
</div>
<?php get_footer(); ?>