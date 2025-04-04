<?php
    function bookstore_setup(){
        register_nav_menus(array(
            'header' => 'Header menu',
            'footer' => 'Footer menu'
        
        
        ));
    }

    add_action('after_setup_theme', 'bookstore_setup');
    add_theme_support('post-thumbnails');


?>

<?php
add_shortcode('cmsPost', 'cms_post_shortcode');

// add woocommerce
function bookstore_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'bookstore_add_woocommerce_support');

function enqueue_wc_cart_fragments() {
    wp_enqueue_script('wc-cart-fragments');
}
add_action('wp_encueue_scripts', 'enqueue_wc_wc_cart_fragments');

function web_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc_product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');
add_action('after_setup_theme', 'web_add_woocommerce_support');
?>





<?php
