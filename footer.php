<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bonprix
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-section text-black pt-5 pb-5">
			<div class="container bg-grey">
				<div class="row">

					<div class="col-md-2 col-sm-12">
						
					  <?php dynamic_sidebar( 'footer-widget-col-one' ); ?>
						
					</div>

					<div class="col-md-2">

					<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>

					</div>

					<div class="col-md-3 col-sm-12 ms-auto">

						<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>

					</div>

				</div>
			</div>
		</div>
		</div>

<div class="container pt-2 pb-2">
	<div class="row d-flex align-items-center">
		<div class="col">
			<p>&copy; <?php bloginfo('name');?> <?php echo date('Y'); ?> / Created by ME<a href="WebCraft" target="_blank"></a></p>
		</div>
		<div class="col h-45 d-inline-block text-end">
			<img src="<?php echo get_template_directory_uri(); ?>/images/visa_plata.png" class="img-fluid" loading="lazy" alt="...">
		</div>
	</div>
</div>

	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>