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
$parent_1 = wp_get_term_taxonomy_parent_id($qobj->term_id,'localidad');
$parent_2 = wp_get_term_taxonomy_parent_id($parent_1,'localidad');

?>

	<div class="bg-gray-light site-container py-1 -mt-5 mb-5 ">
		<div class="container mx-auto text-xs">
			<span><a href="<?php echo bloginfo('url'); ?>">Inicio</a></span> /
			<?php if($parent_2) { ?>
				<span><a href="/<?php echo get_term( $parent_2 )->slug; ?>"><?php echo get_term( $parent_2 )->name; ?></a></span> /
			<?php } ?>
			<?php if($parent_1) { ?>
				<span><a href="/<?php echo get_term( $parent_1 )->slug; ?>"><?php echo get_term( $parent_1 )->name; ?></a></span> /
			<?php } ?>
			<span class="breadcrumb_last" aria-current="page"><?php echo $qobj->name; ?></span>
		</div>
	</div>

	<div class="site-container">

		<div class="container mx-auto">

			<div class="mb-10">
				<h1 class="font-medium text-xl mb-2">Agencias de viajes en <strong><?php echo $qobj->name; ?></strong></h1>
			</div>

			<div class="flex flex-col-reverse md:block md:columns-2 mb-20">
				<div id="agencia-list" class="overflow-y-scroll">

					<?php if ( have_posts() ) :

					while ( have_posts() ) :
					the_post(); 

							get_template_part( 'template-parts/cards/agencias' );

					endwhile; endif; ?>

				</div>

				<div id="map" style="height:700px" class="mb-5 md:mb-0 rounded border border-gray-light"></div>
			</div>

			<?php get_template_part( 'template-parts/content-promociones' ); ?>

			<div class="mt-10 mb-14 max-w-5xl">
				<?php echo term_description(); ?>
			</div>

		</div>

	</div>

<?php
get_footer();
