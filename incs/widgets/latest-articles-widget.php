<?php if(get_field('display_latest_article_widget', 'options')): ?>
<div class="widget">
    <?php if(get_field('latest_article_widget_title', 'options')): ?>
    <h4 class="widgetTitle"><?php echo get_field('latest_article_widget_title', 'options'); ?></h4>
    <?php endif; ?>
    <div class="widgetContent">
        <div class="sidebarNews">
            <?php
            $args = array (
                // 'post_type'              => array( 'jobs' ),
                // 'nopaging'               => false,
                // 'cat' => get_field('market_news_widget_category', 'options'),
                'posts_per_page' => '4',
                // 'ignore_sticky_posts'    => false,
                'post__not_in' => array(get_the_ID())
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php include (TEMPLATEPATH . '/incs/widgets/single-news.php'); ?>
            <?php
                endwhile;
            endif; 

            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php endif; ?>