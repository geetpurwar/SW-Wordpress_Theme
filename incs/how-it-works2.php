<section class="dualColumnImage <?php if(get_field('dcti2_background_color')): ?><?php echo get_field('dcti2_background_color'); ?><?php endif; ?>">
    <div class="container">
        <?php if(get_field('dcti2_title')): ?><h2 class="sectionTitle"><?php echo get_field('dcti2_title'); ?></h2><?php endif; ?>
        <?php
        // Check rows exists.
        if( have_rows('dcti2_column') ):?>
            <?php $offset = 50; ?>
            <div class="mid">
            <?php
            // Loop through rows.
            while( have_rows('dcti2_column') ) : the_row(); ?>
                <div class="column aos-init aos-animate" data-aos="fade-up" data-aos-offset="<?php echo $offset; ?>" data-aos-easing="ease-in-sine" data-aos-duration="600">
                    <div class="top">
                        <?php if(get_sub_field('title')): ?><h3><?php echo get_sub_field('title'); ?></h3><?php endif; ?>

                        <?php if(get_sub_field('icon')): ?>
                        <?php $id = get_sub_field('icon'); ?>
                        <?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
                        <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="bottom">
                        <?php echo $vari = apply_filters('the_content', get_sub_field('text')); ?>
                    </div>
                    <?php $offset = $offset + 50; ?>
                </div>
            <?php
            // End loop.
            endwhile;?>
            </div>
        <?php endif;
        ?>

        <?php if(get_field('dcti2_button_title') && get_field('dcti2_button_link_internal')): ?>
        <div class="buttonLine">
            <a href="<?php echo get_permalink(get_field('dcti2_button_link_internal')); ?>" class="button"><?php echo get_field('dcti2_button_title'); ?></a>
        </div>
        <?php else: ?>
            <?php if(get_field('dcti2_button_title') && get_field('dcti2_button_link_external')): ?>
            <div class="buttonLine">
                <a href="<?php echo get_field('dcti2_button_link_external'); ?>" class="button"><?php echo get_field('dcti2_button_title'); ?></a>
            </div>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</section>