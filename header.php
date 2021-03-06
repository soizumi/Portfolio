<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico">
    <title>
        Tomo Soizumi
        <?php if ( is_page('about') ) : ?> / About
        <?php elseif( is_category() || is_single() ) : ?> / Works
        <?php elseif( is_page('contact') ): ?> / Contact
        <?php endif ?>
    </title>
    <?php wp_head(); ?>
</head>
<body class="hover_enable">
   <header>
    <div class="background_egg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 393.78 493">
            <defs>
                <linearGradient id="js-gradient" x1="0%" y1="0%" x2="100%" y2="100%" gradientUnits="userSpaceOnUse" gradientTransform="rotate(-45,150,250)">
                    <stop id="js-gradient__stop-1" offset="0%" stop-color="red"/>
                    <stop id="js-gradient__stop-m" offset="50%" stop-color="purple"/>
                    <stop id="js-gradient__stop-2" offset="100%" stop-color="blue"/>
                </linearGradient>
            </defs>
            <g>
            <path fill="url(#js-gradient)" d="M328.79,71.38l-5.59,35.83-6.09-.95a152.93,152.93,0,0,0-4.9-36.87,110.78,110.78,0,0,0-12.56-30C272.21,15.17,238.2,0,196.89,0q-4.12,0-8.14.21a87.25,87.25,0,0,0-9.44,3.5,69.23,69.23,0,0,0-24.37,18q-10.44,11.9-13.6,32.17-2.53,16.25,2.29,28.68a64.65,64.65,0,0,0,14,21.92,105.37,105.37,0,0,0,21.28,16.83q12.11,7.35,24.66,13.46l58.37,28.85q9.15,4.55,23.08,11.92a110.84,110.84,0,0,1,26.29,19.68,89.08,89.08,0,0,1,19.64,30.61q7.29,18.28,3.25,44.15a119.57,119.57,0,0,1-16,44,114.91,114.91,0,0,1-31.55,34.05A127.42,127.42,0,0,1,242,368.11q-25.4,6.17-55.31,1.5-10.65-1.67-18.73-3.18a142.64,142.64,0,0,1-15-3.64q-6.94-2.13-13.85-4.5A152.73,152.73,0,0,1,123.93,352q-9.68-4.62-20.7-10.5t-19.66-7.22q-7.6-1.2-10.87,1.42a26.55,26.55,0,0,0-6.09,7.36L59,341.9,76,232.84l5.58.87q1.31,28.28,7.25,48.42t14.71,34A87.64,87.64,0,0,0,123,338.37,97.49,97.49,0,0,0,145,351.69a114.76,114.76,0,0,0,22.27,7.11q10.83,2.2,20.47,3.71,26.88,4.2,45.4-1.23T263.76,345a75,75,0,0,0,18.4-24.67,100,100,0,0,0,8.21-26q2.78-17.74-1.85-31.46a74,74,0,0,0-13.37-24.17,95.37,95.37,0,0,0-19.81-17.9,154.38,154.38,0,0,0-21.23-12.15l-55.56-26.85q-39.12-19.08-56.92-43.17T109.28,79.56A110.51,110.51,0,0,1,124,38.47,100.31,100.31,0,0,1,152.1,8.3c1.58-1.12,3.2-2.17,4.85-3.2C45.28,34.8,0,187.45,0,285.26,0,394,99,493,196.89,493s196.89-99,196.89-207.74C393.78,220.82,374.13,132.59,328.79,71.38Z"/>
            </g>
        </svg>
    </div>
    <div class="menu_fullscreen">
        <div class="menu_button_close_container">
            <div class="menu_button_close">
                <div class="menu_button_close_line1"></div>
                <div class="menu_button_close_line2"></div>
            </div>
        </div>
        <div class="menu_content_wrapper">
            <ul class="menu_list">
                <li><a href="<?php echo esc_url( home_url() ); ?>">HOME</a></li>
                <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' )->ID ) ) ; ?>">ABOUT</a></li>
                <li><a href="<?php $cat_works = get_category_by_slug('works'); echo get_category_link( $cat_works->cat_ID); ?>">WORKS</a></li>
                <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' )->ID ) ) ; ?>">CONTACT</a></li>
            </ul>
            <div class="menu_info">
            <img class="logo_nega_pc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_nega.svg" alt="">
            <img class="logo_nega_sp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_nega_sp.svg" alt="">
            <img class="accent_egg_piece" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/egg_pieces.svg" alt="">
            </div>
        </div>
    </div>
        <div class="header_menu_wrapper">
            <div class="logo_wrapper">
                <div class="logo movable_element"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt=""></a></div>
            </div>
            <div class="menu_button_container">
                <div class="menu_button movable_element">
                    <div class="menu_button_line1"></div>
                    <div class="menu_button_line2"></div>
                    <div class="menu_button_line3"></div>
                </div>
            </div>
        </div>
    </header>