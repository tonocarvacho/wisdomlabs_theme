<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WisdomLabs
 */
?>

<?php if ( is_active_sidebar("aftercontent") ) : ?>
<aside id="aftercontent" class="widget-area">
	<?php dynamic_sidebar( 'aftercontent' ); ?>
</aside><!-- End Widget -->
<?php endif;?>

		
	</main><!-- #content -->
<div id="seccion6" class="modulo-frase seccion">
		<aside class="sitewrapper grid2 justifycenter">
			
				<h2>Nos ajustamos a sus necesidades.</h2>
				<a href="http://workonlinelab.com/gloway/contacto/" class="linebtn btncolorfooter">SOLICITE SU COTIZACION</a>	
		</aside>
	</div>
	<footer id="colophon" class="site-footer">
	<div class="footer-wrap">	<div class="sitewrapper grid4"><div>
						<h3>Contacto</h3>
						<div class="divider3"> <span></span></div>
						 <address><abbr title="Phone"><br>fono:</abbr> (562) 2495 77 40</address>             
			             <address> <strong>Horario de atención</strong><br>Lunes a Viernes: 9:00 - 18:00 hrs.<br>Sábado: 9:00 - 14:00 hrs.</address>             
			             <address><i class="icon-envelope-alt"></i>&nbsp;<strong>ventas</strong>@gloway.cl<br><i class="icon-phone-sign"></i>&nbsp;<strong>Contacta</strong> nuestro call center </address> 
					</div>
					<div>
						<h3>Sucursales</h3>
						<div class="divider3"> <span></span></div>
						 <address><i class="icon-chevron-sign-right"></i>&nbsp;<strong>Santiago</strong>&nbsp;(+562) 2495 7740</address>
					</div>
					<div>
						<h3>Sitio</h3>
						<div class="divider3"> <span></span></div>
						 <ul class="list">
				<!-- <li><a href="conocenos.html">Con&oacute;cenos</a></li> -->
				<li><a href="/page-como-comprar.asp" title="como comprar">Nosotros</a></li>
				<li><a href="/page-terminos-y-condiciones.asp" title="terminos y condiciones">Productos</a></li>
				<li><a href="/page-trabaja-con-nosotros.asp" title="bolsa de trabajo">Promociones</a></li>
				<li><a href="/page-mapa-del-sitio.asp" title="mapa del sitio">Noticias</a></li>
                <li><a href="/page-instalacion-experta.asp" title="instalacion experta">Contacto</a></li>
			</ul>
					</div>
					<div>
						<h3>Productos</h3>
						<div class="divider3"> <span></span></div>
						<ul class="list">
				<!-- <li><a href="conocenos.html">Con&oacute;cenos</a></li> -->
				<li><a href="/page-como-comprar.asp" title="como comprar">Split Muro</a></li>
				<li><a href="/page-terminos-y-condiciones.asp" title="terminos y condiciones">Portatil</a></li>
				<li><a href="/page-trabaja-con-nosotros.asp" title="bolsa de trabajo">Ducto</a></li>
				<li><a href="/page-mapa-del-sitio.asp" title="mapa del sitio">Piso Cielo</a></li>
                <li><a href="/page-instalacion-experta.asp" title="instalacion experta">Casette</a></li>
                <li><a href="/page-instalacion-experta.asp" title="instalacion experta">Accesorios</a></li>
			</ul>
					</div>
			</div></div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://tecnocreativo.cl/', 'tecnocreativo' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Desarrollado por %s', 'wisdomlabs' ), 'Tecnocreativo' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s %2$s.', 'Gloway' ), 'Copyright ©2018 Gloway. Todos los derechos reservados. - ', '<a href="http://gloway.cl">Gloway.cl</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
<script type="text/javascript">
	
	jQuery(document).ready(function( $ ) {
	
  $(".wasap").click(function() {
		$(".codigoqr").toggle();

	});

  $('.menu-item-has-children').hover(function(){
    $('.sub-menu', this).toggle(); // p00f
});
	
	
});
</script>
