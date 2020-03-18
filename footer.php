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
		<div class="sitewrapper">
			
				<h2>Send your questions</h2>
				<a href="http://workonlinelab.com/gloway/contacto/" class="btn-transparent btn">CONTACT</a>	
		</div>
	</div>
	<footer id="colophon" class="site-footer">
	<div class="footer-wrap">	<div class="sitewrapper grid4"><div>
						<h3>Contact</h3>
						<div class="divider3"> <span></span></div>
						 <address><abbr title="Phone">Phone:</abbr> +56 9 123456789</address>             
			             <address> <strong>Horario de atención</strong><br>Monday to Friday: 9:00 - 18:00 hrs.</address>             
			             <address><i class="icon-envelope-alt"></i>&nbsp;<strong>hscarvac</strong>@uc.cl<br><i class="icon-phone-sign"></i>&nbsp;<strong>Contact</strong> Hector Carvacho</address> 
					</div>
					<div>
						<h3>Latest publications</h3>
						<div class="divider3"> <span></span></div>
						  <ul class="list">
				<!-- <li><a href="conocenos.html">Con&oacute;cenos</a></li> -->
				<li><a href="/page-como-comprar.asp" title="como comprar">CV</a></li>
				<li><a href="/page-terminos-y-condiciones.asp" title="terminos y condiciones">Research</a></li>
				<li><a href="/page-trabaja-con-nosotros.asp" title="bolsa de trabajo">Publications</a></li>
				<li><a href="/page-mapa-del-sitio.asp" title="mapa del sitio">Articles</a></li>
                <li><a href="/page-instalacion-experta.asp" title="instalacion experta">Contact</a></li>
			</ul>
					</div>
					<div>
						<h3>Site menu</h3>
						<div class="divider3"> <span></span></div>
						 <ul class="list">
				<!-- <li><a href="conocenos.html">Con&oacute;cenos</a></li> -->
				<li><a href="/page-como-comprar.asp" title="como comprar">CV</a></li>
				<li><a href="/page-terminos-y-condiciones.asp" title="terminos y condiciones">Research</a></li>
				<li><a href="/page-trabaja-con-nosotros.asp" title="bolsa de trabajo">Publications</a></li>
				<li><a href="/page-mapa-del-sitio.asp" title="mapa del sitio">Articles</a></li>
                <li><a href="/page-instalacion-experta.asp" title="instalacion experta">Contact</a></li>
			</ul>
					</div>
					<div>
						<h3>Social Network</h3>
						<div class="divider3"> <span></span></div>
						<ul class="list">
				<!-- <li><a href="conocenos.html">Con&oacute;cenos</a></li> -->
				<li><a href="/page-como-comprar.asp" title="como comprar">Google Scholar</a></li>
				<li><a href="/page-terminos-y-condiciones.asp" title="terminos y condiciones">Harvard University</a></li>
				<li><a href="/page-trabaja-con-nosotros.asp" title="bolsa de trabajo">Universidad Catolica</a></li>
				<li><a href="/page-mapa-del-sitio.asp" title="mapa del sitio">CIIR</a></li>
			</ul>
					</div>
			</div></div>
		<div class="site-info">
			
			
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s %2$s.', 'Gloway' ), 'Copyright ©2019', '<a href="#">Hector Carvacho</a>' );
				?>
				<span class="sep"> | </span>
				<a href="<?php echo esc_url( __( '#', 'tecnocreativo' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Developed by %s', 'wisdomlabs' ), 'OnlineClientsLab' );
				?>
			</a>
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
