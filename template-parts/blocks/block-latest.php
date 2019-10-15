<?php
$args = array (
    'post_type' => 'post',
    'orderby'   => 'date',
    'posts_per_page' => 2, 
);
$latest_block_query = new WP_Query( $args );
    if ( $latest_block_query->have_posts() ) : 
        ?><ul><?php
        while ( $latest_block_query->have_posts() ) : $latest_block_query->the_post(); 
           ?> <li class=""><?php
            the_post_thumbnail('wisdomlabs-post-featured');?>
           
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
        endwhile; wp_reset_postdata(); ?> </ul> <?php
    else: 
    endif; 
?>