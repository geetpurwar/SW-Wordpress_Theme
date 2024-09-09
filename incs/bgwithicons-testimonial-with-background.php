<section class="tripleColumnBg withQuote <?php echo get_field('iwb_background_color'); ?>">
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
        <h2 class="sectionTitle max-w-960"><?php echo get_field('iwb_title'); ?></h2>
        <?php endif; ?>   

        <?php if(get_field('iwb_display_testimonial')): ?>        
        <div class="quoteBg">
            <div class="column testimonial">
                <?php if(get_field('iwb_testimonial_author')): ?>
                <span class="author"><?php echo get_field('iwb_testimonial_author'); ?></span>
                <?php endif; ?>

                <?php if(get_field('iwb_testimonial_title')): ?>
                <p class="article-title-small"><?php echo get_field('iwb_testimonial_title'); ?></p>
                <?php endif; ?>
            
                <?php if(get_field('iwb_testimonial_rating')): ?>
                <div class="rating">
                    <?php
                        $totalStars = 5;
                        $goldenStars = get_field('iwb_testimonial_rating');
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

                <?php if(get_field('iwb_testimonial')): ?>
                <div class="testimonial-text">
                    <?php echo $vari = apply_filters('the_content', get_field('iwb_testimonial')); ?>
                </div>
                <?php endif; ?>
                
                <div class="bottom">
                    <?php if(get_field('iwb_testimonial_rating_agency_icon')): ?>
                    <img src="<?php echo get_field('iwb_testimonial_rating_agency_icon'); ?>" alt="Icon">
                    <?php endif; ?>

                    <?php if(get_field('iwb_testimonial_agency_star_rating')): ?>
                    
                    <div class="rating">
                        <?php
                            $totalStars = 5;
                            $goldenStars = get_field('iwb_testimonial_agency_star_rating');
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

                    <?php if(get_field('iwb_testimonial_agency_text')): ?>
                    <span class="reviewText"><?php echo get_field('iwb_testimonial_agency_text'); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if(get_field('iwb_content')): ?>
            <div class="tripleColumnList container subchecklist">
                <?php echo $vari = apply_filters('the_content', get_field('iwb_content')); ?>
            </div>
        <?php endif; ?>
        
        <?php if(get_field('iwb_button_title') && get_field('iwb_button_link')): ?>
        <div class="buttonLine">
            <a href="<?php echo get_permalink(get_field('iwb_button_link')); ?>" class="button"><?php echo get_field('iwb_button_title'); ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>