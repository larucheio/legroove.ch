<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

</div><!-- #page we need this extra closing tag here -->

<div class="wrapper mt-5" id="wrapper-footer">
	<div class="container text-primary groove-font-family-headings">
		<div class="row">
			<div class="col-md-2">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
					<?php echo file_get_contents(get_template_directory_uri() . "/images/legroove-logo.svg"); ?>
				</a>
			</div>
			<div class="col-md-3">
				<h3 class="mb-0">Contact</h3>
				<p class="groove-font-family-headings">
					9 rue des Gazometres,
					<br>
					1205 Geneve
					<br>
					<a href="mailto:contact@legroove.ch" class="text-primary text-decoration-none">contact@legroove.ch</a>
				</p>
			</div>
			<div class="col-md-3">
				<h3 class="mb-0">Programmation</h3>
				<p>
					Pour toute demande de programmation merci de contacter:
					<br>
					<a href="mailto:prog@legroove.ch" class="text-primary text-decoration-none">prog@legroove.ch</a>
				</p>
			</div>
			<div class="col-md-3 offset-md-1">
				<h3 class="mb-0">Partenaires</h3>
			</div>
		</div>

		<div class="mt-5 text-primary text-center">
			<h3>Suivez-nous sur les reseaux</h3>

			<a href="https://www.instagram.com/legroove_gva/" class="text-decoration-none">
				<?php echo file_get_contents(get_template_directory_uri() . "/images/social/instagram.svg"); ?>
			</a>

			<a href="https://www.facebook.com/legroovegva" class="ms-3 text-decoration-none">
				<?php echo file_get_contents(get_template_directory_uri() . "/images/social/facebook.svg"); ?>
			</a>
		</div>
	</div>
</div><!-- wrapper end -->

<?php wp_footer(); ?>

</body>

</html>
