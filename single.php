<?php get_header(); ?>
<?php 
  $have_post = have_posts();
  if($have_post) the_post();
?>

<div class="outer-container">
  <div class="container">
    <?php
      if($have_post && has_post_thumbnail()):
    ?>
        <div class="thumbnail-section" style="background: url('<?php the_post_thumbnail_url(); ?>') white; background-size: cover; background-position: center center;">
        </div>
    <?php
      endif;
    ?>
    <?php
      if($have_post):
    ?>
        <div class="post-header">
          <h1 class="post-title"><?php the_title() ?></h1>
        </div>
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