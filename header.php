<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
</head>
<body>
<!--头部-->
<header>
    <div class="container">
        <div class="name">
            <a href="<?php echo home_url() ?>"><?php echo bloginfo('name') ?></a>
            <p><?php echo bloginfo('description') ?></p>
        </div>
        <div class="nav">
            <?php
            //            get_search_form();
            //            echo wp_nav_menu(array(
            //                'container' => 'div',
            //                'container_class' => 'navbar-box',
            //                'container_id' => 'nav-bar',
            //                'theme_location' => 'menus123', // 导航别名
            //                'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
            //            ))
            ?>
        </div>
    </div>
</header>