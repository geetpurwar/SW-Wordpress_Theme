<section class="testimonialRatings">
    <div class="container">
        <?php if(get_field('testimonial_rating_title', 'option')): ?>
        <h2 class="sectionTitle"><?php echo get_field('testimonial_rating_title', 'option'); ?></h2>
        <?php endif; ?>

        <?php if( have_rows('testimonials', 'option') ): ?>
        <div class="fourColumn">
        <?php $offset = 50; ?>
        <?php while( have_rows('testimonials', 'option') ) : the_row(); ?>            
            <div class="column testimonial"
               >
                <?php if(get_sub_field('author')): ?>
                <h6 class="author"><?php echo get_sub_field('author'); ?></h6>
                <?php endif; ?>

                <?php if(get_sub_field('title')): ?>
                <span><?php echo get_sub_field('title'); ?></span>
                <?php endif; ?>

                <?php if(get_sub_field('rating')): ?>
                <div class="rating">
                    <?php
                        $totalStars = 5;
                        $goldenStars = get_sub_field('rating');
                        $grayStars = $totalStars - $goldenStars;
                    ?>
                    <?php for($i = 0; $i < $goldenStars; $i++){ ?>
                        <span class="star"><svg class="fill-current text-stars" width="18" height="18"><use href="#star" /></svg></span>
                    <?php } ?>

                    <?php for($i = 0; $i < $grayStars; $i++){ ?>
                        <span class="star"><svg class="fill-current text-stars-gray" width="18" height="18"><use href="#star" /></svg></span>
                    <?php } ?>
                    
                </div>
                <?php endif; ?>

                <?php if(get_sub_field('testimonial')): ?>
                <div class="details"><?php echo get_sub_field('testimonial'); ?></div>
                <?php endif; ?>
            </div>
        <?php $offset = $offset + 50; ?>
        <?php endwhile; ?>
        </div>
        <?php endif; ?>
        
        <?php if( have_rows('testimonial_reviews', 'option') ): ?>
        <?php $offset = 50; ?>
        <div class="iconRatingColumns 
        <?php if(! is_page_template('page-security.php')): ?>
        <?php if(! get_field('testimonial_hide_bottom_testimonial', 'option')): ?>
        withBottomBorder
        <?php endif; ?>
        <?php endif; ?>
        ">
            <?php while( have_rows('testimonial_reviews', 'option') ) : the_row(); ?>
            <div class="column">
                <?php $id = get_sub_field('icon'); ?>
                <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
                <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />

                <?php if(get_sub_field('rating')): ?>
                <div class="rating">
                    <?php
                        $totalStars = 5;
                        $goldenStars = get_sub_field('rating');
                        $grayStars = $totalStars - $goldenStars;
                    ?>
                    <?php for($i = 0; $i < $goldenStars; $i++){ ?>
                        <span class="star"><svg class="fill-current text-stars" width="18" height="18"><use href="#star" /></svg></span>
                    <?php } ?>

                    <?php for($i = 0; $i < $grayStars; $i++){ ?>
                        <span class="star"><svg class="fill-current text-stars-gray" width="18" height="18"><use href="#star" /></svg></span>
                    <?php } ?>
                </div>
                <?php endif; ?>

                <?php if(get_sub_field('bottomline')): ?>
                    <span><?php echo get_sub_field('bottomline'); ?></span>
                <?php endif; ?>
            </div>
            <?php $offset = $offset + 50; ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if(! is_page_template('page-security.php')): ?>
        <?php if(! get_field('testimonial_hide_bottom_testimonial', 'option')): ?>
        <div class="dualColumnTestimonial">
            <div class="column">
                <?php if(get_field('testimonial_bottom_image', 'option')): ?>
                <?php $id = get_field('testimonial_bottom_image', 'option'); ?>
                <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
                <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                <?php endif; ?>

                <?php if(get_field('testimonial_button_title', 'option') && get_field('testimonial_bottom_link_internal', 'option')): ?>
                    <div class="buttonLine"><a href="<?php echo get_permalink(get_field('testimonial_bottom_link_internal', 'option')) ?>" class="button"><?php echo get_field('testimonial_button_title', 'option'); ?></a></div>
                <?php else: ?>
                    <?php if(get_field('testimonial_button_title', 'option') && get_field('testimonial_bottom_link_external', 'option')): ?>
                    <div class="buttonLine"><a href="<?php echo get_field('testimonial_bottom_link_external', 'option'); ?>" class="button"><?php echo get_field('testimonial_button_title', 'option'); ?></a></div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <div class="column">
                <?php if(get_field('testimonial_bottom_title', 'option')): ?>
                <h3 class="h3"><?php echo get_field('testimonial_bottom_title', 'option'); ?></h3>
                <?php endif; ?>

                <?php if(get_field('testimonial_bottom', 'option')): ?>
                <p class="quote"><?php echo get_field('testimonial_bottom', 'option'); ?></p>
                <?php endif; ?>

                <?php if(get_field('testimonial_button_title', 'option') && get_field('testimonial_bottom_link_internal', 'option')): ?>
                    <div class="buttonLine"><a href="<?php echo get_permalink(get_field('testimonial_bottom_link_internal', 'option')) ?>" class="button"><?php echo get_field('testimonial_button_title', 'option'); ?> <img src="<?php bloginfo('template_directory'); ?>/images/svgs/arrow.svg" alt="Arrow" class="ml-2"></a></div>
                <?php else: ?>
                    <?php if(get_field('testimonial_button_title', 'option') && get_field('testimonial_bottom_link_external', 'option')): ?>
                    <div class="buttonLine"><a href="<?php echo get_field('testimonial_bottom_link_external', 'option'); ?>" class="button"><?php echo get_field('testimonial_button_title', 'option'); ?> <img src="<?php bloginfo('template_directory'); ?>/images/svgs/arrow.svg" alt="Arrow" class="ml-2"></a></div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</section>