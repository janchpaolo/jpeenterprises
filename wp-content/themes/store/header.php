<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package store
 */
?>
<?php get_template_part('modules/header/head') ?>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'store' ); ?></a>
    <?php get_template_part('modules/header/jumbosearch') ?>
    <?php get_template_part('modules/header/top','bar') ?>
    <?php get_template_part('modules/header/masthead') ?>
	<!-- Smooth scrolling-->
    <!-- <div class="scroll-down">
        <a id="button-scroll-up" href="#colophon">
            <i class="fa fa-hand-o-down"></i>
        </a>
    </div> -->

    <div class="container-fluid" style="margin-bottom: -30px; background-color: white">
    	<div class="row">
    		<div class="col-md-6" style="min-height: 550px; background-color: #954244">
    			<span style="font-family: 'Pacifico', cursive; font-size: 20px;color: white">Native Tapioca</span>
    		</div>
    		<div class="col-md-6" style="margin-right: -49px; min-height: 550px; background-color: #842511">
				<span style="font-family: 'Pacifico', cursive;">second column</span>
			</div>
    	</div>
	</div>
	<div class="mega-container">
		<?php //get_template_part('framework/featured-components/slider', 'swiper'); ?>
		<?php if (class_exists('woocommerce')) : ?>	
		<?php //get_template_part('framework/featured-components/coverflow', 'product'); ?>
		<?php //get_template_part('framework/featured-components/featured', 'products'); ?>
		<?php endif; ?>
		<?php //get_template_part('framework/featured-components/coverflow', 'posts'); ?>
		<?php //get_template_part('framework/featured-components/featured', 'posts'); ?>
	
		<div id="content" class="site-content container">