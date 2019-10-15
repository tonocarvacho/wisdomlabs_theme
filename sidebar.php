<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WisdomLabs
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">

		<div class="sidebarlinks">
			<div class="sidecall">
				<h2>ENVIENOS SUS DUDAS Y SOLICITE SU COTIZACION.</h2>
				<a href="http://workonlinelab.com/gloway/contacto/" class="linebtn btncolorfooter">CONTACTARSE</a>
			</div>

			<article class="bloque-articulo">
				
					<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
				
					<div class="entry-info">
				
							<h3 class="entry-title">PRODUCTO DESTACADO</h3>
								
							
				
					
						
				
					</div><!-- .entry-info -->
			</article>

			<article class="bloque-articulo">
				
					<img src="<?php echo bloginfo('template_url');?>/images/img2.jpg">
				
					<div class="entry-info">
						
							<h3 class="entry-title">PROMOCION OFERTA</h3>
								
						
					
					
					</div><!-- .entry-info -->
			</article>

			<article>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</article>

		</div>
	
</aside><!-- #secondary -->
