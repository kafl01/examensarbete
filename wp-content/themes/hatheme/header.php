<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>

<body class="container">
    <header class="header-wrapper">
        <nav class="navbar" id="up">
            <div class="logo">
                <a class="navbar-brand" href=<?php echo site_url(); ?>>
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                    ?>
                    <img src="<?php echo $logo[0] ?>" alt="logo" /></a>
            </div>

            <!-- Hamburger menu -->
            <div class="right quarter">
                <a class="menu-btn" href="#">&#9776;</a>
            </div>
            <div class="menu-burger-wrapper">
                <?php wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'container_class' => 'main-nav',
                        'items_wrap' => '<ul class="nav-menu">%3$s</ul>'
                    )
                ); ?>
            </div>

            <!-- Menu for tablet and desktop -->
            <div class="menu main ul">
                <?php wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'container_class' => 'main-nav',
                        'items_wrap' => '<ul class="nav-list">%3$s</ul>'
                    )
                ); ?>
            </div>
        </nav>
    </header>
    <main class="main-wrapper">