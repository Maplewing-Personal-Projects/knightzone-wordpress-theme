<?php get_header(); ?>

<div class="outer-container">
  <img src="<?php echo get_template_directory_uri(); ?>/images/me.png" class="me"/>
  <div class="container">
    <div class="content-header home-header"
        style="background: url('<?php header_image(); ?>'); background-size: cover; background-position: center center;">
        <div class="home-header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/theme_logo.png" class="theme-logo"/>
        </div>
    </div>
    <article class="post">
        <?php
            $home_page = get_post(3667);
            $content = $home_page->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]>', $content);
            echo $content;
        ?>
        <h2>分類瀏覽</h2>
        <div class="list-total-categories">
        <?php
            wp_list_categories();
        ?>
        </div>
        <h2>最新文章</h2>
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
        <h2>最新回應</h2>
        <ul>
            <?php $args_comments = array('number' => 10, 'status' => 'approve');
            $recent_comments = get_comments($args_comments);
            foreach ($recent_comments as $r) {
                echo '<li><a href="'. get_comment_link($r->comment_ID) .'" title="'. __('Date/time:', 'shapespace') . $r->comment_date .'">';
                echo $r->comment_author .'</a>: ';
                echo shapeSpace_truncate_string(get_comment_excerpt($r->comment_ID), 12) .'</li>';
            } ?>
        </ul>
    </article>
  </div>
</div>
<?php get_footer(); ?>