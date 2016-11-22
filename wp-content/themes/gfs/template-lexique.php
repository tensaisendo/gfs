<?php
/*
 * Template Name: Lexique
 */
get_header ();
?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <div class="postarea blog">
            <div class="cadre cadre-article contenu-principal contenu-single">

                <?php
                $lexique = new WP_Query(
                    array(
                        'post_type' => 'lexique',
                        'posts_per_page' => 20,
                        'nopaging' => false,
                        'order' => 'ASC'
                    )
                );

                while ( $lexique->have_posts() ) : $lexique->the_post();
                    the_title(); ?>
                    <div><?php the_content(); ?></div>
                <?php endwhile; ?>

            </div><!-- .cadre -->
        </div><!--end postarea-->
    </div><!-- #content -->
</div><!-- #primary -->