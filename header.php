<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    
    <title>
    <?php 
        // Print the right title
        if ( is_home () ) { 
            bloginfo( 'name' ); 
        } elseif ( is_archive() ) {
            single_cat_title(); echo ' &bull; ' ; bloginfo( 'name' ); 
        } elseif ( is_singular() ) { 
            single_post_title(); 
        } else { 
            wp_title( '', true ); 
        }
    ?>
    </title>
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
   
    <?php
        // Queue JavaScript for threaded comments if enabled
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
    
        // Always have wp_head() before closing of head
        wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

    <div id="outer-wrap">
        <div id="inner-wrap">
        
            <header id="header-container">
                <hgroup>
                <?php if (is_home() || is_front_page()) { ?>
                    <h1 id="site-title">
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
                <?php } else { ?>
                    <div id="site-title">
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </div>
                <?php } ?>
                    <h2 id="site-description">
                        <?php bloginfo( 'description' ); ?>
                    </h2>
                </hgroup>
                
                <nav>
                    <?php wp_nav_menu( 'top-navigation' ); ?>
                </nav>
            </header> <!-- #header-container ends -->