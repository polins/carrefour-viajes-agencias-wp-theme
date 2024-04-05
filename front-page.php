<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package carrefour-viajes-agencias
 */

get_header();
?>

<!--

- buscador: al buscar carga solo las seleccionadas
- localizame
- click en el listado hace zoom sobre el mapa y viversa
- banner video
- bloque seo: agencias en madrid
- responsive

ul>
	<li>mapa + buscador</li>
	<li>agencias cerca de mi</li>
	<li>banner + video</li>
	<li>bloque seo</li>
</ul-->


	<div class="container mx-auto">

		<div class="mx-auto mb-10 max-w-xl">
			<h1 class="text-center text-blue font-medium text-2xl mb-2">Busca tu agencia de viajes <strong>Viajes Carrefour</strong></h1>
			<h2 class="text-center text-blue-dark mb-5">Ponemos a tu disposición nuestro buscador de agencias de viajes.</h2>
			<div class="flex">
				<form action="" class="w-full flex mr-5">
					<input type="text" placeholder="Localidad o código postal" class="w-full border border-gray-light px-5 py-2 outline-none">
					<button class="rounded-tr rounded-br bg-blue-dark text-white p-2 inline-block border border-blue-dark" style="width:42px"><span class="icon-search"></span></button>
				</form>
				<a href="javascript:void(0);" class="rounded bg-blue-dark text-white text-bold ml-auto px-5 py-2 flex items-center"><span class="vc-icon-map text-2xl"></span>Localízame</a>
			</div>	
		</div>


		<div class="columns-2 mb-10">
			<div style="max-height: 700px;" class="overflow-y-scroll">
				<?php

					$temp = $wp_query; 
					$wp_query = null; 
					$wp_query = new WP_Query(); 
					$wp_query->query('showposts=999&post_type=agencia');
					 while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<div class="flex flex-col border border-gray-light p-4 pr-10 mb-2">
						<div class="text-blue text-xl font-medium mb-2"><?php the_title(); ?></div>
						<div class="flex mb-2"><span class="icon-ubication relative top-1 mr-2"></span> <span><?php the_field('direccion_completa') ?></span></div>
						<div class="flex mb-2"><span class="icon-phone relative top-1 mr-2"></span> <a href="tel:<?php the_field('telefono_fijo') ?>"><?php the_field('telefono_fijo') ?></a></div>
						<div><a href="<?php the_permalink(); ?>" class="bg-blue-dark rounded text-white py-1 px-5">Ver ficha</a></div>
					</div>

				<?php 

					endwhile;
					$wp_query = null; 
			 		$wp_query = $temp;

				 ?>				


			</div>
			<div id="map" style="height:700px" class="rounded border border-gray-light"></div>
		</div>
	</div>
<?php
get_footer();
