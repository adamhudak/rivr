<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('description');?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="container-fluid">
            <div class="header-main"> 
                <?php            
                if ((is_singular() && get_post_type() === 'post') || in_array(get_the_ID(), array(33, 31)))  {
                ?>
                <?php if(!empty(get_field('logo_dark', "option"))){ ?>
                    <div class="header-main__logo">
                        <a href="<?php echo get_home_url(); ?>"><img 
                                src="<?php echo get_field('logo_dark', 'option')['url'];?>"
                                alt="<?php echo get_field('logo_dark', 'option')['alt'];?>"> </a>
                    </div>
                <?php }?>
                <?php } else {?>
                <?php if(!empty(get_field('logo', "option"))){ ?>
                    <div class="header-main__logo">
                        <a href="<?php echo get_home_url(); ?>"><img
                                src="<?php echo get_field('logo', 'option')['url'];?>"
                                alt="<?php echo get_field('logo', 'option')['alt'];?>"> </a>
                    </div>
                    <?php }?>
                <?php }?>

                <div class="header-main__menu">
                    <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary_menu',
                                    'menu_id'        => 'primary-menu',
                                    'menu_class'     => 'primary-menu'
                                )
                            );
                        ?>
                    <div class="menu-toggle">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>