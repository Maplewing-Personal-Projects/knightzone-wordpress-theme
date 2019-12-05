<?php get_header(); ?>
<div class="content-section">
<div class="outer-container">
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
    endif;
  ?>
  </div>
</div>
</div>
<?php get_footer(); ?>