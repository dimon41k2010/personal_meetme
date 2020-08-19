<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>MeetMe Personal</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!--========== TEST =================-->
    <?php wp_head() ?>
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a> -->
                <a class="navbar-brand logo_h" href="#"><img src="<?php echo get_template_directory_uri().'/logo.png' ?>" alt="pic logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                
                <!-- <ul id="menu-top-menu" class="nav navbar-nav menu_nav ml-auto">
                    <li id="menu-item-5"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5 nav-item">
                        <a href="/DGCoreSol/" aria-current="page" class="nav-link">Home</a></li>
                    <li id="menu-item-12"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12 nav-item"><a
                            href="#about-link" rel="my_scroll" class="nav-link">About</a></li>
                    <li id="menu-item-11"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11 nav-item"><a
                            href="#project-link" rel="my_scroll" class="nav-link">Projects</a></li>
                    <li id="menu-item-42"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42 nav-item"><a
                            href="#contact-link" rel="my_scroll" class="nav-link">Contacts</a></li>
                    <li id="menu-item-15"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15 nav-item"><a
                            href="http://localhost:8888/DGCoreSol/resume/" class="nav-link">Resume (working)</a></li>
                    <li id="menu-item-46"
                        class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-46 nav-item">
                        <a href="http://localhost:8888/DGCoreSol/blog/" class="nav-link">Blog</a></li>
                </ul> -->
                   

                   <?php 
                    wp_nav_menu( [
                        'theme_location'  => '',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav menu_nav ml-auto">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] );; 
                    ?>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

