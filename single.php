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
              <div class="breadcrumb">
                <div class="breadcrumb-inner">
                  <?php the_breadcrumb(); ?>
                </div>
              </div>
              <div class="title-section">
                <h1 class="post-title"><?php the_title() ?></h1>
                <div class="category-section">
                  <span class="header-item">
                    <i class="fas fa-folder-open"></i> <?php the_category(",&nbsp;"); ?>
                  </span>
                  <?php if(has_tag()): ?> 
                    <span class="header-item">
                      <i class="fas fa-tags"></i> <?php the_tags("", ",&nbsp;"); ?>
                    </span>
                  <?php endif; ?>
                </div>
                <div class="author-section">
                  <span class="header-item">
                    <i class="fas fa-user"></i> <?php echo get_avatar(get_the_author_email(), "40"); ?><?php the_author(); ?>
                  </span>
                  <span class="header-item">
                    <i class="fas fa-clock"></i> <?php the_date('Y-m-d'); ?> <?php the_time('H:i:s'); ?></p>
                  </span>
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
      <section class="comment-area">
    <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>
      </section>
    </div>
  </div>
</div>
<?php get_footer(); ?>