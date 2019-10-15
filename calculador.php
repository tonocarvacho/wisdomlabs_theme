<?php
/* Template Name: Gloway 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WisdomLabs
 *
 */

get_header();
?>
<main id="content" class="site-content sitewrapper">
	<div id="wrap" class="site-main">
		<div>
			calculador
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div><!-- #wrap -->

<?php
get_sidebar();
get_footer();
