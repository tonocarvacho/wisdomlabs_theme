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
			<h3><?php the_field('marca');?></h3>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<span class="entry-title galerytitle"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></span>' );
			endif;
			?>
		</header><!-- .entry-header -->
		<div class="continue-reading">
				<?php
				$read_more_link = sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Ver Detalle > %s', 'wisdomlabs' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				);
				?>
						
				<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
					<?php echo $read_more_link; ?>
				</a>
			</div><!-- .continue-reading -->
	
		
	
		
	
		
	</div><!-- .entry-info -->
</article><!-- #post-<?php the_ID(); ?> -->
