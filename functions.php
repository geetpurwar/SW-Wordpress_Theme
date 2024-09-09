<?php remove_action('wp_head', 'wp_generator'); ?>
<?php
    function remove_footer_admin () {
        echo '<a href="https://www.linkedin.com/in/geetpurwar/" target="_blank">Developed by Geet Purwar</a>';
    }
    add_filter('admin_footer_text', 'remove_footer_admin');
?>
<?php
if (function_exists('add_theme_support')) {
  add_theme_support('menus');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );	
}
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'header-top-menu', __( 'Header Top Menu' ) );
  register_nav_menu( 'header-menu', __( 'Header Menu' ) );
  register_nav_menu( 'mobile-menu', __( 'Mobile Menu' ) );
  register_nav_menu( 'footer-bottom-menu', __( 'Footer Menu' ) );
}
function my_deregister_scripts(){
	wp_dequeue_script( 'wp-embed' );
   }
   add_action( 'wp_footer', 'my_deregister_scripts' );
?>
<?php
/**
 * Disable the emoji's
 */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }
return $urls;
}
?>
<?php
/* Added ACF Option Page */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();
}
?>
<?php
/* Related Post */
function related_posts() {
    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && !is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);

    $query_args = array( 
        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '4',
     );

    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()): ?>
        <div class="relatedPost">
        <h2 class="headlineTwo">Related posts</h2>
        <div class="relatedPostGrid postGrid">
        <?php while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>
            <article class="gridPost">
                <?php if(get_field('article_featured_image')): ?>
                <a href="<?php the_permalink(); ?>" class="postThumbnailLink">
                    <img src="<?php echo get_field('article_featured_image')['sizes']['image-352-198'] ?>"
                        alt="<?php echo get_field('article_featured_image')['sizes']['alt'] ?>"
                        width="<?php echo get_field('article_featured_image')['sizes']['image-352-198-width'] ?>"
                        height="<?php echo get_field('article_featured_image')['sizes']['image-352-198-height'] ?>" />
                </a>
                <?php else: ?>
                  <a href="<?php the_permalink(); ?>" class="postThumbnailLink">
                      <div class="w352x198"></div>
                  </a>
                <?php endif; ?>
        
                <div class="details">
                    <span class="date"><?php the_time( 'd F Y' ); ?></span>
                    <h2 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
                    <div class="tags">
                        <?php the_tags(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
        </div>
        </div>

        <?php // Restore original Post Data
        wp_reset_postdata();
     endif;
}
?>
<?php // add_filter( 'show_admin_bar', '__return_false' ); ?>
<?php
    // Clean up the <head>
    function complete_version_removal() {
        return '';
    }
    add_filter('the_generator', 'complete_version_removal');
    
    remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
    remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
    remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
    remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
    remove_action( 'wp_head', 'index_rel_link' ); // index link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
    remove_action('wp_head', 'start_post_rel_link', 10, 0 ); // start link
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // previous and next links
    remove_action('wp_head', 'rel_canonical');
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
    
    // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );  
  function disable_emojicons_tinymce( $plugins ) {
      if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
      } else {
        return array();
      }
    }
?>
<?php
//Remove Shortcode output
add_shortcode( 'miniorange_social_sharing', '__return_false' );
remove_filter ('acf_the_content', 'wpautop');
?>
<?php
/*
* Calculate the estimated reading time for a given piece of $content.
*
* @param string $content Content to calculate read time for.
* @param int $wpm Estimated words per minute of reader.
*
* @returns  int $time Estimated reading time.
*/
function site_estimated_reading_time( $content = '', $wpm = 250 ) {
    $clean_content = strip_shortcodes( $content );
    $clean_content = strip_tags( $clean_content );
    $word_count = str_word_count( $clean_content );
    $time = ceil( $word_count / $wpm );
    return $time;
}
?>
<?php
add_filter( 'max_srcset_image_width', 'awesome_acf_max_srcset_image_width', 10 , 2 );
// set the max image width 
function awesome_acf_max_srcset_image_width() {
  return 2200;
}
?>
<?php
function create_custom_page(){
  $page_title = 'My Custom Page';
  $menu_title = 'My Custom Page';
  $capability = 'read';
  $slug = 'custom_page_content';
  $callback = 'custom_page_content';
  $icon = 'dashicons-welcome-write-blog';
  $position = 100;
  add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
}
add_action( 'admin_menu', 'create_custom_page' );
function custom_page_content(){
  echo '<form method="POST" action="?page=add_data">
 <label>Team Name: </label><input type="text" name="team_name" /><br />
 <label>Team City: </label><input type="text" name="team_city" /><br />
 <label>Team State: </label><input type="text" name="team_state" /><br />
 <label>Team Stadium: </label><input type="text" name="team_stadium" /><br />
<input type="submit" value="submit" />
</form>
<script>alert("Working?")<script>
';
}
?>