<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title() ?></title>
    <script>
        (function(d) {
            var config = {
            kitId: 'glq6gym',
            scriptTimeout: 3000,
            async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
    <script src="https://kit.fontawesome.com/35ef04b0bb.js" crossorigin="anonymous"></script>
    <?php wp_head() ?>
</head>
 
<body <?php body_class(); ?>>
<div class="background-mask">
<header class="site-header">
    <div class="logo-section"><a href="<?php echo home_url(); ?>">
    <?php
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
    ?></a></div>
    <div class="nav-section">
    <?php wp_nav_menu( array( 
        'theme_location' => 'header-menu',
        'menu_class' => 'header-menu' ) ); ?>
    <?php get_search_form(); ?>
    </div>
</header>