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
    <header>
        <nav class="navbar">
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                        // print_r($logo);
                    }
                    ?>
                    <img src="<?php echo $logo[0] ?>" alt="logo" /></a>
            </div>
            <div class="navbar-menu">
                <?php wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="nav-list">%3$s</ul>'
                    )
                ); ?>
            </div>
        </nav>
    </header>