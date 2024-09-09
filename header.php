<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- connect to domain of font files -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    
    <!-- optionally increase loading priority -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&family=Roboto:wght@400;500;700&display=swap">
    <link rel="preload" as="style" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://unpkg.com/aos@next/dist/aos.css">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&family=Roboto:wght@400;500;700&display=swap">
    </noscript>

    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" /> -->
    <link rel="stylesheet" href="http://localhost:3000/css/tailwind.css" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
    <meta name="msapplication-TileColor" content="#f0d1d2">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-ML3L74');</script>
<!-- End Google Tag Manager -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML3L74"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <header class="main-header">
            <div class="top">
                <div class="container flex justify-end items-center h-12">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-top-menu' ) ); ?>
                </div>
            </div>

            <div class="bottom">
                <div class="container flex justify-end items-center h-28">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/SelfWealth-Logo.svg" alt="Self Wealth logo"></a>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
            </div>

            <div class="mobile-header">
                <div class="top">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/SelfWealth-Logo.svg" alt="Self Wealth Logo"></a>
                    
                    <a href="#" class="hamburger">
                        <svg class="menuicon fill-current" width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1.5H22V0.5H0V1.5Z" fill="#3B414B"/>
                            <path d="M22 8.5H0V7.5H22V8.5Z" fill="#3B414B"/>
                            <path d="M22 15.5H0V14.5H22V15.5Z" fill="#3B414B"/>
                        </svg>
                        <svg class="closeicon fill-current" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L13 1M1 1L13 13" stroke="#3B414B" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>

                <div class="menu">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'mobile-menu',
                        'container' => false,
                        'menu_class' => ''
                    ) ); ?>
                </div>
            </div>
        </header>

        <?php include (TEMPLATEPATH . '/incs/popup.php'); ?>