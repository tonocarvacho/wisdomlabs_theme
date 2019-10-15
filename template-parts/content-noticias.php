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
	<?php


	
	if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image index-image">
		<?php
		the_post_thumbnail('wisdomlabs-index-image');
		?>
	</figure><!-- .featured-image full-bleed -->
	<?php } ?>
	<div class="entry-info">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					
					wisdomlabs_posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
	
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
	
		<div class="continue-reading">
				<?php
				$read_more_link = sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Leer mas >> %s', 'wisdomlabs' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				);
				?>
						
				<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
					<?php echo $read_more_link; ?>
				</a>
			</div><!-- .continue-reading -->
	
	</div><!-- .entry-info -->
</article><!-- #post-<?php the_ID(); ?> -->
