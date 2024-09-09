<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>

<div class="container onlyTitles padding-bottom-none">
    <h1 class="h1"><?php the_title(); ?></h1>
</div>

<section class="contactPage">
    <div class="container subsectionTop">
        <?php if(get_field('title')): ?><h2 class="h2"><?php echo get_field('title'); ?></h2><?php endif; ?>
        <?php echo $vari = apply_filters('the_content', get_field('subtitle')); ?>
    </div>

    <?php if( have_rows('buttons') ): ?>
    <div class="container buttonRow">
        <?php while( have_rows('buttons') ) : the_row(); ?>
            <?php if(get_sub_field('button_title') && get_sub_field('button_link')): ?>
                <a href="<?php echo get_sub_field('button_link'); ?>" class="button-blue"><?php echo get_sub_field('button_title'); ?></a>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <?php if( have_rows('blocks') ): ?>
    <div class="container withBox">
        <?php while( have_rows('blocks') ) : the_row(); ?>
            <div class="box">
                <?php if(get_sub_field('title')): ?>
                    <h2 class="h2"><?php echo get_sub_field('title'); ?></h2>
                <?php endif; ?>

                <div class="content">
                    <?php echo $vari = apply_filters('the_content', get_sub_field('content')); ?>

                    <?php if(get_sub_field('display_button') && get_sub_field('button_title')): ?>
	            	<?php if(get_sub_field('button_link_internal')): ?>
	            		<a href="<?php echo get_sub_field('button_link_internal'); ?>" class="button">
		                    <?php echo get_sub_field('button_title'); ?>
		                </a>
	            	<?php endif; ?>

	            	<?php if(get_sub_field('button_link_external')): ?>
	            		<a href="<?php echo get_sub_field('button_link_external'); ?>" class="button">
		                    <?php echo get_sub_field('button_title'); ?>
		                </a>
	            	<?php endif; ?>
	            <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>