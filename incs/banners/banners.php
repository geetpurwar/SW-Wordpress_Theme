<?php if(get_field('banner_type') && get_field('banner_type') == 'home'): ?>
<?php include (TEMPLATEPATH . '/incs/banners/banner-home.php'); ?>
<?php endif; ?>

<?php if(get_field('banner_type') && get_field('banner_type') == 'withForm'): ?>
<?php include (TEMPLATEPATH . '/incs/banners/banner-withForm.php'); ?>
<?php endif; ?>

<?php if(get_field('banner_type') && get_field('banner_type') == 'withFormAndList'): ?>
<?php include (TEMPLATEPATH . '/incs/banners/banner-withFormAndList.php'); ?>
<?php endif; ?>

<?php if(get_field('banner_type') && get_field('banner_type') == 'onlyTitles'): ?>
<?php include (TEMPLATEPATH . '/incs/banners/banner-onlytitle.php'); ?>
<?php endif; ?>