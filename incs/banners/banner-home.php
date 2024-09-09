<section class="banner"
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
        <div class="content">
            <?php if(get_field('banner_title')): ?>
            <h1 class="h1"><?php echo get_field('banner_title'); ?></h1>
            <?php endif; ?>

            <?php if(get_field('banner_subtitle')): ?>
            <h2 class="banner-content"><?php echo get_field('banner_subtitle'); ?></h2>
            <?php endif; ?>
            
            <?php if(get_field('banner_form')): ?>
            <?php echo get_field('banner_form'); ?>
            <?php endif; ?>
        </div>
    </div>
</section>