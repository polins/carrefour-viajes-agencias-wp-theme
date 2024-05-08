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

	<div class="container mx-auto site-container">

		<div class="mx-auto mb-10 max-w-2xl">
			<div class="flex">
				<form action="" class="w-full flex mr-5">
					<input type="text" placeholder="Escribe la localidad o el código postal" class="w-full border border-gray-light px-5 py-2 outline-none">
					<button class="rounded-tr rounded-br bg-blue-dark text-white p-2 inline-block border border-blue-dark" style="width:42px"><span class="icon-search"></span></button>
				</form>
				<a href="javascript:void(0);" class="rounded bg-blue-dark text-white text-bold ml-auto px-5 py-2 flex items-center whitespace-nowrap"><span class="vc-icon-map text-2xl"></span>Buscar agencias cerca</a>
			</div>	
		</div>

		<h1 class="font-medium text-2xl mb-2">Busca tu agencia de viajes Viajes Carrefour</h1>
		<h2 class="mb-5">Encuentra tu agencia Viajes Carrefour más cercana</h2>

		<div class="flex flex-col-reverse md:block md:columns-2 mb-10">
			<div style="max-height: 700px;" class="overflow-y-scroll">
				<?php

					$temp = $wp_query; 
					$wp_query = null; 
					$wp_query = new WP_Query(); 
					$wp_query->query('showposts=999&post_type=agencia');
					 while ($wp_query->have_posts()) : $wp_query->the_post(); 

						get_template_part( 'template-parts/cards/agencias' );

					endwhile;
					$wp_query = null; 
			 		$wp_query = $temp;

				 ?>				


			</div>
			<div id="map" style="height:700px" class="mb-5 md:mb-0 rounded border border-gray-light"></div>
		</div>

	</div>

	<div class="bg-gray-light p-10 my-20">
		<div class="container mx-auto">

			<iframe  class="mx-auto w-full" src="https://player.vimeo.com/video/385199405?h=7a673fdb5e&color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>

		</div>
	</div>


	<div class="site-container container mx-auto">

		<div class="my-20">
			<div class="text-xl text-center mb-5">
				Aquí están todas nuestras Agencias de viajes Viajes Carrefour:
			</div>

			<?php 

				$terms = get_terms( array(
    				'taxonomy'   => 'localidad',
    				'hide_empty' => false,
				) );

				?>

			<div class="grid grid-cols-2 md:grid-cols-4 gap-1">
				<?php foreach ($terms as $term) {  if(get_field('tipo', $term) == 'provincia'){ ?>
					
					<div>
						<a href="<?php echo get_term_link( $term->term_id ); ?>" class="text-center md:text-left hover:underline text-black-alternative"><?php echo $term->name; ?></a> 
						<?php if($term->count > 1) { ?>
							(<?php echo $term->count; ?> agencias)
						<?php } else { ?>
							(1 agencia)
						<?php } ?>
					</div>

				<?php } } ?>
			</div>

		</div>

	</div>
<?php
get_footer();
