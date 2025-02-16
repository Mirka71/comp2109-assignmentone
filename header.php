<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    

     <link rel="stylesheet" href="<?php echo esc_url(home_url('Mirka/Local Sites/assignment-one/app/public/wp-content/themes/assignment-one/css/styles.css'));?>">

      
</head>

<body <?php body_class(); ?>>
    <header class="default-header">
        <div>
            <a href="<?php echo esc_url(home_url() ); ?>">
                <!-- <img src="<?php //echo esc_url(home_url('wp-content/uploads/2025/02/image0.jpg')); ?>" alt="Anime Painting"> -->
            </a>
        </div>
        <nav>
            <?php
            wp_nav_menu( array(
                'menu' => 'navmenu',
                'theme_location' => '',
                'depth' => 2,
                'fallback_cb' => false
            
            
            ));

            ?>

            <a href=""
        </nav>
    </header>

    <!-- <img src="<?php //echo esc_url(home_url('wp-content/uploads/2025/02/image0.jpg')); ?>" alt="Anime Painting"> -->