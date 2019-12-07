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
          style="background:  rgba(0, 0, 0, 0.6), <?php if(has_post_thumbnail()): ?> url('<?php the_post_thumbnail_url(); ?>') <?php endif; ?>; background-size: cover; background-position: center center;">
            <h1 class="post-title"><?php the_title() ?></h1>
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