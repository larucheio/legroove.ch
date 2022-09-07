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
		<div class="text-center mb-5">
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
				<img src="<?php echo get_template_directory_uri() . "/images/legroove-logo.svg"; ?>" alt="Le Groove" style="max-width: 150px; width: 100%;">
			</a>
		</div>
		<div class="row g-3 mb-5">
			<div class="col-12 col-md-3">
				<h3 class="mb-0">Contact</h3>
				<p>
					9 rue des Gazometres,
					<br>
					1205 Geneve
					<br>
					<a href="mailto:contact@legroove.ch" class="text-decoration-none">contact@legroove.ch</a>
				</p>
			</div>
			<div class="col-12 col-md-3">
				<h3 class="mb-0">Programmation</h3>
				<p>
					Pour toute demande de programmation merci de contacter:
					<br>
					<a href="mailto:prog@legroove.ch" class="text-decoration-none">prog@legroove.ch</a>
				</p>
			</div>
			<div class="col-12 col-md-3 offset-md-2">
				<ul class="partenaires d-flex justify-content-center align-items-center">
					<li>
						<a target="blank" href="https://corner25.ch/">
							<img src="<?php echo get_template_directory_uri() . "/images/partenaires/corner25.png"; ?>" alt="Corner 25">
						</a>
					</li>
					<li>
						<a target="blank" href="https://collectif-nocturne.ch/">
							<img src="<?php echo get_template_directory_uri() . "/images/partenaires/collectifnocturne.png"; ?>" alt="Collectif Nocturne">
						</a>
					</li>
            	</ul>
			</div>
		</div>

		<div class="row g-3">
			<div class="col-12 text-center">
				<h3 class="mb-0">Suivez-nous sur les reseaux</h3>

				<a href="https://www.instagram.com/legroove_gva/" class="text-decoration-none">
					<?php echo file_get_contents(get_template_directory_uri() . "/images/social/instagram.svg"); ?>
				</a>

				<a href="https://www.facebook.com/legroovegva" class="ms-3 text-decoration-none">
					<?php echo file_get_contents(get_template_directory_uri() . "/images/social/facebook.svg"); ?>
				</a>
			</div>
		</div>
	</div>
</div><!-- wrapper end -->

<div class="footer__sponsors mt-5">
	<ul>
		<li>
			<img src="<?php echo get_template_directory_uri() . "/images/sponsors/ville-de-geneve.png"; ?>" alt="Ville de Genève">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri() . "/images/sponsors/ernst-gohner-stiftung.svg"; ?>" alt="Ernst Göhner Stiftung" style="height: 18px;">
			<!-- <img style="height:18px;" src="images/logo1.svg"> -->
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri() . "/images/sponsors/fplce.png"; ?>" alt="FPLCE">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri() . "/images/sponsors/fondation-aletheia.png"; ?>" alt="Fondation Aletheia">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri() . "/images/sponsors/loterie-romande.png"; ?>" alt="Loterie Romande">
		</li>
	</ul>
</div>

<?php wp_footer(); ?>

</body>

</html>
