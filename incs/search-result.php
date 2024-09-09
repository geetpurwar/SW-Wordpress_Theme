<section class="searchsection searchOnly">
    <div class="container">
        <div class="searchInContainer">
            <h1 class="h1">Search results for</h1>

            <form method="GET" action="<?php bloginfo('url'); ?>" class="searchform">
                <input name="s" id="s" type="text" placeholder="Search in articles" value="<?php echo get_search_query(); ?>">
                <button type="submit">
                    <svg class="fill-current" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.2923 13.9994C11.882 15.2445 10.0292 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 10.0292 15.2445 11.882 13.9994 13.2923L20.3536 19.6464C20.5488 19.8417 20.5488 20.1583 20.3536 20.3536C20.1583 20.5488 19.8417 20.5488 19.6464 20.3536L13.2923 13.9994ZM15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z" />
                    </svg>
                </button>
            </form>
        </div>

        <div class="searchresults">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h3 class="article-title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php endwhile; ?>
            <?php else : ?>
            <h3 class="article-title-small">There are currently no results for your search of '<span class="text-gray-700"><?php echo get_search_query(); ?></span>'</h3>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>