<?php
/* Template Name: Page-1  
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WisdomLabs
 */

get_header();
?>
<main class="page-1">

	<div id="seccion1" class="modulo-img-slider">
		<div class="container">
			<h2 style="text-align: center;"><small>Come Join Our Dental Family</small> Village Dental</h2>
			<p><a href="https://www.villagedentalnyc.com/our-office/" class="btn btn-secondary">About us</a> <a href="https://www.villagedentalnyc.com/book-appointment/" class="btn btn-transparent">Book an&nbsp;appointment</a></p>
		</div>
	</div>

	<div id="seccion2" class="seccion">
		<div class="sitewrapper">
			<div class="grid2">
				<div>
					<h2>Bienvenido a Clinica dental</h2>
					<span class="divisor"></span>
					<p>Atlanta Dental Spa represents everything “going to the dentist” is not. We have upgraded your dreaded dentist appointment and transformed it into a relaxing and pampering wellness visit.<p>
					<p>Our mission is to deliver the highest quality care, unprecedented comfort, and service. We’re committed to delivering the very best results for you, whether it’s:<p>
					<ul>
						<li>Creating the perfect smile</li>
						<li>Reconstructing your entire mouth</li>
						<li>Helping you achieve total wellness</li>
					</ul>
				</div>
				<div>
					<img src="<?php echo bloginfo('template_url');?>/images/quienessomos.png">
				</div>
			</div>
		</div>
	</div>

	

	<div id="seccion3" class="bloque-contacto">
		<div class="sitewrapper">
			<div class="grid2">
				<div>
					<h2>Reservar Hora</h2>
					<span class="divisor"></span>
					<div>
						<div>
							<h3>Telefono</h3>
							<div>
								<i class="fas fa-phone"></i>
								<span>+56 9 123456789</span>
							</div>
						</div>
						<div>
							<h3>Email</h3>
							<div>
								<i class="fas fa-envelope"></i>
								<span>contacto@clinicadental.com</span>
							</div>
						</div>
					</div>
					<div>
						<h3>Ubicacion</h3>
						<i class="fas fa-map-marker-alt"></i>
						<span>Calle direccion #1234 - Ciudad</span>
					</div>
					<div>
						<div>
							<h3>Nuestras Redes Sociales</h3>
							<div>
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</div>
							<div>
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</div>

						</div>
						
					</div>

					
				</div>
				<div class="formulario">
					<form action="">

					<div class="formulario-margen"><span>Nombre:</span>
										<input type="text" name="firstname" value=""></div>
					<div class="formulario-margen formulario-mitad">
						<div><span>Correo:</span><input type="text" name="lastname" value="">
						</div>
						<div ><span>Telefono:</span><input type="text" name="lastname" value="">
						</div>
					</div>

					
					<div class="formulario-margen"><span>Mensaje:</span>
										<input type="textarea" name="lastname" value=""></div>
					<input class="btn btn-transparent" type="submit" value="Submit">
			</form>
				</div>
			</div>
		</div>
	</div>

	<div id="seccion4" class="seccion">
		<article class="sitewrapper">

			<h2 class="titulo-seccion">Quienes Somos</h2>
			<div class="gallery-01">
				<?php
				$args = array (
				    'category_name' => 'Featured',
				    'post_type' => 'post',
				    'posts_per_page' => 8, 
				);
				$category_block_query = new WP_Query( $args );
				    if ( $category_block_query->have_posts() ) : 
				        ?><ul><?php
				        while ( $category_block_query->have_posts() ) : $category_block_query->the_post(); 
				           ?> 	<li><?php
				            		the_post_thumbnail('wisdomlabs-post-featured');?>
				            		<div class="entry-info">
				            			
				            			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				            			<?php the_excerpt(); ?>
				            		</div>
				        		</li>
				            <?php
				        endwhile; wp_reset_postdata(); ?> 
				        	</ul> <?php
				    else: 
				    endif; 
				?>
			</div>		
			
		
		</article>
	</div>

	<div id="seccion5" class="seccion miembros-equipo">
		<div class="sitewrapper ">

			<h2 class="titulo-seccion">Servicios</h2>
				<ul class="grid3">
					<li class="bloque-chico">
						<a href="">
							<img src="">
							<div class="equipo-info">
								<h3>Nombre Integrante</h3>
								<span>Cargo clinica</span>
							</div>
						</a>
					</li>
					<li class="bloque-chico">
						<a href="">
							<img src="">
							<div class="equipo-info">
								<h3>Nombre Integrante</h3>
								<span>Cargo clinica</span>
							</div>
						</a>
					</li>
					<li class="bloque-chico">
						<a href="">
							<img src="">
							<div class="equipo-info">
								<h3>Nombre Integrante</h3>
								<span>Cargo clinica</span>
							</div>
						</a>
					</li>
				</ul>
			

		</div>
	</div>

	<div class="modulo-frase seccion">
		<aside class="sitewrapper">
			
				<h2><i class="fas fa-quote-left"></i> Everyone seems to know you on a first name basis. They really care about your care plan. You feel like you’re the only patient they have and I love that.<i class="fas fa-quote-right"></i></h2>
				<a href="#" class=""><i class="far fa-play-circle"></i></a>	
		</aside>
	</div>

	<div class="modulo-afp">
		<h2 class="titulo-seccion">Ofrecemos La Mejor Cobertura </h2>
		<div class="sitewrapper">
			<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
			<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
			<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
			<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
			<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
			<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
			<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
		</div>
		
	</div>

	<div class="modulo-testimonios">
		<div class="sitewrapper">
					<div class="testimonios-blockquote">
						<div class="testimonios-name">
							<span class="testimonios-letter">K</span>
							<cite>Kait J.</cite>
							<div class="testimonios-stars">
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
							</div>
						</div>
						<p class="testimonios-body more shortened">I went in a few months ago for a cleaning. Candace was super helpful and friendly! She answered my questions and was great about explaining dental&nbsp;hygiene.</p>
					</div>
					

					<div class="testimonios-blockquote">
						<div class="testimonios-name">
							<span class="testimonios-letter">K</span>
							<cite>Kait J.</cite>
							<div class="testimonios-stars">
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
							</div>
						</div>
						<p class="testimonios-body more shortened">I went in a few months ago for a cleaning. Candace was super helpful and friendly! She answered my questions and was great about explaining dental&nbsp;hygiene.</p>
					</div>
					

					<div class="testimonios-blockquote">
						<div class="testimonios-name">
							<span class="testimonios-letter">K</span>
							<cite>Kait J.</cite>
							<div class="testimonios-stars">
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
							</div>
						</div>
						<p class="testimonios-body more shortened">I went in a few months ago for a cleaning. Candace was super helpful and friendly! She answered my questions and was great about explaining dental&nbsp;hygiene.</p>
					</div>
					

					<div class="testimonios-blockquote">
						<div class="testimonios-name">
							<span class="testimonios-letter">K</span>
							<cite>Kait J.</cite>
							<div class="testimonios-stars">
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
							</div>
						</div>
						<p class="testimonios-body more shortened">I went in a few months ago for a cleaning. Candace was super helpful and friendly! She answered my questions and was great about explaining dental&nbsp;hygiene.</p>
					</div>
					

					<div class="testimonios-blockquote">
						<div class="testimonios-name">
							<span class="testimonios-letter">K</span>
							<cite>Kait J.</cite>
							<div class="testimonios-stars">
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
							</div>
						</div>
						<p class="testimonios-body more shortened">I went in a few months ago for a cleaning. Candace was super helpful and friendly! She answered my questions and was great about explaining dental&nbsp;hygiene.</p>
					</div>
					<div class="testimonios-blockquote">
						<div class="testimonios-name">
							<span class="testimonios-letter">K</span>
							<cite>Kait J.</cite>
							<div class="testimonios-stars">
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
								<i class="fas fa-map-marker-alt"></i>
							</div>
						</div>
						<p class="testimonios-body more shortened">I went in a few months ago for a cleaning. Candace was super helpful and friendly! She answered my questions and was great about explaining dental&nbsp;hygiene.</p>
					</div>
					
			
		</div>
	</div>

	<div id="seccion7" class="seccion">
		<div class="sitewrapper grid3">

			<h2 class="titulo-seccion">Blog</h2>


			<article class="bloque-articulo">
				<figure class="featured-image index-image">
					<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
				</figure>
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">Aumenta tus ventas y clientes</h3>
								<div class="entry-meta">
									Publicado por Antonio hace 3 dias
								</div><!-- .entry-meta -->
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Hacemos llegar tus productos y servicios de forma expedita y efectiva a un público más amplio.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="#">Leer mas -></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>

			<article class="bloque-articulo">
				<figure class="featured-image index-image">
					<img src="<?php echo bloginfo('template_url');?>/images/img2.jpg">
				</figure>
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">Aumenta tus ventas y clientes</h3>
								<div class="entry-meta">
									Publicado por Antonio hace 3 dias
								</div><!-- .entry-meta -->
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Hacemos llegar tus productos y servicios de forma expedita y efectiva a un público más amplio.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="#">Leer mas -></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>

			<article class="bloque-articulo">
				<figure class="featured-image index-image">
					<img src="<?php echo bloginfo('template_url');?>/images/img3.jpg">
				</figure>
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">Aumenta tus ventas y clientes</h3>
								<div class="entry-meta">
									Publicado por Antonio hace 3 dias
								</div><!-- .entry-meta -->
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Hacemos llegar tus productos y servicios de forma expedita y efectiva a un público más amplio.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="#">Leer mas -></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>

		</div>
	</div>

<div class="modulo-frase seccion">
		<aside class="sitewrapper">
			
				<h2><i class="fas fa-quote-left"></i> Everyone seems to know you on a first name basis. They really care about your care plan. You feel like you’re the only patient they have and I love that.<i class="fas fa-quote-right"></i></h2>
				<a href="#" class="btn btn-transparent">SOLICITE SU COTIZACION</a>	
		</aside>
	</div>

	<div id="seccion8" class="seccion">
		<aside class="sitewrapper grid2">
			<h2 class="titulo-seccion">Contacto</h2>
			<p>
				Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei
				eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
			</p>
			<form action="">
				<fieldset>
					<legend>Envienos su consulta:</legend>
					Nombre:<br>
					<input type="text" name="firstname" value=""><br>
					Correo:<br>
					<input type="text" name="lastname" value=""><br><br>
					Mensaje:<br>
					<input type="textarea" name="lastname" value=""><br><br>
					<input type="submit" value="Submit">
				</fieldset>
			</form> 
					
		</aside>
	</div>
<?php

get_footer();
