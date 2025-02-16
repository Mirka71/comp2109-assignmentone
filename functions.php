<?php
    function assignment_one_setup(){
        register_nav_menus(array(
            'header' => 'Header menu',
            'footer' => 'Footer menu'
        
        
        ));
    }

    add_action('after_setup_theme', 'assignment_one_setup');
    add_theme_support('post-thumbnails');


?>






<?php
// function theme_setup(){
//     register_nav_menus(array(
//         'header' => 'Header menu',
//         'footer' => 'Footer menu'
    
//     ));
// }
// add_action('after_setup_theme', 'theme_setup');

// adding featured img to posts
// add_theme_support('post-thumbnails');