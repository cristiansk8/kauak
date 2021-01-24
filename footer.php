<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer footer" role="contentinfo">
		<div class="social">
			<div>
				<div class="social-item">
					<a href="https://www.instagram.com/metroomatcol/" target="_blank" class="instagram" aria-hidden="true"></a>
				</div>
				<div class="social-item">
					<a href="https://www.facebook.com/metroomatcol/" target="_blank" class="facebook" aria-hidden="true"></a>
				</div>
				<div class="social-item">
					<a href="https://www.linkedin.com/organization-guest/company/metroomat-ndt-s-a-s?challengeId=AQGwlt6hduHkOQAAAXQDFetTGcZ33YaEyaHF_SLUL4vJXh2HN3zoHAWi2qt75mAU4y2Pz54mfeIeN0CC-1JdHJ1Qh0q8Jqzx7A&submissionId=99e9b224-1574-2c16-5613-4919c16b3f61" target="_blank" class="linkedin" aria-hidden="true"></a>
				</div>
			</div>
		</div>
		<div class="footer-row container">
			<?php dynamic_sidebar('footer-widget-area'); ?>
		</div>
		<div class="footer-copyright">
			<div class="footer-row container">
				<div class="footer-copyright__text">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
