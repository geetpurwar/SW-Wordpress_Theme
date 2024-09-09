<section class="verticalImagesDualImageZigZag <?php if(get_field('vizz_background_color')): ?><?php echo get_field('vizz_background_color'); ?><?php endif; ?>">
    <div class="container">
        <?php if(get_field('vizz_section_title') || get_field('vizz_section_subtitle')): ?>
        <div class="sectionTop">
            <?php if(get_field('vizz_section_title')): ?>
            <h2 class="topTitle"><?php echo get_field('vizz_section_title'); ?></h2>
            <?php endif; ?>

            <?php if(get_field('vizz_section_subtitle')): ?>
            <p class="topSubtitle"><?php echo get_field('vizz_section_subtitle'); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <div class="sectionTopBottom">
            <?php if(get_field('vizz_title')): ?>            
            <h2 class="sectionTitle"><?php echo get_field('vizz_title'); ?></h2>
            <?php endif; ?>
            
            <?php if(get_field('vizz_tags')): ?>
            <?php $tags = get_field('vizz_tags'); ?>
            <div class="sectionSubTitleTags">
                <?php if($tags['title']): ?><span><?php echo $tags['title']; ?>:</span><?php endif; ?>
                <?php if($tags['tag_1']): ?><a href="#" class="tag"><?php echo $tags['tag_1'] ?></a><?php endif; ?>
                <?php if($tags['tag_2']): ?><a href="#" class="tag"><?php echo $tags['tag_2'] ?></a><?php endif; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="zigZagImagesText">
            <div class="zigZagImageColumn">
                <div class="column">
                    <?php if(get_field('vizz_column_1_image')): ?>
                        <?php $image1id = get_field('vizz_column_1_image'); ?>
                        <?php $image_attributes = wp_get_attachment_image_src($image1id, $size='full', $icon = false); ?>
                        <img data-aos="fade-up" data-aos-offset="50" data-aos-easing="ease-in-sine" data-aos-duration="600" src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($image1id, '_wp_attachment_image_alt', true); ?>" />
                    <?php endif; ?>
                    
                    <?php if(get_field('vizz_column_1_caption')): ?>
                    <span class="caption"><?php echo get_field('vizz_column_1_caption'); ?></span>
                    <?php endif; ?>

                    <?php if(get_field('vizz_column_1_content')): ?>
                    <p class="body2"><?php echo get_field('vizz_column_1_content'); ?></p>
                    <?php endif; ?>
                </div>
            
                <div class="column">
                    <?php if(get_field('vizz_column_2_image')): ?>
                        <?php $image2id = get_field('vizz_column_2_image'); ?>
                        <?php $image_attributes = wp_get_attachment_image_src($image1id, $size='full', $icon = false); ?>
                        <img data-aos="fade-up" data-aos-offset="100" data-aos-easing="ease-in-sine" data-aos-duration="600" src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($image1id, '_wp_attachment_image_alt', true); ?>" />
                    <?php endif; ?>
                    
                    <?php if(get_field('vizz_column_2_caption')): ?>
                    <span class="caption"><?php echo get_field('vizz_column_2_caption'); ?></span>
                    <?php endif; ?>

                    <?php if(get_field('vizz_column_2_content')): ?>
                    <p class="body2"><?php echo get_field('vizz_column_2_content'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="verticalText">
                <?php echo $vari = apply_filters('the_content', get_field('vizz_column_3_content')); ?>

                <?php if(get_field('vizz_column_3_button_internal') || get_field('vizz_column_3_button_external')): ?>
                <?php echo get_field('vizz_column_3_button_internal'); ?>
                <div class="buttonLine">
                    <?php if(get_field('vizz_column_3_button_internal')): ?>
                        <a href="<?php echo get_permalink(get_field('vizz_column_3_button_internal')); ?>" class="button"><?php echo get_field('vizz_column_3_button'); ?></a>
                    <?php else: ?>
                        <a href="<?php echo get_field('vizz_column_3_button_external'); ?>" class="button"><?php echo get_field('vizz_column_3_button'); ?></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>