<?php
/* Template name: Homepage Lilibuy */

get_header();

	get_template_part('includes/commons/_slider');

?>

	<div id="primary" class="container destacados padding-contendor-elemetos">
		<section id="main" class="site-main" role="main">

			<header class="site-main__header section__headline">
				<h2>¡Medias, medias, medias!</h2>
			</header>

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
				echo do_shortcode( '[recent_products per_page="8" columns="4" category="destacado"]' );
			?>

		</section><!-- #main -->
</div>	<!-- #primary -->
<?php
get_template_part('includes/commons/hacemos');
get_template_part('includes/commons/logos');
get_template_part('includes/loops/news', 'related');
get_footer();
