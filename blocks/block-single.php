<?php
$args = array (
    'name' => 'about-my-life',
    'post_type' => 'post',
);
$single_block_query = new WP_Query( $args );
    if ( $single_block_query->have_posts() ) : 
        ?><ul><?php
        while ( $single_block_query->have_posts() ) : $single_block_query->the_post(); 
           ?> <li class=""><?php
            the_post_thumbnail('wisdomlabs-post-featured');?>
           
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
        endwhile; wp_reset_postdata(); ?> </ul> <?php
    else: 
    endif; 
?>