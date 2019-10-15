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


<div class="breadcrumbs">
	<?php 

the_field('precio'); 
			?>
	<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '
<span id="breadcrumbs">','</span>
' );
}
?>

</div>


	<divS class="entry-header">
		<?php
		wisdomlabs_tags();
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		
		if ( 'post' === get_post_type() ) :
		?>
			
		<?php endif; 

		?>
		<div class="entry-meta">
					<?php
					windowslabs_the_category_list();
					wisdomlabs_posted_by();
					wisdomlabs_posted_on();
					?>
				</div><!-- .entry-meta -->

	</divS><!-- .entry-header -->


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
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php wisdomlabs_entry_footer(); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


