<section class="gridpostRow">
    <div class="container">
            <?php
            $args = array ('posts_per_page' => '10', 'offset' => 0);
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php include (TEMPLATEPATH . '/incs/posts/list-row.php'); ?>
                <?php endwhile; ?>
                <?php endif;  ?>
                wp_reset_postdata();
            ?>
    </div>

    <div class="container">
        <div class="buttonLine">
            <a href="#" class="button-blue loadMore">Load more...</a>
        </div>
    </div>
</section>