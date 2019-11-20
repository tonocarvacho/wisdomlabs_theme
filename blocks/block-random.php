<?php
$args = array (
    'post_type' => 'post',
    'orderby'   => 'rand',
    'posts_per_page' => 2, 
);
$random_block_query = new WP_Query( $args );
    if ( $random_block_query->have_posts() ) : 
        ?><ul><?php
        while ( $random_block_query->have_posts() ) : $random_block_query->the_post(); 
           ?> <li class="e"><?php
            the_post_thumbnail('wisdomlabs-post-featured');?>
           
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
        endwhile; wp_reset_postdata(); ?> </ul> <?php
    else: 
    endif; 
?>