<div class="singleNews">
    <span class="caption"><?php the_time( 'd F Y' ); ?></span>
    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
    <?php if(has_tag()): ?><div class="tags"><?php the_tags(); ?></div><?php endif; ?>
</div>