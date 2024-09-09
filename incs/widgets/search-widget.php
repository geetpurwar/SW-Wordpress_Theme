<?php if(get_field('display_search_widget', 'options')): ?>
<div class="widget widget_search">
    <?php if(get_field('search_widget_title', 'options')): ?>
    <h4 class="widgetTitle"><?php echo get_field('search_widget_title', 'options'); ?></h4>
    <?php endif; ?>

    <div class="widgetContent">
        <form method="GET" action="<?php bloginfo('url'); ?>" class="searchform">
            <input id="s" name="s" type="text" placeholder="Search in articles">
            <button type="submit">
                <svg class="fill-current" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2923 13.9994C11.882 15.2445 10.0292 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 10.0292 15.2445 11.882 13.9994 13.2923L20.3536 19.6464C20.5488 19.8417 20.5488 20.1583 20.3536 20.3536C20.1583 20.5488 19.8417 20.5488 19.6464 20.3536L13.2923 13.9994ZM15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z"></path>
            </svg></button>
        </form>
    </div>
</div>
<?php endif; ?>