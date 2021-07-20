<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bonprix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bonprix' ); ?></a>

<div class="announcement-bar">
	<div class="container">
		<div class="row">
			<div class="announcement-bar__list d-flex justify-content-end">
				<p>
					<a href=''>Club bonprix</a>
				</p>
				<p>
					<a href=''>100 zile de returnare</a>
				</p>
				<p>
					<a href=''>Livrarea 500 zile lucr.</a>
				</p>
			</div>
		</div>
	</div>
</div>





	<header id="masthead" class="site-header">
		<div class="container pt-2 pb-2">
			<div class="row">
				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start ">
				<?php the_custom_logo(); ?>
				</div>
				<div class="col-md-6 d-flex justify-content-end">
					<div class="container pb-2 pt-2">
						<div class="row align-items-center">
							<div class="col-sm-12 col-md-6 announcement-bar-line">
								<?php aws_get_search_form( true ); ?>
							</div>
							<div class="col-sm-12 col-md-6 cart d-flex justify-content-end align-items-center">
								
								<i class="bi bi-person"></i>
								<i class="bi bi-suit-heart"></i>
								<a href="<?php echo wc_get_cart_url(); ?>"> <i class="bi bi-bag p-2"></i></a>
								<a class="cart-customlocation px-2" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		

		<nav id="site-navigation" class="main-navigation">
			<div class="container d-flex justify-content-left">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="bi bi-list"></i>
							<?php esc_html_e( 'Primary Menu', 'bonprix' ); ?>
						</button>
					</div>
					<div class="col-12 text-center">
						<?php
							wp_nav_menu(
							array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							)
						);
						?>
					</div>
				</div>
			
			</div>
			<nav class="main-navigation bg-section d-flex justify-content-center section-text-color">
				<p style="padding-top: 17px; font-size: 12px;">Livrarea gratuită pentru comenzi de min. 99 lei.</p></nav>
		</nav><!-- #site-navigation -->

		




	</header><!-- #masthead -->
