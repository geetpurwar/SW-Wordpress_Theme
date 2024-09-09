<section class="bannerDualColumn"
    <?php if(get_field('banner_background_color')): ?>
    style="background-color: <?php echo get_field('banner_background_color'); ?>;"
    <?php endif; ?>>
    
    <?php if(get_field('banner_background_image_desktop')): ?>
        <?php $id = get_field('banner_background_image_desktop'); ?>
        <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
        <img loading="lazy" class="banner-image desktop-image" src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
    <?php endif; ?>

    <?php if(get_field('banner_background_image_mobile')): ?>
        <?php $id = get_field('banner_background_image_mobile'); ?>
        <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
        <img loading="lazy" class="banner-image mobile-image" src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
    <?php endif; ?>

    <div class="container">
        <div class="left">
            <?php if(get_field('banner_title')): ?>
            <h1 class="h1"><?php echo get_field('banner_title'); ?></h1>
            <?php endif; ?>
            
            <?php if(get_field('banner_subtitle')): ?>
            <h2 class="banner-content"><?php echo get_field('banner_subtitle'); ?></h2>
            <?php endif; ?>
        </div>

        <div class="right">
            <div class="top">
                <?php if(get_field('banner_form_title')): ?>
                <h3 class="h3"><?php echo get_field('banner_form_title'); ?></h3>
                <?php endif; ?>
                
                <?php if(get_field('banner_form_subtitle')): ?>
                <p class="body1"><?php echo get_field('banner_form_subtitle'); ?></p>
                <?php endif; ?>

                <?php echo get_field('banner_form'); ?>
            </div>

            <?php if(get_field('banner_form_icon_left') || get_field('banner_form_icon_right')): ?>
            <div class="bottom">
                <div class="dualColumnSvgs">
                    <?php if(get_field('banner_form_icon_left')): ?>
                        <div class="column">
                            <?php $id = get_field('banner_form_icon_left'); ?>
                            <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
                            <img loading="lazy" src="<?php echo $image_attributes[0] ?>" width="80px" height="80px" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                        </div>
                    <?php endif; ?>
                    
                    <?php if(get_field('banner_form_icon_right')): ?>
                        <div class="column">
                            <?php $id = get_field('banner_form_icon_right'); ?>
                            <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
                            <img loading="lazy" src="<?php echo $image_attributes[0] ?>" width="256px" height="80px" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>