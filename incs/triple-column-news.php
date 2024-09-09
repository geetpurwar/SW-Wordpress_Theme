<section class="tripleColumnNews <?php echo get_field('tcn_background_color'); ?>">
    <div class="container">
        <?php if(get_field('tcn_section_title')): ?>
        <h2 class="sectionTitle max-w-xl"><?php echo get_field('tcn_section_title'); ?></h2>
        <?php endif; ?>

        <?php if( have_rows('tcn_subsection') ): ?>
            <?php while( have_rows('tcn_subsection') ) : the_row(); ?>
                <div class="subSection">
                    <?php if(get_sub_field('title')): ?>
                    <h3 class="subsectionTitle"><?php echo get_sub_field('title'); ?></h3>
                    <?php endif; ?>

                    <?php if(get_sub_field('category')): ?>
                    <?php
                    $args = array (
                        // 'post_type'              => array( 'jobs' ),
                        // 'nopaging'               => false,
                        'cat' => get_sub_field('category'),
                        'posts_per_page' => '3',
                        'offset' => 0,
                        // 'ignore_sticky_posts'    => false,
                        // 'post__not_in' => array(get_the_ID())
                    );

                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) : ?>
                    <div class="tripleColumn">
                        <?php $offset = 50; ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="column">
                            <?php if(get_field('article_featured_image')): ?>
                                <?php $id = get_field('article_featured_image'); ?>
                                <?php $image_attributes = wp_get_attachment_image_src($id, $size='image-352-198', $icon = false); ?>
                                <div class="imgCon">
                                    <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                                </div>
                            <?php else: ?>
                                <div class="imgCon">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/featured.png" srcset="<?php bloginfo('template_directory'); ?>/images/featured.png 1x, <?php bloginfo('template_directory'); ?>/images/featured@2x.png 2x, <?php bloginfo('template_directory'); ?>/images/featured@3x.png 3x" alt="No Featured Image">
                                </div>
                            <?php endif; ?>
                            
                            <div class="details">
                                <span class="caption"><?php the_time( 'd F Y' ); ?></span>
                                <h4 class="article-title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <?php if(has_tag()): ?><div class="tags"><?php the_tags(); ?></div><?php endif; ?>
                            </div>
                        </div>
                        <?php $offset = $offset + 50; ?>
                    <?php
                        endwhile;
                    endif; 

                    wp_reset_postdata();
                    ?>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>    
        <?php endif; ?>
        
        <div class="buttonLine">
            <a href="#" class="button-blue max-w-224">Read more</a>
        </div>
    </div>
</section>