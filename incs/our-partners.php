<section class="partners <?php echo get_field('partners_background_color'); ?>">
    <div class="container">
    	<?php if(get_field('partners_title', 'option')): ?>
			<h2 class="sectionTitle"><?php echo get_field('partners_title', 'option'); ?></h2>
		<?php endif; ?>

		<?php if( have_rows('partners_icons', 'option') ): ?>
		<?php $offset = 50; ?>
        <div class="partnerIcons">
        	<?php while( have_rows('partners_icons', 'option') ) : the_row(); ?>
        		<?php if(get_sub_field('logo')): ?>
        		
        		<?php $id = get_sub_field('logo'); ?>
        		<?php $image_attributes = wp_get_attachment_image_src($id, $size='full', $icon = false); ?>
				<img src="<?php echo $image_attributes[0] ?>"
					width="<?php echo $image_attributes[1] ?>"
					height="<?php echo $image_attributes[2] ?>"
					alt="<?php echo get_post_meta($id, '_wp_attachment_image_alt', true); ?>"
				/>
        		<?php endif; ?>
        	<?php $offset = $offset + 50; ?>
        	<?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>