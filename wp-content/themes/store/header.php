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
<style type="text/css">
	.label-home{
		font-family: 'Pacifico', cursive;
		font-size: 50px;
		color: white;
		position: absolute;
	    top: 40%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	}
	.native-tapioca{
		background-image: url("NativeTapioca.jpg");
		background-size: cover;
		min-height: 550px
	}
	.modified-tapioca{
		background-image: url("ModifiedTapioca.jpg");
		background-size: cover;
		min-height: 550px
	}
	.btn {
	  background-color: transparent;
	  border: 2px solid black;
	  color: black;
	  padding: 14px 28px;
	  cursor: pointer;
	  text-align: center;
	  font-size: 20px;
	  margin: 4px 2px;
	  transition: 0.3s;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	}
	.default{
	  border-color: #e7e7e7;
	  color: black;
	}
	.default:hover {
	    background-color: #e7e7e7;
	}
</style>
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
    		<div class="col-md-6" style="padding: 0px; min-height: 550px; background-color: #954244; margin-right: 1.25px;">    			
    			<div class="native-tapioca">
	    			<center class="label-home">Native Tapioca</center>
					<button class="btn default">EXPLORE</button>

    			</div>
    			<!-- <img src="NativeTapioca.jpg" class="img-fluid" alt="Native Tapioca" style="height: 550px; width: 100%; margin-left: -15px"> -->

    		</div>
    		<div class="col-md-6" style="padding: 0px; margin-right: -49px; min-height: 550px; background-color: #842511; margin-left: 1.25px">
    			<div class="modified-tapioca">
					<center class="label-home">Modified Tapioca</center>
				</div>
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