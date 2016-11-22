<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Gfs
 * @since Gfs 1.0
 */
get_header ();
?>

<div id="primary" class="content-area">
	<div id="content" class="site-content single" role="main">
		<div class="postarea single">
			
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="cadre cadre-article contenu-principal contenu-single">
                    <?php gfs_post_nav(); ?>

                    <h1 class="singletitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

                    <div class="ariane"><h5>
                            <?php if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                            } ?>
                        </h5>
                    </div>

                    <div class="byline">
                        <ul class="bylineBar">
                            <li class="byline-date"><span><?php the_time('j F Y'); ?></span></li>
                            <?php
                            $post_comments = wp_count_comments();
                            if ($post_comments->total_comments != 0){?>
                                <li class="byline-coms"><span><?php comments_number('0 commentaire','1 commentaire','% commentaires'); ?></span></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <?php the_content(); ?>

                    <div class="comments"><?php comments_template(); ?></div>

                </div><!-- .cadre -->
			<?php endwhile; ?>

			<?php //include('sidebar-right.php'); ?> <!-- sidebar de droite -->
			<p id="spacer"></p>

		</div><!--end postarea-->
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>