<?php if(get_field('display_widget_2', 'option')): ?>
<div class="widget">
    <?php if(get_field('widget_2_title', 'option')): ?>
	<h4 class="widgetTitle"><?php echo get_field('widget_2_title', 'option'); ?></h4>
	<?php endif; ?>

    <div class="widgetContent">
        <?php echo $vari = apply_filters('the_content', get_field('widget_2_content', 'option')); ?>

        <?php if(get_field('widget_2_button_title', 'option') && get_field('widget_2_button_link', 'option')): ?>
		<a href="<?php echo get_field('widget_2_button_link', 'option'); ?>" class="button"><?php echo get_field('widget_2_button_title', 'option'); ?></a>
		<?php endif; ?>
    </div>
</div>
<?php endif; ?>