<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package carrefour-viajes-agencias
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" type="image/x-icon" href="/wp-content/themes/carrefour-viajes-agencias/dist/img/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'carrefour-viajes-agencias' ); ?></a>

<header
  class="flex static flex-wrap justify-between items-center py-2 px-4 m-0 text-sm leading-3 align-baseline xl:px-12 xl:pt-8 lg:relative lg:w-full lg:px-5 lg:pt-8 border-b border-gray-light text-stone-500 mb-5 pb-5"
>
  <div class="logo-container p-0 m-0 align-baseline border-0 lg:-order-1">
    <div class="p-0 m-0 align-baseline border-0 lg:inline-block">
      <a
        href="https://www.viajes.carrefour.es/"
        class="p-0 m-0 align-baseline bg-transparent border-0 cursor-pointer text-sky-500"
        ><img
          class="p-0 m-0 w-full align-baseline border-0 logo"
          src="https://www.viajes.carrefour.es/statics/assets/images/base/crf_viajes_logo_h_colour_rgb-01.png"
          alt="Logo desktop"
      /></a>
    </div>
  </div>

  <div
    class="right-header"
  >
    <div class="preheader">
    <ul class="header-elements">
    <li><a href="tel:919100057"><em class="icon-phone"> </em>919 100 057</a></li>
    <li><a href="https://www.viajes.carrefour.es/agencias-viajes/"><em class="icon-ubication"> </em>Agencias</a></li>
    </ul>
    </div>
    <nav class="main-menu p-0 m-0 align-baseline border-0" role="navigation">
      <?php wp_nav_menu( array(
        'menu'            => 'Menu principal',
        'container_class' => 'menu-{menu-slug}-container',
        'menu_class'      => 'header-elements',
      ) ); ?>
    </nav>
    
  </div>
</header>

