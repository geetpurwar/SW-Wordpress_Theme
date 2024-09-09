<footer class="main-footer">
    <div class="top">
        <div class="container">
            <div class="tripleColumns">
                <div class="footerColumn">
                    <div class="subsection">
                        <?php if(get_field('menu_1_title', 'option')): ?>
                            <h6 class="columnTitle"><?php echo get_field('menu_1_title', 'option'); ?></h6>
                        <?php endif; ?>

                        <?php wp_nav_menu( array( 'menu' => get_field('menu_1', 'option')) ); ?>
                    </div>

                    <div class="subsection">
                        <?php if(get_field('menu_2_title', 'option')): ?>
                            <h6 class="columnTitle"><?php echo get_field('menu_2_title', 'option'); ?></h6>
                        <?php endif; ?>

                        <?php wp_nav_menu( array( 'menu' => get_field('menu_2', 'option')) ); ?>
                    </div>	
                </div>

                <div class="footerColumn">
                    <div class="subsection">
                        <?php if(get_field('menu_3_title', 'option')): ?>
                            <h6 class="columnTitle"><?php echo get_field('menu_3_title', 'option'); ?></h6>
                        <?php endif; ?>

                        <?php wp_nav_menu( array( 'menu' => get_field('menu_3', 'option')) ); ?>
                    </div>	
                </div>

                <div class="footerColumn">
                    <?php if(get_field('footer_column_3_title', 'option')): ?>
                        <h6 class="columnTitle"><?php echo get_field('footer_column_3_title', 'option'); ?></h6>
                    <?php endif; ?>

                    <div class="subsection">
                        <?php if(get_field('footer_column_3_row_1_title', 'option')): ?>
                        <h6 class="columnTitle"><?php echo get_field('footer_column_3_row_1_title', 'option'); ?></h6>
                        <?php endif; ?>

                        <?php echo $vari = apply_filters('the_content', get_field('footer_column_3_row_1_content', 'option')); ?>
                    </div>	

                    <div class="subsection">
                        <?php if(get_field('footer_column_3_row_2_title', 'option')): ?>
                        <h6 class="columnTitle"><?php echo get_field('footer_column_3_row_2_title', 'option'); ?></h6>
                        <?php endif; ?>
                        
                        <?php echo $vari = apply_filters('the_content', get_field('footer_column_3_row_2_content', 'option')); ?>
                    </div>	
                </div>
            </div>

            <div class="right">
                <?php include (TEMPLATEPATH . '/incs/widgets/rectangular-widget.php'); ?>
            </div>
        </div>
    </div>

    <div class="mid">
        <div class="container">
            <div class="top">
            <?php if(get_field('address', 'option')): ?><span><?php echo get_field('address', 'option'); ?></span><?php endif; ?>
            <?php if(get_field('email', 'option')): ?><span><a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a></span><?php endif; ?>
            </div>

            <div class="bottom">
                <ul>
                    <?php if(get_field('facebook', 'option')): ?>
                    <li><a href="<?php echo get_field('facebook', 'option'); ?>">
                        <svg class="stroke-current" width="21" height="21"><use href="#facebook" /></svg>
                    </a></li>
                    <?php endif; ?>

                    <?php if(get_field('twitter', 'option')): ?>
                    <li><a href="<?php echo get_field('twitter', 'option'); ?>">
                        <svg class="fill-current" width="21" height="21"><use href="#twitter" /></svg>
                    </a></li>
                    <?php endif; ?>

                    <?php if(get_field('linkedin', 'option')): ?>
                    <li><a href="<?php echo get_field('linkedin', 'option'); ?>">
                        <svg class="stroke-current" width="21" height="21"><use href="#linkedin" /></svg>
                    </a></li>
                    <?php endif; ?>

                    <?php if(get_field('youtube', 'option')): ?>
                    <li><a href="<?php echo get_field('youtube', 'option'); ?>">
                        <svg class="fill-current" width="21" height="21"><use href="#youtube" /></svg>
                    </a></li>
                    <?php endif; ?>

                    <?php if(get_field('reddit', 'option')): ?>
                    <li><a href="<?php echo get_field('reddit', 'option'); ?>">
                        <svg class="fill-current" width="21" height="21"><use href="#reddit" /></svg>
                    </a></li>
                    <?php endif; ?>
                </ul>
                
                <?php if(get_field('login_button_title', 'option') && get_field('login_button_url', 'option')): ?>
                <div><a href="<?php echo get_field('login_button_url', 'option'); ?>" class="button-sm-border"><?php echo get_field('login_button_title', 'option'); ?></a></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="container">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-bottom-menu' ) ); ?>
            
            <?php if(get_field('copyright', 'option')): ?>
            <p><?php echo get_field('copyright', 'option'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</footer>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts.js"></script>
<?php include (TEMPLATEPATH . '/incs/svgs.php'); ?>
<?php wp_footer(); ?>
</body>
</html>