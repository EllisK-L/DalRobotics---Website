<?php
function enqueue_styles() {
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css');
}

function get_images($cat,$size="full",$maxposts=300){
    $images = [];
    $args = [
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'post_date',
        'order' => 'desc',
        'posts_per_page' => $maxposts,
        'post_status'    => 'inherit',
        'category_name' => $cat
        
    ];
      
    // The Query
    $query = new WP_Query($args);
      
      
    $loop = new WP_Query($args);
      
    while ($loop->have_posts()) : $loop->the_post();
      
      
    $image = wp_get_attachment_image_src(get_the_ID(),$size);
    array_push($image,get_permalink(get_the_ID()));
    array_push($images,$image);

    // echo "<img src='" . $image[0] . "'>";
      
      
      
      
    endwhile;
    return $images;
}
function ROV_editable_content($wp_customize){
$wp_customize->add_section("ROV-logo-section",array(
        "title"=>"Logo"
    ));


    $wp_customize->add_setting("ROV-logo-image",array(
        "default"=>"Example Text"
    ));
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,"ROV_logo_image_control",array(
        "label"=>"Logo",
        "section"=>"ROV-logo-section",
        "settings"=>"ROV-logo-image",
        "width"=>"2200",
        "height"=>"600",

    )));
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action("customize_register","ROV_editable_content");
