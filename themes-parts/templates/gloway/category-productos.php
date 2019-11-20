<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WisdomLabs
 */

get_header();
?>
<main id="content" class="no-top-image sitewrapper no-sidebar products">
	<div id="wrap" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
					) );
					?>
				</nav>
			</header><!-- .page-header -->
			<div class="grid4">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'productos' );

			endwhile;
			?></div><?php
			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div><!-- #wrap -->

<?php

get_footer();
