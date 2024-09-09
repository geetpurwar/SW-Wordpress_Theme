<?php if(get_field('select_category_1', 'option')): ?>
<?php $catField = (array) get_field('select_category_1', 'option'); ?>
<section class="blogposts">
    <div class="container">
        <div class="sectionTopBottom">
            <h2 class="sectionTitle"><?php echo $catField['name']; ?></h2>
        </div>
    </div>

    <div class="container">
        <div class="gridBloglistContainer">
            <?php if($catField['count'] >= 1): ?>
            <?php
            $args = array (
                // 'post_type'              => array( 'jobs' ),
                // 'nopaging'               => false,
                'cat' => $catField['id'],
                'posts_per_page' => '1',
                'offset' => 0,
                // 'ignore_sticky_posts'    => false,
                // 'post__not_in' => array(get_the_ID())
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php include (TEMPLATEPATH . '/incs/posts/full-width.php'); ?>
            <?php
                endwhile;
            endif; 

            wp_reset_postdata();
            ?>
            <?php endif; ?>

            <div class="gridBloglist dualColumnGrid">
                <?php if($catField['count'] >= 3): ?>
                <?php
                $args = array (
                    // 'post_type'              => array( 'jobs' ),
                    // 'nopaging'               => false,
                    'cat' => $catField['id'],
                    'posts_per_page' => '2',
                    'offset' => 1,
                    // 'ignore_sticky_posts'    => false,
                    // 'post__not_in' => array(get_the_ID())
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) : 
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php include (TEMPLATEPATH . '/incs/posts/dual-column.php'); ?>
                <?php
                    endwhile;
                endif; 

                wp_reset_postdata();
                ?>
                <?php endif; ?>
            </div>

            <div class="gridBloglist fourColumnGrid">
                <?php if($catField['count'] >= 4): ?>
                <?php
                $args = array (
                    // 'post_type'              => array( 'jobs' ),
                    // 'nopaging'               => false,
                    'cat' => $catField['id'],
                    'posts_per_page' => '4',
                    'offset' => 3,
                    // 'ignore_sticky_posts'    => false,
                    // 'post__not_in' => array(get_the_ID())
                );

                $query = new WP_Query( $args );

                if ( $query->have_posts() ) : 
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php include (TEMPLATEPATH . '/incs/posts/quad-column.php'); ?>
                <?php
                    endwhile;
                endif; 

                wp_reset_postdata();
                ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="buttonLine">
            <a href="<?php echo esc_url( get_category_link($catField['term_id'])); ?>" class="button-blue">All from <?php echo $catField['name']; ?></a>
        </div>
    </div>
</section>
<?php endif; ?>