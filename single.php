<?php get_header(); ?>
<?php 
  $have_post = have_posts();
  if($have_post) the_post();
?>

<div class="outer-container">
  <?php
    if($have_post && has_post_thumbnail()):
  ?>
    <div class="thumbnail-section" style="background: url('<?php the_post_thumbnail_url(); ?>') white; background-size: cover; background-position: center center;">
    </div>
    <?php
      endif;
    ?>
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