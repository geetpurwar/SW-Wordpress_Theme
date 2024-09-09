<section class="singleBlogPost">
    <div class="container">      
        <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="breadcrumb">','</div>' );} ?>

        <div class="postStart">
            <h1 class="h1"><?php the_title(); ?></h1>
            
            <div class="bottom">
                <?php if(has_tag()): ?>
                <div class="tags"><?php the_tags(); ?></div>
                <?php endif; ?>

                <div class="share">
                    <?php include (TEMPLATEPATH . '/incs/widgets/share-post.php'); ?>
                </div>
            </div>
        </div>
        
        <div class="postDetails">
            <div class="left">
                <div class="meta">	
                    <div class="authorMeta">
                        <img src="<?php echo $get_author_gravatar = get_avatar_url($post->post_author, array('size' => 72)); ?>"
                            alt="<?php the_author(); ?>" />
                    
                        <div class="authorDetails">
                            <h5 class="name"><?php the_author(); ?></h5>
                            <ul>
                                <li><?php the_category(); ?></li>
                                <li><?php the_time( 'd F Y' ); ?></li>
                                <?php if(get_field('article_content')): ?>
                                <li><?php echo site_estimated_reading_time(get_field('article_content')); ?> min to read</li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <?php include (TEMPLATEPATH . '/incs/widgets/share-post.php'); ?>
                    </div>
                </div>

                <div class="postContent">
                    <div class="block content">
                        <?php echo $vari = apply_filters('the_content', get_field('article_content')); ?>
                    </div>

                    <?php if( have_rows('content_blocks') ): ?>
                        <?php while( have_rows('content_blocks') ): the_row(); 
                            $blockTitle = get_sub_field('block_title');
                            $titleType = get_sub_field('title_type');
                            $blockContent = get_sub_field('block_content');
                            $featuredImage = get_sub_field('featured_image');
                            ?>
                            <div class="block content">
                                <?php if($titleType == 'h2'): ?>
                                <h2 class="h2"><?php echo $blockTitle; ?></h2>
                                <?php endif; ?>

                                <?php if($titleType == 'h3'): ?>
                                <h3 class="h3"><?php echo $blockTitle; ?></h3>
                                <?php endif; ?>

                                <?php echo $vari = apply_filters('the_content', $blockContent); ?>

                                <?php if($featuredImage): ?>
                                <div class="image">
                                    <?php
                                        $img_id = $featuredImage;
                                        $size = 'full';
                                        $img_src = wp_get_attachment_image_url( $img_id, $size );
                                        $img_srcset = wp_get_attachment_image_srcset( $img_id, $size );
                                        $title = get_post($id)->post_title;
                                        $alt = isset(get_post_meta($id, '_wp_attachment_image_alt')[0]) ? get_post_meta($id, '_wp_attachment_image_alt')[0] : $title;
                                        $caption = wp_get_attachment_caption($img_id);
                                        ?>
                                        <figure class="image-wrapper">
                                        <img src="<?php echo esc_url( $img_src ); ?>"
                                        srcset="<?php echo esc_attr( $img_srcset ); ?>"
                                        sizes="
                                        (max-width: 768px) 800px,
                                        (max-width: 1200px) 1400px,
                                        (max-width: 2000px) 2000px"
                                        alt="<?php echo $alt; ?>"
                                        class="img"
                                        loading="lazy">
                                        <figcaption class="caption"><?php echo $caption;?></figcaption>
                                        </figure>
                                </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <?php related_posts(); ?>
            </div>

            <?php include (TEMPLATEPATH . '/incs/sidebar.php'); ?>
        </div>
    </div>
</section>