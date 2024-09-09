<section class="faqSection fullWidthSection <?php echo get_field('fwfaq2_background_color'); ?>">
    <?php if(get_field('fwfaq2_section_title')): ?>
    <div class="container">
        <h3 class="sectionTitle"><?php echo get_field('fwfaq2_section_title'); ?></h3>
    </div>
    <?php endif; ?>

    <?php if( have_rows('fwfaq2_faqs') ): ?>
    <div class="container">
        <div class="column">
            <?php while( have_rows('fwfaq2_faqs') ) : the_row(); ?>
            <?php if(get_sub_field('question') && get_sub_field('answer')): ?>
            <div class="singleFaq">
                <div class="question">
                    <?php echo get_sub_field('question'); ?>

                    <span class="chevron">
                        <svg class="stroke-current" width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 9L14.3333 6.33333L9 1L3.66667 6.33333L1 9" stroke-linecap="round"/></svg>
                    </span>
                </div>
                <div class="answer">
                    <div class="content">
                        <?php echo $vari = apply_filters('the_content', get_sub_field('answer')); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>

    <?php if(get_field('fwfaq2_button_title') && get_field('fwfaq2_button_link_internal')): ?>
    <div class="container">
        <div class="buttonLine w-full">
            <a href="<?php echo get_permalink(get_field('fwfaq2_button_link_internal')); ?>" class="button mx-auto"><?php echo get_field('fwfaq2_button_title'); ?></a>
        </div>
    </div>
    <?php else: ?>
        <?php if(get_field('fwfaq2_button_title') && get_field('fwfaq2_button_link_external')): ?>
        <div class="container">
            <div class="buttonLine w-full">
                <a href="<?php echo get_field('fwfaq2_button_link_external'); ?>" class="button mx-auto"><?php echo get_field('fwfaq2_button_title'); ?></a>
            </div>
        </div>
        <?php endif; ?>
    <?php endif; ?>

</section>