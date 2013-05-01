<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class = "footer-section">
			<h4>The Support Local Initiative</h4>
			<address>High Point, North Carolina</address>
			<a href="mailto:contact@supportlocalinitiative.com">contact@supportlocalinitiative.com</a>
			<p>336-310-9245</p>
		</div>
		<div class = "footer-section">
			<h4>Browse High Point Local Small Businesses</h4>
			<ul>
				<li>High Point Food</li>
				<li>High Point Drinks</li>
				<li>High Point Shopping</li>
			</ul>
		</div>
		<div class = "footer-section">
			<h4>Is Your Favorite Business On Our Site?</h4>
			<p>The Support Local Initiative is working hard on our database of local small businesses and it is still a work of progress. If your business or favorite business is not on our site, please visit our Contact page and send us a message.</p>
		</div>
		<div class="site-info">
			<p>&copy;The Support Local Initiative 2013</p>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>