<section class="threeColumnIconText <?php echo get_field('tcit_background_color'); ?>">
    <div class="container">
        <?php if(get_field('tcit_section_top_title')): ?>
        <div class="sectionTop">
            <h2 class="topTitle"><?php echo get_field('tcit_section_top_title'); ?></h2>
        </div>
        <?php endif; ?>

        <div class="sectionTop">
        <?php if(get_field('tcit_icon')): ?>
            <img class="sectionIcon" src="<?php echo get_field('tcit_icon'); ?>" alt="Icon">
        <?php endif; ?>

        <?php if(get_field('tcit_section_title')): ?>
            <h3 class="sectionTitle"><?php echo get_field('tcit_section_title'); ?></h3>
        <?php endif; ?>

        <?php if( have_rows('tcit_columns') ): ?>
        <?php $offset = 50; ?>
        <div class="threeColumnText">
            <?php while( have_rows('tcit_columns') ) : the_row(); ?>
                <div class="column">
                    <?php $offset = $offset + 50; ?>
                    <?php if(get_sub_field('title')): ?><h3 class="subheading1"><?php echo get_sub_field('title'); ?></h3><?php endif; ?>
                    <?php echo $vari = apply_filters('the_content', get_sub_field('content')); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if(get_field('tcit_button_title') && get_field('tcit_button_link_internal')): ?>
        <div class="buttonLine">
            <a href="<?php echo get_permalink(get_field('tcit_button_link_internal')); ?>" class="button"><?php echo get_field('tcit_button_title'); ?></a>
        </div>
        <?php else: ?>
            <?php if(get_field('tcit_button_title') && get_field('tcit_button_link_external')): ?>
            <div class="buttonLine">
                <a href="<?php echo get_field('tcit_button_link_external'); ?>" class="button"><?php echo get_field('tcit_button_title'); ?></a>
            </div>
            <?php endif; ?>
        <?php endif; ?>
        </div>
        
    </div>
</section>