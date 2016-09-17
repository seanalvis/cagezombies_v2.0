<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body>
    <header class="row no-max pad main">
        <h1><a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo("name"); ?></a></h1>
        <a href="" class="nav-toggle"><span></span>Menu</a>
        <nav>
            <h1 class="open"><a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo("name"); ?></a></h1>

            <?php

                $defaults = array(
                    "container" => false,
                    "theme_location" => "primary-menu",
                    "menu_class" => "no-bullet"
                );

                wp_nav_menu( $defaults );
            ?>

            <!-- <ul class="no-bullet">
                <li class="current parent"><a class='current' href="index.html">Portfolio</a>
                    <ul class="sub-menu">
                        <li><a href="item.html">Portfolio Item</a></li>
                        <li><a href="item.html">Portfolio Item</a></li>
                        <li><a href="item.html">Portfolio Item</a></li>
                        <li><a href="item.html">Portfolio Item</a></li>
                    </ul>
                </li>
                <li class="parent"><a href="blog.html">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="single-post.html">Single Post</a></li>
                        <li><a href="author.html">Author Page</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>  -->
        </nav>
    </header>