<?php get_header(); ?>

<div class="outer-container">
  <img src="<?php echo get_template_directory_uri(); ?>/images/me.png" class="me"/>
  <div class="container">
    <div class="archive-header">
        <div class="header-inner">
            <div class="breadcrumb">
                <div class="breadcrumb-inner">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
            <div class="title-section">
                <h1 class="post-title"><?php the_archive_title() ?></h1>
            </div>
        </div>
    </div>
    <article class="post">
        <?php
        if(have_posts()):
        ?>
            <ul class="post-item-list">
        <?php
            while(have_posts()): the_post();
        ?>
            <li class="post-item">
                <div class="post-item-thumbnail" 
                    style="background: <?php if(has_post_thumbnail()): ?> url('<?php the_post_thumbnail_url(); ?>') <?php endif; ?> #999; background-size: cover; background-position: center center;">
                </div>
                <div class="post-item-category">
                    <span class="header-item">
                        <i class="fas fa-folder-open"></i> <?php the_category(",&nbsp;"); ?>
                    </span>
                    <?php if(has_tag()): ?> 
                        <span class="header-item">
                            <i class="fas fa-tags"></i> <?php the_tags("", ",&nbsp;"); ?>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="post-item-title">
                    <a href="<?php the_permalink(); ?>"><h1><?php the_title() ?></h1></a>
                </div>
            </li>
        <?php
            endwhile;
        ?>
            </ul>
        <?php
        the_posts_pagination();
        endif;
        ?>
    </article>
  </div>
</div>
<?php get_footer(); ?>