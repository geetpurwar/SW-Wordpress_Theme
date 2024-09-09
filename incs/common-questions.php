<section class="questionsSection faqSection fullWidthSection darkbg <?php echo get_field('fwfaq_background_color'); ?>">

    <?php if(get_field('fwfaq_section_title')): ?>
    <div class="container">
        <h3 class="sectionTitle"><?php echo get_field('fwfaq_section_title'); ?></h3>
    </div>
    <?php endif; ?>

    <?php if( have_rows('fwfaq_faqs') ): ?>
    <div class="container">
        <div class="column">
        <?php while( have_rows('fwfaq_faqs') ) : the_row(); ?>
        <?php if(get_sub_field('question') && get_sub_field('answer')): ?>
        <div class="singleFaq active bg-gray-100">
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
</section>