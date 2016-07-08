<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/styles.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/js/css/overlay.css">



	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="bodywrap"> <a id="returntotop" data-nav=".section-header" href="#"><i class="fa fa-angle-up"></i></a>
  <!---Header Section Starts--->
  <header id="section-header" class="section-header">
    <nav id="nav" class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#briefcase-menu"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i> </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"> <img class="logowhite" src="<?php bloginfo('template_url');?>/images/bclogo_white.png" alt=""> <img class="logogreen" src="<?php bloginfo('template_url');?>/images/bclogo_green.png" alt=""> </a> </div>
        <div class="collapse navbar-collapse" id="briefcase-menu">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php bloginfo('url'); ?>/#section-features">Tour</a></li>
            <li><a href="<?php bloginfo('url'); ?>/pricing">Pricing</a></li>
            <li><a href="#spu-15">Free Resource</a></li>
            <li><a href="#">Blog</a></li>
            <li><a class="btn btn-primary" href="https://app.thebriefcase.co/users/sign_up">Get Answers</a></li>
            <li id="navbar-login"><a href="https://app.thebriefcase.co/">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="overlay">
      <div class="container">
        <h1 class="heading">Legal Essentials for Your Business.</h1>
        <h2 class="subheading">Launch your vision. Grow your revenue. Protect your success.</h2>
        <div class="calltoaction"> <a href="#" id="cta-video" class="btn btn-primary">Get Legal Answers</a> <a data-nav=".section-features" href="#" class="btn btn-default">What are Legal Essentials?</a> <span class="wistia_embed wistia_async_mg5mvrzc4s popover=true popoverContent=link" style="display:inline" id="wistia-mg5mvrzc4s-1">
          <div id="wistia_13.thumb_container" class="wistia_click_to_play" style="position: relative; display: inline;"></div>
          </span> </div>
        <div class="arrow hide"> <a data-nav=".section-features" href="#" id="cta-features"><i class="fa fa-angle-down"></i></a> </div>
      </div>
    </div>
  </header>
  <!---Header Section Ends--->

<div class="overlay" id="one">
      <div class="modal">
        <h1>Hello World One</h1>
        <p>This is a modal. <a href="#!" onclick="$('.overlay#one').trigger('hide');return false;">Sample Close Button</a></p>
      </div>
    </div>
  
