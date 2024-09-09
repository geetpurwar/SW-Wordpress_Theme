<section class="faqSection <?php echo get_field('dcfaq_background_color'); ?>">
    <?php if(get_field('dcfaq_section_title')): ?>
    <div class="container">
        <h3 class="sectionTitle"><?php echo get_field('dcfaq_section_title'); ?></h3>
    </div>
    <?php endif; ?>

    <div class="container">
        <div class="column">
            <?php if(get_field('dcfaq_left_column_title')): ?>
            <h3 class="columnTitle">
                <?php if(get_field('dcfaq_left_column_icon')): ?><img src="<?php echo get_field('dcfaq_left_column_icon'); ?>" alt=""><?php endif; ?> <?php echo get_field('dcfaq_left_column_title'); ?>
            </h3>
            <?php endif; ?>

            <?php if( have_rows('left_column_faqs') ): ?>
            <?php while( have_rows('left_column_faqs') ) : the_row(); ?>
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
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="column">
            <?php if(get_field('dcfaq_right_column_title')): ?>
            <h3 class="columnTitle">
                <?php if(get_field('dcfaq_right_column_icon')): ?><img src="<?php echo get_field('dcfaq_right_column_icon'); ?>" alt=""><?php endif; ?> <?php echo get_field('dcfaq_right_column_title'); ?>
            </h3>
            <?php endif; ?>

            <?php if( have_rows('right_column_faqs') ): ?>
            <?php while( have_rows('right_column_faqs') ) : the_row(); ?>
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
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</section>