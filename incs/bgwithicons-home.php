<section class="tripleColumnBg <?php echo get_field('iwb_background_color'); ?>">
    <?php if(get_field('iwb_background_image_desktop')): ?>
        <?php $id = get_field('iwb_background_image_desktop'); ?>
        <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
        <img loading="lazy" class="banner-image desktop-image" src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
    <?php endif; ?>

    <?php if(get_field('iwb_background_image_mobile')): ?>
        <?php $id = get_field('iwb_background_image_mobile'); ?>
        <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
        <img loading="lazy" class="banner-image mobile-image" src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
    <?php endif; ?>

    <?php if(get_field('iwb_display_gradient_overlay')): ?>
    <div class="imageOverlay"></div>
    <?php endif; ?>
    
    <div class="container">
        <?php if(get_field('iwb_title')): ?>
        <h2 class="sectionTitle"><?php echo get_field('iwb_title'); ?></h2>
        <?php endif; ?>        
        
        <?php if(get_field('iwb_left_icons') || get_field('iwb_right_icons')): ?>
        <div class="dualColumnSvgs">
                <?php if(get_field('iwb_left_icons')): ?>
                    <div class="column">
                        <?php $id = get_field('iwb_left_icons'); ?>
                        <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
                        <img loading="lazy" src="<?php echo $image_attributes[0] ?>" height="122px" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                    </div>
                <?php endif; ?>
                
                <?php if(get_field('iwb_right_icon')): ?>
                    <div class="column">
                        <?php $id = get_field('iwb_right_icon'); ?>
                        <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
                        <img loading="lazy" src="<?php echo $image_attributes[0] ?>" height="122px" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if(get_field('iwb_content')): ?>
            <div class="tripleColumnList container subchecklist">
                <?php echo $vari = apply_filters('the_content', get_field('iwb_content')); ?>
            </div>
        <?php endif; ?>
        
        <?php if(get_field('iwb_button_title') && get_field('iwb_button_link_internal')): ?>
        <div class="buttonLine">
            <a href="<?php echo get_permalink(get_field('iwb_button_link_internal')); ?>" class="button"><?php echo get_field('iwb_button_title'); ?></a>
        </div>
        <?php else: ?>
            <?php if(get_field('iwb_button_title') && get_field('iwb_button_link_external')): ?>
            <div class="buttonLine">
                <a href="<?php echo get_field('iwb_button_link_external'); ?>" class="button"><?php echo get_field('iwb_button_title'); ?></a>
            </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>