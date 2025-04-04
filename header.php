<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    

     <link rel="stylesheet" href="<?php echo esc_url(home_url('C:\Users\Mirka\Local Sites\bookstore\app\public\wp-content\themes\bookstore\styles.css'));?>">

      
</head>

<body <?php body_class(); ?>>
    <header class="default-header">
        <div>
            <a href="<?php echo esc_url(home_url() ); ?>">
                <img src="<?php echo esc_url(home_url('wp-content/uploads/2025/04/pexels-adrienne-andersen-1174503-2237798-scaled.jpg')); ?>" alt="White book on a table."> 
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

        </nav>
    </header>

    <!-- <img src="<?php //echo esc_url(home_url('wp-content/uploads/2025/02/image0.jpg')); ?>" alt="Anime Painting"> -->