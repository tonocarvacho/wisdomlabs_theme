<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WisdomLabs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		
		if ( 'post' === get_post_type() ) :
		?>
			
		<?php endif; 
		wisdomlabs_tags();?>

	</header><!-- .entry-header -->


<!-- featured-image  -->
<?php if ( is_active_sidebar('sidebar-1') && has_post_thumbnail() ) { ?>
			<figure class="featured-image centered-image">
	<?php the_post_thumbnail('wisdomlabs-post-featured'); ?>
			</figure><!-- .featured-image post -->

<?php } elseif ( ! is_active_sidebar('sidebar-1') && has_post_thumbnail() ) { ?>
			<figure class="featured-image full-bleed">
	<?php the_post_thumbnail('wisdomlabs-full-bleed'); ?>
			</figure><!-- .featured-image full-bleed -->
	<?php } ?>



	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wisdomlabs' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wisdomlabs' ),
			'after'  => '</div>',
		) );
		?>
		<h3>Precio:</h3><span><?php the_field('precio');?></span><br>
		<h3>Marca</h3><span><?php the_field('marca');?></span><br>
		<h3>Caracteristicas:</h3><?php the_field('caracteristicas');?>
		

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wisdomlabs_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


