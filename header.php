<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html class="no-js" itemscope itemtype="http://schema.org/Organization" <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body class="home page">

<!--[if lt IE 8]>
<div class="alert alert-warning">
    Du benutzt einen <strong>veralteten</strong> Browser. Bitte <a href="http://browsehappy.com/">aktualisiere deinen Browser</a> um deine Erfahrung zu verbessern.      </div>
<![endif]-->

<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_theme_file_uri( '/assets/img/common/logo_owncloud.svg' ); ?>" title="ownCloud.org" itemprop="logo"></a>
        </div>

		<nav class="collapse navbar-collapse" role="navigation">
               <?php wp_nav_menu( array(
                   'theme_location' => 'top',
                   'menu_id'        => 'menu-header',
                   'menu_class'    => 'nav navbar-nav',
                   'container'=> 'ul'
               ) ); ?>

       </nav>    
    </div>
    <?php if ( is_front_page() ) { ?>
    <div class="container-fluid teaser-area">
        <div class="col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-3  col-xs-12 col-sm-10 col-md-8 col-lg-6">
            <div class="text-center intro-text">
                <h1><?php echo get_post_meta( get_the_ID(), 'homepage_titel', true ); ?></h1>

                <?php echo get_post_meta( get_the_ID(), 'homepage_text', true ); ?>
            </div>
        </div>
    </div>
    <?php } ?>
</header>

<div class="homepage container">