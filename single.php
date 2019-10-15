<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WisdomLabs
 */

get_header();
?>
<main id="content" class="no-top-image sitewrapper">
	<div id="wrap" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			wisdomlabs_post_navigation();

		endwhile; // End of the loop.
		?>

	</div><!-- #wrap -->

<?php
get_sidebar();

get_footer();
