<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/css" id="custom-background-css">
        .intro { background: url("<?php echo get_theme_mod('bg-intro'); ?>") no-repeat center; background-size: cover; }
    </style>
    <?php wp_head() ?>
</head>
<body>
    <section class="intro">
        <div class="wrapper">
            <header class="main">
                <nav class="nav-wrapp">
                    <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'header-menu', 'menu_class' => 'main-nav', 'container' => 'ul'  ) ); ?>
                </nav>
                <button id="button-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="hot-line">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <?php echo get_theme_mod ('hot-line');?>
                </p>
            </header>
            <div class="intro-block">
                <h1><?php echo get_theme_mod('intro-title'); ?></h1>
                <h2><?php echo get_theme_mod('intro-subtitle') ?></h2>
                <button type="button" class="btn-style">Plan Your Trip</button>
            </div>
        </div>
    </section>
