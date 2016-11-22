<?php
/*
 * Template Name: 404
 */
get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <div class="postarea single">
            <div class="cadre cadre-article contenu-principal contenu-single">

                <div class="ariane">
                    <h5>
                        <?php if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                        } ?>
                    </h5>
                </div>

                <div id="content" class="archive">
                    <h2 align="center" class="title">Oups, il y a un petit problème</h2>
                </div>

            </div><!-- .cadre -->
        </div><!--end postarea-->
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>