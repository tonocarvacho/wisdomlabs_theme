<?php class posts_blocks_widget extends WP_Widget {
// Initialize Widget with Options
    public function __construct() {
        parent::__construct(
            'posts_blocks_widget',
            'posts blocks widget',
            array(
                'classname'   => 'posts-blocks-widget',
                'description' => 'List posts blocks widget'
            )
        );
    }

// Widget Front End
public function widget( $args, $instance ) {
    extract( $args );
    extract( $instance );
    echo $before_widget;

    /* Widget Content Below */
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
        if ($job == 'Category') {
            $args = array ('category_name' => $category);
            $category_widget_query = new WP_Query( $args );
                if ( $category_widget_query->have_posts() ) : 
                    ?><ul><?php
                    while ( $category_widget_query->have_posts() ) : $category_widget_query->the_post(); 
                       ?> <li class=""><?php
                        the_post_thumbnail('wisdomlabs-post-featured');?>
                       
                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                   <div class="entry-content">
            <?php
                $length_setting = get_theme_mod('length_setting');
                if ( 'excerpt' === $length_setting ) {
                    the_excerpt();
                } else {
                    the_content();
                }
                ?>
        </div><!-- .entry-content -->
    </li>
                        <?php
                    endwhile; wp_reset_postdata(); ?> </ul> <?php
                else: 
                endif; 
           
        } elseif ($job == 'Tags') {

            $args = array (
                'tag' => $widgettags,
                'post_type' => 'post',
                'posts_per_page' => 3, 
            );
            $tags_widget_query = new WP_Query( $args );
            if ( $tags_widget_query->have_posts() ) : 
                ?><ul><?php
                while ( $tags_widget_query->have_posts() ) : $tags_widget_query->the_post(); 
                 ?> <li class=""><?php
                 the_post_thumbnail('wisdomlabs-post-featured');?>

                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                 <?php
             endwhile; wp_reset_postdata(); ?> </ul> <?php
            else: 
            endif;

        } elseif ($job == 'Single') {

            $args = array (
                'name' => $postslug,
                'post_type' => 'post',
            );
            $single_widget_query = new WP_Query( $args );
            if ( $single_widget_query->have_posts() ) : 
                ?><ul><?php
                while ( $single_widget_query->have_posts() ) : $single_widget_query->the_post(); 
                 ?> <li class=""><?php
                 the_post_thumbnail('wisdomlabs-post-featured');?>

                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                 <?php
             endwhile; wp_reset_postdata(); ?> </ul> <?php
            else: 
            endif;

        } elseif ($job == 'Latest') {
            
            global $post;
            $args = array( 
                'posts_per_page' => 3, 
                'order'=> 'ASC', 
                'orderby' => 'title' 
            );
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
              setup_postdata( $post ); ?> 
                <div>
                    <?php the_date(); ?>
                    <br />
                    <?php the_title(); ?>   
                    <?php the_excerpt(); ?>
                </div>
            <?php
            endforeach; 
            wp_reset_postdata();
            
                        
        } elseif ($job == 'Related') {
                    
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

        } elseif ($job == 'Random') {

            $args = array (
                'post_type' => 'post',
                'orderby'   => 'rand',
                'posts_per_page' => 2, 
            );
            $random_widget_query = new WP_Query( $args );
            if ( $random_widget_query->have_posts() ) : 
                ?><ul><?php
                while ( $random_widget_query->have_posts() ) : $random_widget_query->the_post(); 
                 ?> <li class=""><?php
                 the_post_thumbnail('wisdomlabs-post-featured');?>

                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                 <?php
             endwhile; wp_reset_postdata(); ?> </ul> <?php
            else: 
            endif; 

        }

    /* Widget Content Above */
    echo $after_widget;
}



// Widget Admin Form
public function form( $instance ) { ?>
<?php extract( $instance ); ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label>
                <input type="radio" value="Related" name="<?php echo $this->get_field_name( 'job' ); ?>" <?php checked( $job, 'Related' ); ?> id="<?php echo $this->get_field_id( 'job' ); ?>" />
                <?php esc_attr_e( 'Related Posts', 'text_domain' ); ?>
            </label>
        </p>
        <p>
            <label>
                <input type="radio" value="Latest" name="<?php echo $this->get_field_name( 'job' ); ?>" <?php checked( $job, 'Latest' ); ?> id="<?php echo $this->get_field_id( 'jos' ); ?>" />
                <?php esc_attr_e( 'Latest Posts', 'text_domain' ); ?>
            </label>
        </p>
        <p>
            <label>
                <input type="radio" value="Random" name="<?php echo $this->get_field_name( 'job' ); ?>" <?php checked( $job, 'Random' ); ?> id="<?php echo $this->get_field_id( 'jos' ); ?>" />
                <?php esc_attr_e( 'Random Posts', 'text_domain' ); ?>
            </label>
        </p>

        <p>
            <label>
                <input type="radio" value="Single" name="<?php echo $this->get_field_name( 'job' ); ?>" <?php checked( $job, 'Single' ); ?> id="<?php echo $this->get_field_id( 'jos' ); ?>" />
                <?php esc_attr_e( 'Single Post:', 'text_domain' ); ?>
            </label>
            <select id="<?php echo $this->get_field_name( 'postslug' ); ?>" name="<?php echo $this->get_field_name( 'postslug' ); ?>">
            <option value="">Select a post...</option>
            <?php
            global $post;
            $args = array( 'numberposts' => -1);
            $posts = get_posts($args);
            foreach( $posts as $post ) : setup_postdata($post); 

                $valueslug = $post->post_name;?>
                <option value="<?php echo $valueslug ?>" <?php echo $valueslug == $postslug ? "selected" : ""; ?>><?php echo $valueslug ?></option>
            <?php endforeach; ?>
        </select>
        </p>

        

        <p>
            <label>
                <input type="radio" value="Tags" name="<?php echo $this->get_field_name( 'job' ); ?>" <?php checked( $job, 'Tags' ); ?> id="<?php echo $this->get_field_id( 'jos' ); ?>" />
                <?php esc_attr_e( 'Posts by tags:', 'text_domain' ); ?>
            </label>
            <?php
        global $post;
        $args = array(
            'smallest' => 8, 'largest' => 22, 'unit' => 'pt', 'number' => 999,
            'format' => 'array', 'orderby' => 'name', 'order' => 'ASC',
            );
        $tags = get_tags($args);
        ?>
        
            <select id="<?php echo $this->get_field_name( 'widgettags' ); ?>" name="<?php echo $this->get_field_name( 'widgettags' ); ?>" >
                <option value="">Select a tag...</option>

                <?php foreach ($tags as $tag) {
                    $tagvalue = $tag->slug;?>
                    <option value="<?php echo $tagvalue ?>" <?php echo $tagvalue == $widgettags ? "selected" : ""; ?>><?php echo $tagvalue ?></option>
                <?php } ?>
            </select>
        </p>

        <p>
            <label>
                <input type="radio" value="Category" name="<?php echo $this->get_field_name( 'job' ); ?>" <?php checked( $job, 'Category' ); ?> id="<?php echo $this->get_field_id( 'jos' ); ?>" />
                <?php esc_attr_e( 'Posts by category:', 'text_domain' ); ?>
            </label>
            <?php wp_dropdown_categories( array( 'show_option_none' =>'Select a category...','name' => $this->get_field_name( 'category' ), 'value_field' => 'slug', 'selected' => $category ) ); ?>
        </p>

        
    <?php }


// Sanitize and Save Options
    public function update( $new_instance, $old_instance ) {
        extract( $new_instance );
        $instance = array();

        $instance['job'] = ( !empty( $job ) ) ? sanitize_text_field( $job ) : null;
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        if ($job == 'Category') {
        $instance['category'] = ( ! empty( $new_instance['category'] ) ) ? strip_tags( $new_instance['category'] ) : '';
        }
        if ($job == 'Single') {
        $instance['postslug'] = ( ! empty( $new_instance['postslug'] ) ) ? strip_tags( $new_instance['postslug'] ) : '';
        }
        if ($job == 'Tags') {
        $instance['widgettags'] = ( ! empty( $new_instance['widgettags'] ) ) ? strip_tags( $new_instance['widgettags'] ) : '';
        }
        return $instance;
    }
}

function posts_blocks_widget() {
    register_widget( 'posts_blocks_widget' );
}
add_action( 'widgets_init', 'posts_blocks_widget' );
?>
