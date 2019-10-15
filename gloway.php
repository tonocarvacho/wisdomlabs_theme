<?php
/* Template Name: Gloway 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WisdomLabs
 */

get_header();
?>
<main id="content" class="landingpage no-sidebar">
	<div id="wrap" class="site-main">

	 <!-- Slideshow container -->
<div class="slideshow-container">
<div class="sliderdots" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  
</div> 
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    
    <img src="<?php echo bloginfo('template_url');?>/images/slide1.jpg" style="width:100%">
    
  </div>

  <div class="mySlides fade">
   
    <img src="<?php echo bloginfo('template_url');?>/images/slide2.jpg" style="width:100%">
    
  </div>

 

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<!-- The dots/circles -->

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

	<div id="seccion2" class="seccion fondoraya">
		<div class="sitewrapper grid3">

			<article class="bloque-articulo">
				
					<img src="<?php echo bloginfo('template_url');?>/images/img1.jpg">
				
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">SPLIT MURO</h3>
								
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Disfruta de nuestra calidad de equipos y variedad de marcas y modelos.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="http://workonlinelab.com/gloway/category/productos/split-muro/">Ver Productos ></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>

			<article class="bloque-articulo">
				
					<img src="<?php echo bloginfo('template_url');?>/images/img2.jpg">
				
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">PORTATIL</h3>
								
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Disfruta de nuestra calidad de equipos y variedad de marcas y modelos.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="http://workonlinelab.com/gloway/category/productos/portatil/">Ver Productos ></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>

			<article class="bloque-articulo">
				
					<img src="<?php echo bloginfo('template_url');?>/images/img3.jpg">
				
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">DUCTO</h3>
								
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Disfruta de nuestra calidad de equipos y variedad de marcas y modelos.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="http://workonlinelab.com/gloway/category/productos/ducto/">Ver Productos ></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>
			<article class="bloque-articulo">
				
					<img src="<?php echo bloginfo('template_url');?>/images/img3.jpg">
				
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">PISO CIELO</h3>
								
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Disfruta de nuestra calidad de equipos y variedad de marcas y modelos.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="http://workonlinelab.com/gloway/category/productos/piso-cielo/">Ver Productos ></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>
			<article class="bloque-articulo">
				
					<img src="<?php echo bloginfo('template_url');?>/images/img3.jpg">
				
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">CASETTE</h3>
								
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Disfruta de nuestra calidad de equipos y variedad de marcas y modelos.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="http://workonlinelab.com/gloway/category/productos/casette/">Ver Productos ></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>
			<article class="bloque-articulo">
				
					<img src="<?php echo bloginfo('template_url');?>/images/img3.jpg">
				
					<div class="entry-info">
						<header class="entry-header">
							<h3 class="entry-title">ACCESORIOS</h3>
								
							
						</header><!-- .entry-header -->
					
						<div class="entry-content">
							<p>Disfruta de nuestra calidad de equipos y variedad de marcas y modelos.</p>
						</div><!-- .entry-content -->
					
						<div class="continue-reading">
								<a href="http://workonlinelab.com/gloway/category/productos/accesorios/">Ver Productos ></a>
							</div><!-- .continue-reading -->
					</div><!-- .entry-info -->
			</article>

		</div>
	</div>
<div id="scroll"></div>
	<div id="seccion3" class="seccion">
		<div class="sitewrapper grid2">
					
					<div class="texttriang">
						<h2>¿Por qué elegir nuestros productos?</h2>
						<p>Contamos con una gran variedad de productos para clomatización, así como continuidad en stock de todas nuestras unidades, disponiendo de una garantía total de dos años para el equipo completo. Además contamos con repuestos originales para toda nuestra gama de unidades.<p>
						<h3>Ejemplo cracterística N1</h3>
						<h3>Ejemplo cracterística N2</h3>
						<h3>Ejemplo cracterística N3</h3>
						<h3>Ejemplo cracterística N4</h3>
						<h3>Ejemplo cracterística N5</h3>


					</div>

				</div>
		
	</div>

	<div id="seccion4" class="fondoraya">
		
		<aside class="sitewrapper icons-text grid3">
			<div class="bloque-chico">
				<img src="<?php echo bloginfo('template_url');?>/images/bene1.png">
				<h3>NORMA NACIONAL</h3>
				<p>Nuestros equipos cumplen con la Norma Chilena Oficial NCh3081.Of2007</p>
			</div>
			<div class="bloque-chico">
				<img src="<?php echo bloginfo('template_url');?>/images/bene2.png">
				<h3>EXCLUSIVIDAD</h3>
				<p>Somos representantes exclusivos para Chile de AIRSYS</p>
				
			</div>
			<div class="bloque-chico">
				<img src="<?php echo bloginfo('template_url');?>/images/bene3.png">
				<h3>INTERNACIONAL</h3>
				<p>Cumplimos con normas medioambientales de la Union Europea y USA</p>
				
			</div>
			
			
		</aside>
	</div>

	<div id="testigos">
		<article class="sitewrapper">

			<h2 class="titulo-seccion">QUE DICEN NUESTROS CLIENTES</h2>
			
			<aside class="sitewrapper icons-text grid3">
			<div class="bloque-chico">
				
				<div class="testiblob">
								<p>"Creamos tu presencia en internet y te entregamos nuevas herramientas para expandir tu negocio."</p>
							<b>Jorge Gonzales</b><br>
						<span>Quilpue - Chile</span></div>
								<div class="triangdown"></div>
				<img src="<?php echo bloginfo('template_url');?>/images/int1.png">
			</div>
			<div class="bloque-chico">
				
				<div class="testiblob">
								<p>"Hacemos llegar tus productos y servicios de forma expedita y efectiva a un público más amplio."</p>
							<b>Juan Perez</b><br>
						<span>Valparaiso - Chile</span></div>
								<div class="triangdown"></div>
				<img src="<?php echo bloginfo('template_url');?>/images/int2.png">
				
			</div>
			<div class="bloque-chico">
				
				<div class="testiblob">
								<p>"Te ofrecemos sistemas que agilizan y automatizan tu empresa para ser transparente y efectiva."</p>
								<b>Pedro Paramo</b><br>
							<span>Santiago - Chile</span></div>
								<div class="triangdown"></div>
				<img src="<?php echo bloginfo('template_url');?>/images/int3.png">
				
			</div>
			
			
		</aside>
				
		</article>
	</div>



</div><!-- #wrap -->
<?php

get_footer();
