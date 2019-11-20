<?php
$related = get_posts( 
    array( 
        'category__in' => wp_get_post_categories( $post->ID ), 
        'numberposts'  => 5, 
        'post__not_in' => array( $post->ID ) 
    ) 
);

if( $related ) { 
    foreach( $related as $post ) {
        setup_postdata($post);
        /*whatever you want to output*/the_title();
    }
    wp_reset_postdata();
}
?>
