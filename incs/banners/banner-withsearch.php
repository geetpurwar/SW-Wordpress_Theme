<section class="banner-withTitleSub-lightbg bannerWithSearch">
    <?php if(get_field('media_search_block_background_image_landscape', 'option')): ?>
        <?php
            $attachment_id = get_field('media_search_block_background_image_landscape', 'option')['id'];
            $altText = get_field('media_search_block_background_image_landscape', 'option')['alt'];
            $img_src = wp_get_attachment_image_url( $attachment_id, 'full' );
            $img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'full' );
        ?>
        <img 
            loading="lazy"
            class="banner-image desktop-image"
            src="<?php echo esc_url( $img_src ); ?>"
            srcset="<?php echo esc_attr( $img_srcset ); ?>"
            sizes="(max-width: 50em) 87vw, 680px" 
            alt="<?php echo $altText; ?>" />
    <?php endif; ?>

    <?php if(get_field('media_search_block_background_image_mobile', 'option')): ?>
        <?php
            $attachment_id = get_field('media_search_block_background_image_mobile', 'option')['id'];
            $altText = get_field('media_search_block_background_image_mobile', 'option')['alt'];
            $img_src = wp_get_attachment_image_url( $attachment_id, 'full' );
            $img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'full' );
        ?>
        <img 
            loading="lazy"
            class="banner-image mobile-image"
            src="<?php echo esc_url( $img_src ); ?>"
            srcset="<?php echo esc_attr( $img_srcset ); ?>"
            sizes="(max-width: 50em) 87vw, 680px" 
            alt="<?php echo $altText; ?>" />
    <?php endif; ?>
    
    <div class="container">
        <div class="content">
            <?php if(get_field('media_search_block_title', 'option')): ?>
            <h1 class="h1"><?php echo get_field('media_search_block_title', 'option'); ?></h1>
            <?php endif; ?>

            <?php if(get_field('media_search_block_subtitle', 'option')): ?>
            <h2 class="banner-sub"><?php echo get_field('media_search_block_subtitle', 'option'); ?></h2>
            <?php endif; ?>

            <form method="GET" action="<?php bloginfo('url'); ?>">
                <input name="s" id="s" type="text" placeholder="Search in articles">
                <button type="submit">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2923 13.9994C11.882 15.2445 10.0292 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 10.0292 15.2445 11.882 13.9994 13.2923L20.3536 19.6464C20.5488 19.8417 20.5488 20.1583 20.3536 20.3536C20.1583 20.5488 19.8417 20.5488 19.6464 20.3536L13.2923 13.9994ZM15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</section>