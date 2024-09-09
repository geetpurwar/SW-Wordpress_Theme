<section class="pricingTableSection <?php echo get_field('fwt_background_color'); ?>">
    <div class="container">
        <?php if(get_field('fwt_top_title')): ?>
        <div class="sectionTop">
            <h2 class="topTitle"><?php echo get_field('fwt_top_title'); ?></h2>
        </div>
        <?php endif; ?>
        
        <?php if(get_field('fwt_section_title')): ?>
            <h2 class="sectionTitle <?php if(get_field('fwt_title_icon')): ?>withImage<?php endif; ?>">
            <?php if(get_field('fwt_title_icon')): ?>
            <img src="<?php echo get_field('fwt_title_icon'); ?>" alt="Icon">
            <?php endif; ?>
            <?php echo get_field('fwt_section_title'); ?>
        </h2>
        <?php endif; ?>

        <?php if(get_field('fwt_section_subtitle')): ?>
        <span class="sectionSubTitle"><?php echo get_field('fwt_section_subtitle'); ?></span>
        <?php endif; ?>

        <div class="pricingTableContent content <?php echo get_field('fwt_table_width'); ?>">
            <?php echo $vari = apply_filters('the_content', get_field('fwt_table_content')); ?>

            <?php if(get_field('fwt_bottom_line')): ?>
            <p><?php echo get_field('fwt_bottom_line'); ?></p>
            <?php endif; ?>
        </div>

        <?php if(get_field('fwt_button_link_internal') && get_field('fwt_button_title')): ?>
            <div class="buttonLine">
                <a href="<?php echo get_permalink(get_field('fwt_button_link_internal')); ?>" class="button-md-w"><?php echo get_field('fwt_button_title'); ?></a>
            </div>
        <?php else: ?>
            <?php if(get_field('fwt_button_link_external') && get_field('fwt_button_title')): ?>
            <div class="buttonLine">
                <a href="<?php echo get_field('fwt_button_link_external'); ?>" class="button-md-w"><?php echo get_field('fwt_button_title'); ?></a>
            </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>