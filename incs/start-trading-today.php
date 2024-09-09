<section class="verticalImageWithForm <?php if(get_field('stt_background_color') == 'green'): ?>bg-primary<?php else: ?><?php echo get_field('stt_background_color'); ?><?php endif; ?>">
    <div class="container">
        <div class="left">
            <?php if(get_field('stt_title')): ?><h2 class="headlineTwo"><?php echo get_field('stt_title'); ?></h2><?php endif; ?>
            <?php if(get_field('stt_image')): ?>
            <?php $id = get_field('stt_image'); ?>
            <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
            <img src="<?php echo $image_attributes[0] ?>"
                width="<?php echo $image_attributes[1] ?>"
                height="<?php echo $image_attributes[2] ?>"
                alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>"
                class="aos-init aos-animate" data-aos="fade-up" data-aos-offset="50" data-aos-easing="ease-in-sine" data-aos-duration="600" />
            <?php endif; ?>
        </div>

        <div class="right">
            <div class="inRight">
                <?php if(get_field('stt_title')): ?><h2 class="headlineTwo"><?php echo get_field('stt_title'); ?></h2><?php endif; ?>

            <?php if(get_field('stt_list')): ?>
            <div class="checklist green">
                <?php echo $vari = apply_filters('the_content', get_field('stt_list')); ?>    
            </div>
            <?php endif; ?>

            <?php if(get_field('stt_form_code')): ?>
            <?php echo get_field('stt_form_code'); ?>
            <?php endif; ?>

            <div class="buttonLine justify-start aos-init aos-animate"
                    data-aos="fade-in"
                    data-aos-offset="50"
                    data-aos-easing="ease-in-sine"
                    data-aos-duration="600">
                
            <?php if(get_field('stt_display_playstore_button') && get_field('play_store_link', 'option')): ?>
                <a href="<?php echo get_field('play_store_link', 'option'); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/svgs/Download_on_the_Google_Play.svg" alt="Download on Google Play" />
                </a>
            <?php endif; ?>

            <?php if(get_field('stt_display_appstore_button') && get_field('app_store_link', 'option')): ?>
                <a class="aos-init aos-animate" href="<?php echo get_field('app_store_link', 'option'); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/svgs/Download_on_the_App_Store.svg" alt="Download on App Store" />
                </a>
            <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</section>