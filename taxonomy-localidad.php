<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package carrefour-viajes-agencias
 */

get_header();

$qobj = get_queried_object();

?>

	<div class="container mx-auto">

		<div class="mb-10">
			<h1 class="font-medium text-xl mb-2">Agencias de viajes en <strong><?php echo $qobj->name; ?></strong></h1>
		</div>

		<div class="columns-2 mb-20">
			<div style="max-height: 700px;" class="overflow-y-scroll">

				<?php if ( have_posts() ) :

				while ( have_posts() ) :
				the_post(); 

						get_template_part( 'template-parts/cards/agencias' );

				endwhile; endif; ?>

			</div>

			<div id="map" style="height:700px" class="rounded border border-gray-light"></div>
		</div>

		<?php get_template_part( 'template-parts/content-promociones' ); ?>

		<div class="mt-10 mb-14 max-w-5xl">
			<?php echo term_description(); ?>
		</div>


	</div>

<?php
get_footer();
