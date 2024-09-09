<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/incs/popup.php'); ?>

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
                <div class="postContent pageContent">
                    <div class="block content">
                        <?php if (have_posts()) : while (have_posts()) : the_post();?>
						<?php the_content(); ?>
						<?php endwhile; ?>
						<?php else : ?>
						<p>I'm not sure what you're looking for.</p>
						<?php endif; ?>
                    </div>
                </div>
            </div>

            <?php include (TEMPLATEPATH . '/incs/sidebar.php'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>