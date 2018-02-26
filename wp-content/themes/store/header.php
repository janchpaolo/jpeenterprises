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
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:800i" rel="stylesheet">

<style type="text/css">
	.label-home{
		font-family: 'Raleway', sans-serif;
		font-size: 45px;
		color: white;
		position: absolute;
	    top: 40%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	    text-shadow: 0px 0px 30px black;
	}
	.native-tapioca{
		background-image: url("NativeTapioca.jpg");
		background-size: cover;
		min-height: 575px
	}
	.modified-tapioca{
		background-image: url("ModifiedTapioca.jpg");
		background-size: cover;
		min-height: 575px
	}
	.btn {
	  background-color: transparent;
	  border: 2px solid white;
	  color: white;
	  padding: 8px 40px;
	  cursor: pointer;
  	  text-align: center;
	  font-size: 20px;
	  font-family: 'Roboto Condensed', sans-serif;
	  margin: 4px 2px;
	  transition: 0.3s;
	  position: absolute;
	  top: 55%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	}
	.default{
	  border-color: white;
	  color: white;
	}
	.default:hover {
	    background-color: white;
	    border-color: white;
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

    <div class="container-fluid" style="background-color: white">
    	<div class="row">
    		<div class="col-md-6" style="padding: 0px; min-height: 578px; background-color: #d54324">    			
    			<div class="native-tapioca">
	    			<center class="label-home">Native Tapioca</center>
					<button class="btn default">EXPLORE</button>
    			</div>
    		</div>

    		<div class="col-md-6" style="padding: 0px; min-height: 578px; background-color: #d54324">
    			<div class="modified-tapioca">
					<center class="label-home">Modified Tapioca</center>
					<button class="btn default">EXPLORE</button>
				</div>
			</div>
    	</div>
	</div>

    <div class="container-fluid" style="background-color: black; min-height: 225px">
		<div class="row">
			<div class="col-md-4" style="min-height: 225px; background-color: #9bd220">
			</div>
			<div class="col-md-4" style="min-height: 225px; background-color: #9bd255">
			</div>
			<div class="col-md-4" style="min-height: 225px; background-color: #9bd220">
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