<section class="verticalImages <?php echo get_field('fcvi_background_color'); ?>">
    <div class="container">
        <div class="sectionSubTop">
        <?php if(get_field('fcvi_title')): ?><h2 class="sectionTitle"><?php echo get_field('fcvi_title'); ?></h2><?php endif; ?>
        <?php if(get_field('fcvi_subtitle')): ?><span class="sectionSubTitle"><?php echo get_field('fcvi_subtitle'); ?></span><?php endif; ?>

        <?php if(get_field('fcvi_tags') && (strlen(get_field('fcvi_tags')['title']) > 0)): ?>
            <?php $tags = get_field('fcvi_tags'); ?>
            <div class="sectionSubTitleTags">
                <?php if($tags['title']): ?><span><?php echo $tags['title']; ?>:</span><?php endif; ?>
                <?php if($tags['tag_1']): ?><span class="tag"><?php echo $tags['tag_1']; ?></span><?php endif; ?>
                <?php if($tags['tag_2']): ?><span class="tag"><?php echo $tags['tag_2']; ?></span><?php endif; ?>
            </div>
        <?php endif; ?>
        </div>

        <?php
        // Check rows exists.
        if( have_rows('fcvi_vertical_images') ): ?>
        <?php $offset = 50; ?>
        <div class="verticalImageColumns <?php if(count(get_field('fcvi_vertical_images')) < 4): ?>threeColumn<?php else: ?>fourColumn<?php endif; ?>">
            <?php
            // Loop through rows.
            while( have_rows('fcvi_vertical_images') ) : the_row(); ?>
            <div class="column aos-init aos-animate" data-aos="fade-up" data-aos-offset="<?php echo $offset; ?>" data-aos-easing="ease-in-sine" data-aos-duration="600">
                <?php $id = get_sub_field('fcvi_vertical_images_image'); ?>
                <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
                <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                
                <?php if(get_sub_field('fcvi_vertical_images_title')): ?>
                <span class="caption"><?php echo get_sub_field('fcvi_vertical_images_title'); ?></span>
                <?php endif; ?>

                <?php if(get_sub_field('fcvi_vertical_images_subtitle')): ?>
                <p class="body2"><?php echo get_sub_field('fcvi_vertical_images_subtitle'); ?></p>
                <?php endif; ?>
            </div>
            <?php $offset = $offset + 50; ?>
            <?php
            // End loop.
            endwhile;
            ?>
        </div>
        <?php
        // No value.
        endif;
        ?>

        <?php if(get_field('fcvi_button_title') && get_field('fcvi_button_link_internal')): ?>
        <div class="buttonLine">
            <a href="<?php echo get_permalink(get_field('fcvi_button_link_internal')); ?>" class="button"><?php echo get_field('fcvi_button_title'); ?></a>
        </div>
        <?php else: ?>
            <?php if(get_field('fcvi_button_title') && get_field('fcvi_button_link_external')): ?>
            <div class="buttonLine">
                <a href="<?php echo get_field('fcvi_button_link_external'); ?>" class="button"><?php echo get_field('fcvi_button_title'); ?></a>
            </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <?php if(get_field('fcvi_display_appstore_link') || get_field('fcvi_display_playstore_link')): ?>
    <div class="buttonLine aos-init aos-animate" data-aos="fade-in" data-aos-offset="50" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <?php if(get_field('fcvi_display_playstore_link') && get_field('play_store_link', 'option')): ?>
        <a href="<?php echo get_field('play_store_link', 'option'); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/images/svgs/Download_on_the_Google_Play.svg" alt="Download on Google Play" />
        </a>
        <?php endif; ?>

        <?php if(get_field('fcvi_display_appstore_link') && get_field('app_store_link', 'option')): ?>
        <a href="<?php echo get_field('app_store_link', 'option'); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/images/svgs/Download_on_the_App_Store.svg" alt="Download on App Store" />
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</section>