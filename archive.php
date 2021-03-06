<?php get_header(); ?>

<div class="outer-container">
  <img src="<?php echo get_template_directory_uri(); ?>/images/me.png" class="me"/>
  <div class="container">
    <div class="content-header default-background-header archive-header">
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
                <a class="post-item-inner" href="<?php the_permalink(); ?>">
                <div class="post-item-thumbnail" 
                    style="background: <?php if(has_post_thumbnail()): ?> url('<?php the_post_thumbnail_url(); ?>') <?php endif; ?> #999; background-size: cover; background-position: center center;">
                </div>
                <div class="post-item-meta">
                    <div class="post-item-category">
                        <span class="header-item">
                            <i class="fas fa-clock"></i> <?php echo get_the_date('Y-m-d'); ?> <?php the_time('H:i:s'); ?></p>
                        </span>
                        <span class="header-item">
                            <i class="fas fa-folder-open"></i> <?php the_category_without_link(",&nbsp;"); ?>
                        </span>
                        <?php if(has_tag()): ?> 
                            <span class="header-item">
                                <i class="fas fa-tags"></i> <?php the_tags_without_link("", ",&nbsp;"); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="post-item-title">
                       <?php the_title() ?>
                    </div>
                </div>
                </a>
            </li>
        <?php
            endwhile;
        ?>
            </ul>
        <div class="pagination-section">
        <?php
        the_posts_pagination(array(
            'end_size' => 5,
            'mid_size' => 5,
            'prev_text' => '<',
            'next_text' => '>',
        ));
        endif;
        ?>
        </div>
    </article>
  </div>
</div>
<?php get_footer(); ?>