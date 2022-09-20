<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <!-- META -->
    <title>Tim3D</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/styles.css">
    <?php wp_head(); ?>
</head>

<body>
<div class="site-container">

    <header>
        <div class="wrapper">
            <a href="<?php bloginfo('url'); ?>" class="header__logo"><img src="<?php the_field('logo-petit', 'option'); ?>" alt="Logo du site"></a>


            <nav class="header__nav">
                <ul>
                    <?php wp_nav_menu(array(
                            'theme_location' => 'menu_principal')
                    ); ?>
                </ul>
            </nav>

            <div class="menu-hamburger">
                <div class="menu-hamburger__contenu"></div>
            </div>
        </div>
    </header>