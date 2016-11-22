<?php
/*
 * Template Name: Blog
 */
get_header ();
define ( 'DB_CHARSET', 'utf8' );

?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="postarea blog">

			<div class="cadre cadre-article contenu-principal contenu-blog">
				<?php if (have_posts()) : ?>
					<?php
                    query_posts('post_type=post' . '&paged=' . get_query_var('paged'));
                    while (have_posts()) : the_post(); ?>
                        <div class="excerpt">
                            <h1 class="singletitle">
                                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                            </h1>

                            <div class="byline">
                                <ul class="bylineBar">
                                    <li class="byline-date"><span><?php the_time('j F Y'); ?></span></li>
                                </ul>
                            </div>

                            <div class="excerpt_img_txt">
                                <?php the_post_thumbnail('thumbnail'); ?>
                                <br />
                                <?php the_excerpt();?>
                                <a href="<?php the_permalink() ?>" class="suite">Lire la suite ...</a>
                            </div>
                        </div><!-- excerpt -->
                    <?php endwhile; ?>
    		    <?php endif; ?>
                <?php wp_paginate(); ?>
			</div><!-- cadre cadre-article contenu-principal -->
			
			<?php //include('sidebar-right.php'); ?> <!-- sidebar de droite -->
			<p id="spacer"></p>

		</div><!--end postarea-->
	</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>