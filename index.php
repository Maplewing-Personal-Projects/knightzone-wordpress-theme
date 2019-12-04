<?php get_header(); ?>
<div class="container">
<?php
  if(have_posts()):
    while(have_posts()): the_post(); ?>
      <article class="post">
        <h1 class="post-title"><?php the_title() ?></h1>
        <?php the_content() ?>
      </article>
  <?php 
    endwhile;
  else:
    echo '<p>There are no posts!</p>';
  endif;
?>
</div>
<?php get_footer(); ?>