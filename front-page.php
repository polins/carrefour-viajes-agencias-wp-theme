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

	<div class="site-container">

		<div class="container mx-auto"> 

			<h1 class="font-medium text-2xl mb-2">Busca tu agencia de Viajes Carrefour</h1>
			<h2 class="mb-5">Encuentra tu agencia Viajes Carrefour más cercana</h2>

			<?php get_template_part( 'template-parts/buscador'); ?>

			<div class="flex flex-col-reverse md:block md:columns-2 mb-10">
				<div id="agencia-list" class="overflow-y-scroll">
					<?php

						$temp = $wp_query; 
						$wp_query = null; 
						$wp_query = new WP_Query(); 
						$wp_query->query('showposts=999&post_type=agencia&orderby=rand');
						 while ($wp_query->have_posts()) : $wp_query->the_post(); 

							get_template_part( 'template-parts/cards/agencias' );

						endwhile;
						$wp_query = null; 
				 		$wp_query = $temp;
				 		wp_reset_query();

					 ?>				


				</div>
				<div id="map" style="height:700px" class="mb-5 md:mb-0 rounded border border-gray-light"></div>
			</div>

		</div>

	</div>

	<?php if(get_field('video_iframe')) { ?>

		<div class="bg-gray-light p-10 my-20">
			<div class="container mx-auto flex justify-center">

				<?php the_field('video_iframe'); ?>

			</div>
		</div>

	<?php } ?>

	<div class="site-container">

		<div class="container mx-auto">

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

				<div class="grid md:grid-cols-4 gap-1">
					<?php foreach ($terms as $term) {  if(get_field('tipo', $term) == 'provincia'){ ?>
						
						<div class="text-center md:text-left">
							<div class="font-medium"><?php echo $term->name; ?></div> 

							<?php 
							$child_terms = get_terms( array(
			    				'taxonomy'   => 'localidad',
			    				'hide_empty' => false,
			    				'parent' => $term->term_id,
							) );

							?>
							<?php if(count($child_terms) > 0) { ?>
								<?php foreach ($child_terms as $child_term) { ?>
									<div>
										<a href="<?php echo get_term_link( $child_term->term_id ); ?>" class="hover:underline text-black-alternative"><?php echo $child_term->name; ?></a>
										<?php if($child_term->count > 1) { ?>
											(<?php echo $child_term->count; ?> agencias)
										<?php } else { ?>
											(1 agencia)
										<?php } ?>
									</div>
								<?php } ?>
							<?php } ?>
						</div>

					<?php } } ?>
				</div>

			</div>

		</div>

	</div>
<?php
get_footer();
