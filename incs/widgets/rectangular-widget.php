<div class="rectangleWithButton">
    <div class="innerContainer">
        <img src="<?php bloginfo('template_directory'); ?>/images/svgs/SelfWealth-Logo.svg" alt="Self Wealth Logo" class="aos-init aos-animate" data-aos="fade-in" data-aos-offset="50" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <?php if(get_field('self_wealth_widget_title', 'option')): ?>
            <h4 class="article-title-small"><?php echo get_field('self_wealth_widget_title', 'option'); ?></h4>
        <?php endif; ?>
        <?php if(get_field('self_wealth_widget_button_title', 'option') && get_field('self_wealth_widget_button_link', 'option')): ?>
        <a href="<?php echo get_field('self_wealth_widget_button_link', 'option'); ?>" class="button"><?php echo get_field('self_wealth_widget_button_title', 'option') ?></a>
        <?php endif; ?>
    </div>
</div>