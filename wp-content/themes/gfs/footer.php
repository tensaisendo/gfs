<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 */
?>

</div><!-- #main -->
<footer id="colophon" class="site-footer row" role="contentinfo">

    <ul class="left">
        <li><a href="<?php echo esc_url( home_url( '/a-propos' ) ); ?>">A propos</a></li>
        <li><a href="<?php echo esc_url( home_url( '/conditions-generales-de-vente' ) ); ?>">Conditions Générales de Vente</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>">Plan de site</a></li>
    </ul>

    <span class="right">
        <?php printf( '&middot; &copy; %1$s <a href="%2$s" title="%3$s" rel="bookmark">%3$s</a> &middot; Mieux communiquer pour bien séduire &middot;',
            esc_attr( date( 'Y' ) ), 	//&1$s
            esc_url( home_url() ), 	 	//&2$s
            esc_attr(get_bloginfo()) 	//&3$s
        );
        ?>
    </span>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>