<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Expound
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( '&middot; &copy; %1$s <a href="%2$s" title="%3$s" rel="bookmark">%3$s</a> &middot; Mieux communiquer pour bien séduire &middot;',
				esc_attr( date( 'Y' ) ), 	//&1$s
				esc_url( home_url() ), 	 	//&2$s
				esc_attr(get_bloginfo()) 	//&3$s
			); 
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>