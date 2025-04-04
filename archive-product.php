<?php
get_header();
$spfeaturedimg = wp_get_attachment_image_src(get_post_thumbnail_id(wc_get_page_id(page: 'shop') ), 'full' );
?>

<section class="product" style="background: url('<?php echo $featuredImg[0];?>')">

    <div>
     <h1><?php the_title(); ?></h1>
    </div>
</section>
