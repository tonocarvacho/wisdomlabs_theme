<?php if ( $front_page_query->have_posts() ) : 
	while ( $front_page_query->have_posts() ) : $front_page_query->the_post(); 
    ?>
            <li class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
    endwhile; wp_reset_postdata(); 
else: 

	endif; 