<section class="dualColumnSquareImage <?php echo get_field('dcsi_background_color'); ?>">
    <div class="container">
        <div class="sectionTopBottom">
            <div class="sectionSubTop">
                <?php if(get_field('dcsi_section_title')): ?>
                    <h2 class="sectionTitle"><?php echo get_field('dcsi_section_title'); ?></h2>
                <?php endif; ?>

                <?php if(get_field('dcsi_tags')): ?>
                <?php $tags = get_field('dcsi_tags'); ?>
                <div class="sectionSubTitleTags">
                    <?php if($tags['title']): ?><span><?php echo $tags['title']; ?>:</span><?php endif; ?>
                    <?php if($tags['tag_1']): ?><span class="tag"><?php echo $tags['tag_1']; ?></span><?php endif; ?>
                    <?php if($tags['tag_2']): ?><span class="tag"><?php echo $tags['tag_2']; ?></span><?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <?php if( have_rows('dcsi_column') ): ?>
            <div class="dualColumnSquares">
                <?php while( have_rows('dcsi_column') ) : the_row(); ?>
                <div class="column">
                    <?php if(get_sub_field('image')): ?>
                        <?php $imageId = get_sub_field('image'); ?>
                        <?php $image_attributes = wp_get_attachment_image_src($imageId, $size='full', $icon = false); ?>
                        <img src="<?php echo $image_attributes[0] ?>" width="<?php echo $image_attributes[1] ?>" height="<?php echo $image_attributes[2] ?>" alt="<?php echo get_post_meta($imageId, '_wp_attachment_image_alt', true); ?>" />
                    <?php endif; ?>
                    
                    <?php if(get_sub_field('caption')): ?>
                    <span class="caption"><?php echo get_sub_field('caption'); ?></span>
                    <?php endif; ?>

                    <?php if(get_sub_field('title')): ?>
                    <h3 class="subheading1"><?php echo get_sub_field('title'); ?></h3>
                    <?php endif; ?>

                    <?php if(get_sub_field('content')): ?>
                    <div class="body1">
                        <?php echo $vari = apply_filters('the_content', get_sub_field('content')); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

            <?php if(get_field('dcsi_button_link_internal') || get_field('dcsi_button_link_external')): ?>
                <div class="buttonLine">
                    <?php if(get_field('dcsi_button_link_internal')): ?>
                        <a href="<?php echo get_permalink(get_field('dcsi_button_link_internal')); ?>" class="button"><?php echo get_field('dcsi_button_title'); ?></a>
                    <?php else: ?>
                        <?php if(get_field('dcsi_button_link_external')): ?>
                            <a href="<?php echo get_field('dcsi_button_link_external'); ?>" class="button"><?php echo get_field('dcsi_button_title'); ?></a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>