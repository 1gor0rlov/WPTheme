<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" >
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    
<body <?php body_class(); ?>>

    <div class="container">
    
        <!-- SITE-HEADER -->
        <header class="site-header">
           
            <div class="site-name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h5><?php bloginfo('description'); ?></h5>
            </div>
            
            <nav class="site-nav"> <!-- SITE-NAV -->
                <?php $nav = array('theme_location' => 'primary'); ?>
                <?php wp_nav_menu($nav); ?>
            </nav> <!-- ./SITE-NAV -->

            <!-- CATEGORY-SELECT -->
            <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		        <p>Categories: <?php wp_dropdown_categories('show_option_all=All&show_count=1&hierarchical=1'); ?>
		        <input type="submit" name="submit" value="Filter" /></p>
	        </form>
            
        </header>
        <!-- ./SITE-HEADER -->