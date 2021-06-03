<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer text-center" id="colophon">

					<div class="social-icons mb-3">
						<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="#" class="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						<a href="#" class="medium"><i class="fa fa-medium" aria-hidden="true"></i></a>
					</div>

					<div class="copyright">
						Copyright &#169; 2014 LUCID ONEPAGE THEME
					</div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

