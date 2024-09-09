<section class="verticalImagesDualImageParallel <?php echo get_field('pic_background_color'); ?>">
    <div class="container">
        <?php if(get_field('pic_section_title')): ?>
        <div class="sectionTopBottom">
            <h2 class="sectionTitle"><?php echo get_field('pic_section_title'); ?></h2>
        </div>
        <?php endif; ?>

        <div class="ParallelImagesText">
            <div class="ParallelImageColumn">
                <?php if(get_field('pic_column_1_image')): ?>
                <div class="column">
                    <?php $imageId1 = get_field('pic_column_1_image'); ?>
                    <?php $image_attributes = wp_get_attachment_image_src($imageId1, $size='full', $icon = false); ?>
                    <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($imageId1, '_wp_attachment_image_alt', true); ?>" />
                    
                    <?php if(get_field('pic_column_1_caption')): ?>
                    <span class="caption"><?php echo get_field('pic_column_1_caption'); ?></span>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            
                <?php if(get_field('pic_column_1_image')): ?>
                <div class="column">
                    <?php $imageId1 = get_field('pic_column_2_image'); ?>
                    <?php $image_attributes = wp_get_attachment_image_src($imageId1, $size='full', $icon = false); ?>
                    <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($imageId1, '_wp_attachment_image_alt', true); ?>" />
                    
                    <?php if(get_field('pic_column_2_caption')): ?>
                    <span class="caption"><?php echo get_field('pic_column_2_caption'); ?></span>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="verticalText">
                <?php echo $vari = apply_filters('the_content', get_field('pic_column_3_content')); ?>

                <?php if(get_field('pic_button_1_title') && get_field('pic_button_1_link_internal')): ?>
                <div class="buttonLine">
                    <a href="<?php echo get_permalink(get_field('pic_button_1_link_internal')); ?>" class="button"><?php echo get_field('pic_button_1_title'); ?></a>
                </div>
                <?php else: ?>
                    <?php if(get_field('pic_button_1_title') && get_field('pic_button_1_link_external')): ?>
                    <div class="buttonLine">
                        <a href="<?php echo get_field('pic_button_1_link_external'); ?>" class="button"><?php echo get_field('pic_button_1_title'); ?></a>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>