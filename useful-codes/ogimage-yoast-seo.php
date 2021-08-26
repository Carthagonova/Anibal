<?php
// Remove metas og_image from yoast seo https://developer.yoast.com/customization/apis/metadata-api/
// https://github.com/Yoast/wordpress-seo/issues/1060
//
add_filter("wpseo_opengraph_desc", "remove_yoast_og");
add_filter("wpseo_twitter_description", "remove_yoast_og");
add_filter("wpseo_twitter_image", "remove_yoast_og");
add_filter("wpseo_opengraph_image", "remove_yoast_og");
add_filter("wpseo_opengraph_image_size", "remove_yoast_og");

// set a default og image value so wpseo_opengraph_image is triggered
function default_og_image ($image) {
    global $post;

    if (!$image->has_images()) {
        $image->add_image('default'); // this can be whatever you want it to be as long as it isn't falsey
    }
}
add_action( 'wpseo_add_opengraph_additional_images', 'default_og_image' );

// set the default share image
function default_share_image ($image) {
    if (!$image || $image === 'default') { // twitter will pass an empty string for $image while
        $image = "";
    }

    return $image;
}
// now we can call the same function for both actions without having to set a default facebook image in the UI
add_action( 'wpseo_twitter_image', 'default_share_image' );
add_action( 'wpseo_opengraph_image', 'default_share_image' );
?>
