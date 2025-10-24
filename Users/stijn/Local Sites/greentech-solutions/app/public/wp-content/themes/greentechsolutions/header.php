<!-- Header bestand met logo, menu en site head sequentie -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<!-- Header -->
<header id="header">
    <a href="<?php echo home_url(); ?>">
        <?php the_custom_logo(); ?>
    </a>
    <nav class="links">
        <ul>
            <?php
            foreach (wp_get_nav_menu_items('header-menu') as $item) {
                ?>
                <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
    <nav class="main">
        <ul>
            <li class="search">
                <a class="fa-search" href="#search">Search</a>
                <form id="search" method="get" action="#">
                    <input type="text" name="query" placeholder="Search" />
                </form>
            </li>
            <li class="menu">
                <a class="fa-bars" href="#menu">Menu</a>
            </li>
        </ul>
    </nav>
</header>

<main id="main" class="site-main">