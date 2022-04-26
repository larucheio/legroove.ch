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
	<div class="container groove-font-family-headings">
		<div class="row g-3">
			<div class="col-lg-2">
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
					<?php echo file_get_contents(get_template_directory_uri() . "/images/legroove-logo.svg"); ?>
				</a>
			</div>
			<div class="col-lg-3">
				<h3 class="mb-0">Contact</h3>
				<p>
					9 rue des Gazometres,
					<br>
					1205 Geneve
					<br>
					<a href="mailto:contact@legroove.ch" class="text-decoration-none">contact@legroove.ch</a>
				</p>
			</div>
			<div class="col-lg-3">
				<h3 class="mb-0">Programmation</h3>
				<p>
					Pour toute demande de programmation merci de contacter:
					<br>
					<a href="mailto:prog@legroove.ch" class="text-decoration-none">prog@legroove.ch</a>
				</p>
			</div>
			<div class="col-lg">
				<h3 class="mb-0">Suivez-nous sur les reseaux</h3>

				<a href="https://www.instagram.com/legroove_gva/" class="text-decoration-none">
					<?php echo file_get_contents(get_template_directory_uri() . "/images/social/instagram.svg"); ?>
				</a>

				<a href="https://www.facebook.com/legroovegva" class="ms-3 text-decoration-none">
					<?php echo file_get_contents(get_template_directory_uri() . "/images/social/facebook.svg"); ?>
				</a>
			</div>
		</div>

		<div class="mt-5 groove-font-family-headings">
			<div class="row g-3">
				<div class="col-lg-3">
					<h3 class="mb-0">Partenaires</h3>
					<p>
						Collectif Nocturne
						<br>
						Corner 25
					</p>
				</div>
				<div class="col-lg-2">
					<h3 class="mb-0">Media</h3>
					<p>Daily Rock</p>
				</div>
				<div class="col-lg-2">
					<h3 class="mb-0">Media heberges</h3>
					<p>
						Epic magazine
						<br>
						Kalvin Station
					</p>
				</div>
				<div class="col-lg-2">
					<h3 class="mb-0">Institutionnel</h3>
					<p>
						La ville de Geneve
					</p>
				</div>
				<div class="col-lg-3">
					<h3 class="mb-0">Financier</h3>
					<p>
						Fondation Aletheia
						<br>
						Fplce (Fondation pour la promotion de lieux pour la culture emergente)
						<br>
						Loterie Romande
						<br>
						Ernst Gohner Stiftung
					</p>
				</div>
			</div>
		</div>
	</div>
</div><!-- wrapper end -->

<?php wp_footer(); ?>

</body>

</html>
