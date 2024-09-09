<section class="statistics <?php if(get_field('statistics_background_color')): ?><?php echo get_field('statistics_background_color'); ?><?php endif; ?>">
    <div class="container">
        <?php if(get_field('statistics_title')): ?>
        <h2 class="headlineTwo <?php if(get_field('statistics_shadow_on_title')): ?>withShadow<?php endif; ?>"><?php echo get_field('statistics_title'); ?></h2>
        <?php endif; ?>

        <?php if(get_field('statistics_subtitle')): ?>
        <h4 class="subheading1"><?php echo get_field('statistics_subtitle'); ?></h4>
        <?php endif; ?>

        <?php
        // Check rows exists.
        if( have_rows('statistics_statistics') ): ?>
            <div class="fourColumn wideGap">
                <?php $offset = 50; ?>
                <?php
                // Loop through rows.
                while( have_rows('statistics_statistics') ) : the_row(); ?>
                <div class="column <?php if(get_sub_field('statistics_active')): ?>active<?php endif; ?>">
                    <?php if(get_sub_field('statistics_title')): ?>
                    <h3><?php echo get_sub_field('statistics_title'); ?><span class="triangle"></span></h3>
                    <?php endif; ?>

                    <?php if(get_sub_field('statistics_subtitle')): ?>
                    <span><?php echo get_sub_field('statistics_subtitle'); ?></span>
                    <?php endif; ?>

                    <?php $offset = $offset + 50; ?>
                </div>

                <?php
                // End loop.
                endwhile;?>
            </div>
            <?php
        endif;
        ?>
    </div>
</section>