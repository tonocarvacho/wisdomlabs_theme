<?php
$args = array (
    'tag' => 'Post-Formats',
    'post_type' => 'post',
    'posts_per_page' => 3, 
);
$tags_block_query = new WP_Query( $args );
    if ( $tags_block_query->have_posts() ) : 
        ?><ul><?php
        while ( $tags_block_query->have_posts() ) : $tags_block_query->the_post(); 
           ?> <li class=""><?php
            the_post_thumbnail('wisdomlabs-post-featured');?>
           
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
        endwhile; wp_reset_postdata(); ?> </ul> <?php
    else: 
    endif; 
?>
