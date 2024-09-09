<article class="gridPost">
    <?php if(get_field('article_featured_image')): ?>
        <a href="<?php the_permalink(); ?>" class="postThumbnailLink">
            <?php
            $attachment_id = get_field('article_featured_image')['id'];
            $altText = get_field('article_featured_image')['alt'];
            $img_src = wp_get_attachment_image_url( $attachment_id, 'image-736-412' );
            $img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'image-736-412' );
            $width =  get_field('article_featured_image')['sizes']['image-736-412-width'];
            $height =  get_field('article_featured_image')['sizes']['image-736-412-height'];
        ?>
        <img 
            loading="lazy"
            class="postThumbnailLink"
            src="<?php echo esc_url( $img_src ); ?>"
            srcset="<?php echo esc_attr( $img_srcset ); ?>"
            sizes="(max-width: 50em) 87vw, 680px" 
            width="<?php echo $width; ?>"
            height="<?php echo $height; ?>"
            alt="<?php echo $altText; ?>" />
        </a>
    <?php else: ?>
        <a href="<?php the_permalink(); ?>" class="postThumbnailLink">
            <img src="<?php bloginfo('template_directory'); ?>/images/tr.png" alt="">
        </a>
    <?php endif; ?>

    <div class="details">
        <span class="date"><?php the_time( 'd F Y' ); ?></span>
        <h2 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if(has_tag()): ?><div class="tags"><?php the_tags(); ?></div><?php endif; ?>

        <?php if(get_field('article_excerpt')): ?>
        <div class="content"><p><?php echo get_field('article_excerpt'); ?>...</p></div>
        <?php endif; ?>
    </div>
</article>