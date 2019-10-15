<?php
$args = array (
    'category_name' => 'Featured',
    'post_type' => 'post',
    'posts_per_page' => 4, 
);
$category_block_query = new WP_Query( $args );
    if ( $category_block_query->have_posts() ) : 
        ?><ul class="clean-list"><?php
        while ( $category_block_query->have_posts() ) : $category_block_query->the_post(); 
           ?> <li class="clean-list"><?php
            the_post_thumbnail('wisdomlabs-post-featured');?>
            <div class="entry-info">
            <?php windowslabs_the_category_list(); ?>
           
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_excerpt(); ?>
            </div></li>
            <?php
        endwhile; wp_reset_postdata(); ?> </ul> <?php
    else: 
    endif; 
?>