<section class="threeRowsIconText <?php echo get_field('trit_background_color'); ?>">
    <div class="container">
        <div class="sectionTop">
            <?php if(get_field('trit_section_title')): ?>
            <h2 class="topTitle"><?php echo get_field('trit_section_title'); ?></h2>
            <?php endif; ?>

            <?php if(get_field('trit_section_subtitle')): ?>
            <p class="topSubtitle"><?php echo get_field('trit_section_subtitle'); ?></p>
            <?php endif; ?>
        </div>

        <?php if(get_field('trit_rows_title')): ?>
        <h2 class="sectionTitle"><?php echo get_field('trit_rows_title'); ?></h2>
        <?php endif; ?>

        <div class="threeRowContent">
            <?php if( have_rows('trit_rows') ): ?>
            <?php while( have_rows('trit_rows') ) : the_row(); ?>
            <div class="singleRow">
                <?php if(get_sub_field('icon')): ?>
                <div class="left">
                    <img src="<?php echo get_sub_field('icon'); ?>" alt="Icon">
                </div>
                <?php endif; ?>

                <div class="right">
                    <?php if(get_sub_field('title')): ?>
                    <h3 class="h3"><?php echo get_sub_field('title'); ?></h3>
                    <?php endif; ?>

                    <div class="content">
                        <?php echo $vari = apply_filters('the_content', get_sub_field('content')); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php if(get_field('trit_button_title') && get_field('trit_button_link_internal')): ?>
        <div class="buttonLine">
            <a href="<?php echo get_permalink(get_field('trit_button_link_internal')); ?>" class="button"><?php echo get_field('trit_button_title'); ?></a>
        </div>
        <?php else: ?>
            <?php if(get_field('trit_button_title') && get_field('trit_button_link_external')): ?>
            <div class="buttonLine">
                <a href="<?php echo get_field('trit_button_link_external'); ?>" class="button"><?php echo get_field('trit_button_title'); ?></a>
            </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>