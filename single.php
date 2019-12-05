<?php get_header(); ?>
<?php 
  $have_post = have_posts();
  if($have_post) the_post();
?>
<?php
  if($have_post && has_post_thumbnail()):
?>
<div class="content-section">
  <div class="thumbnail-section">
    <div class="thumbnail-wrapper">
      <div class="thumbnail-image" style="background: url('<?php the_post_thumbnail_url(); ?>') fixed; background-size: cover; background-position: center center;">
      </div>
    </div>
  </div>
  <?php
    endif;
  ?>

  <div class="outer-container">
    <div class="container">
    <?php
      if($have_post):
    ?>
      <article class="post">
        <h1 class="post-title"><?php the_title() ?></h1>
        <?php the_content() ?>
      </article>
    <?php 
      endif;
    ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>