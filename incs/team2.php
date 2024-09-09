<section class="dualHeadings teamTopSection <?php echo get_field('team_top_background_color'); ?>">
    <div class="container">
        <?php if(get_field('team_top_section_title', 'option')): ?>
            <h2 class="sectionTitle"><?php echo get_field('team_top_section_title', 'option'); ?></h2>
        <?php endif; ?>

        <div class="subSection">
            <?php if(get_field('team_top_title', 'option')): ?>
            <h3 class="subsectionTitle"><?php echo get_field('team_top_title', 'option'); ?></h3>
            <?php endif; ?>

            <?php
            // Check rows exists.
            if( have_rows('team_top_teams', 'option') ): ?>
                <div class="teamColumns fiveColumns">
                <?php $offset = 10; ?>
                <?php
                // Loop through rows.
                while( have_rows('team_top_teams', 'option') ) : the_row(); ?>
                <div class="column teamcolumn aos-init aos-animate" data-aos="fade-up" data-aos-offset="<?php echo $offset; ?>" data-aos-easing="ease-in-sine" data-aos-duration="600">

                    <div class="imgCon">
                        <?php if(get_sub_field('team_top_image')): ?>
                            <?php $id = get_sub_field('team_top_image'); ?>
                            <?php $image_attributes = wp_get_attachment_image_src($id, $size='team', $icon = false); ?>
                            <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                        <?php else: ?>
                            <img src="<?php bloginfo('template_directory'); ?>/images/no-photo.png" width="186" height="200" alt="No Image available" />
                        <?php endif; ?>

                        <a href="#" class="poplink">
                        <svg class="fill-current" width="21" height="21"><use href="#i-icon" /></svg>
                        </a>
                    </div>

                    <div class="details">
                        <?php if(get_sub_field('team_top_name')): ?>
                        <h5 class="article-title-small"><?php echo get_sub_field('team_top_name'); ?></h5>
                        <?php endif; ?>

                         <?php if(get_sub_field('team_top_title')): ?>
                        <span><?php echo get_sub_field('team_top_title'); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <?php if(get_sub_field('team_top_image')): ?>
                                    <?php $id = get_sub_field('team_top_image'); ?>
                                    <?php $image_attributes = wp_get_attachment_image_src($id, $size='team', $icon = false); ?>
                                    <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                                <?php else: ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/photo.png" srcset="<?php bloginfo('template_directory'); ?>/images/photo.png 1x, <?php bloginfo('template_directory'); ?>/images/photo@2x.png 2x, <?php bloginfo('template_directory'); ?>/images/photo@3x.png 3x" alt="No Photo">
                                <?php endif; ?>

                                <div class="bottom">
                                    <?php if(get_sub_field('team_top_name')): ?>
                                    <h4 class="article-title-small"><?php echo get_sub_field('team_top_name'); ?></h4>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('team_top_title')): ?>
                                    <span class="body2light"><?php echo get_sub_field('team_top_title'); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <?php echo $vari = apply_filters('the_content', get_sub_field('team_top_details')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $offset = $offset + 10; ?>
                <?php
                // End loop.
                endwhile; ?>
                </div>
            <?php
                endif;
            ?>

            <?php if(get_field('team_top_bottom_line', 'option')): ?>
            <p class="article-title-small text-center"><?php echo get_field('team_top_bottom_line', 'option'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="dualHeadings teamBottomSection <?php echo get_field('team_bottom_background_color'); ?>">
    <div class="container">
        <div class="subSection">
            <?php if(is_page_template('page-about.php')): ?>
                <?php if(get_field('team_bottom_about_title', 'option')): ?>
                    <h2 class="h2 mb-8 text-center"><?php echo get_field('team_bottom_about_title', 'option'); ?></h2>
                <?php endif; ?>
            <?php else: ?>
                <?php if(get_field('team_bottom_title', 'option')): ?>
                    <h3 class="subsectionTitle"><?php echo get_field('team_bottom_title', 'option'); ?></h3>
                <?php endif; ?>
            <?php endif; ?>

            <div class="dualColumn gap">
                <?php if( have_rows('team_bottom_left_columns', 'option') ): ?>
                <div class="left column">
                    <?php while( have_rows('team_bottom_left_columns', 'option') ) : the_row(); ?>
                    <div>
                        <?php if(get_sub_field('title')): ?>
                        <h3 class="h3"><?php echo get_sub_field('title'); ?></h3>
                        <?php endif; ?>
                        
                        <?php echo $vari = apply_filters('the_content', get_sub_field('content')); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <?php if( have_rows('team_bottom_right_columns', 'option') ): ?>
                <div class="right column">
                    <?php while( have_rows('team_bottom_right_columns', 'option') ) : the_row(); ?>
                    <div>
                        <?php if(get_sub_field('title')): ?>
                        <h3 class="h3"><?php echo get_sub_field('title'); ?></h3>
                        <?php endif; ?>
                        
                        <?php echo $vari = apply_filters('the_content', get_sub_field('content')); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>