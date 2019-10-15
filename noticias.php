<?php
/* Template Name: Noticias
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WisdomLabs
 */

get_header();
?>
<main id="content" class="no-top-image sitewrapper">
	<div id="wrap" class="site-main">
		
		<?php
$args = array(
  'post_type'   => 'noticias',
  'post_status' => 'publish',
 );
 
$testimonials = new WP_Query( $args );
if( $testimonials->have_posts() ) :
?>
  <ul>
    <?php
      while( $testimonials->have_posts() ) :
        $testimonials->the_post();
        ?>
          <li><?php printf( '%1$s - %2$s', get_the_title(), get_the_content() );  ?></li>
        <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php
else :
  esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
endif;
?>

		</div><!-- #wrap -->

<?php
get_sidebar();
get_footer();
