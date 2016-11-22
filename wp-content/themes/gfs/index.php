<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header (); 
?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="postarea accueil">
            <div class="cadre cadre-article contenu-principal widget">
                <?php get_sidebar('newsletter'); ?>
            </div>

            <div class="cadre cadre-article contenu-principal gfs-articles-recents">
                <div class="canvas fadein">
                    <h4 class="recent-articles-title">Derniers Articles</h4>
                    <ul id="articles-recents">
                        <?php
                        query_posts('showposts=3&order=post_title&orderby=asc');

                        while (have_posts()) : the_post(); ?>
                            <li class="produit-<?php the_title ?>">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                    <?php
                                    /*
                                     * affiche l'image à la une de chaque post
                                     * @param integer $size
                                     *          Image size
                                     * @param array $attr
                                     *          Array of attribute/value pairs representing attributes of the image
                                     */
                                    the_post_thumbnail( array(150, 150),
                                                        array(
                                                            'class' => 'capty fadein',
                                                            'alt' => "Image de l'article <?php the_title(); ?>"
                                                        )
                                    );
                                    ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div><!-- canvas -->
            </div><!-- cadre -->

            <div class="cadre cadre-article contenu-principal texte_accueil">
                <h2>Sois acteur de ta vie</h2>

                <div class="texte_accueil_intro">
                    <p>
                        Hey ! Bienvenue sur <a href="<?php esc_url( home_url('/') ) ?>"><span class="bold">GoFor Séduction</span></a> !
                        <br />
                        <strong>Notre crédo : <span>Bien communiquer pour mieux séduire.</span></strong>
                        <br />
                        Parce qu'avant tout, la maîtrise de sa propre communication (verbale et gestuelle) est un atout majeur face aux femmes.
                    </p>
                    <p class="texte_accueil_intro_obj">
                        Tu es au bon endroit, si et seulement si :
                        <ul style="list-style-type: asterisks; margin-top: 0; font-weight: bold;">
                            <li>Tu es interessé par la séduction</li>
                            <li>Tu veux apprendre à plaire aux demoiselles que tu convoites</li>
                            <li>Tu désires tout simplement perfectionner tes connaissances concernant les relations homme-femme</li>
                        </ul>
                        <a href="<?php esc_url( home_url('/') ) ?>"><span class="bold">GoFor Séduction</span></a>, c'est avant tout la volonté de partager connaissances et expériences du Game et rassembler tous ceux qui sont intéressés par la séduction.
                        Tu auras également la possiblité de suivre une formation personnalisée à tes besoins si tu en ressens l'envie et ce, quelque soit tes objectifs.
                        <br />
                        Savais-tu, par exemple, que <span class="bold">seulement 1% des hommes maîtrisent réellement les arcanes de la séduction et savent vraiment ce qu'ils font en présence d'une femme</span> ?
                        Si ton but est de faire partie de ces 1%, il est temps pour toi de t'instruire !
                    </p>
                    <div class="tiret"></div>
                    <p>
                        Maintenant que tu connais l'objectif de <a href="<?php esc_url( home_url('/') ) ?>"><span class="bold">GoFor Séduction</span></a>, laisse-moi entrer un peu plus dans les détails.
                        <br />
                        Sache que tout ce que tu liras ici est la résultante d'années d'expérience du Game dans des lieux divers et variés, en France et à l'étranger.
                        <br />
                        La théorie, on la connait par coeur, la pratique encore plus.
                        Personne ne viendra te juger, nous ne somme pas là pour ça. Par contre, si tu es motivé et désireux d'apprendre le Game, nous t'aiderons avec grand plaisir.
                    </p>
                    <p>
                        <span class="bold">Désormais, tu as les clés pour devenir l'homme que tu désires être</span>.
                        <br />
                        Si tu as des questions ou un avis à transmettre, n'hésite pas à m'envoyer un message via le formulaire de contact.
                        Sur ce, bonne lecture et bon "Game" !
                    </p>
                </div>
            </div><!-- .cadre -->

			<?php //include('sidebar-right.php'); ?> <!-- sidebar de droite -->
			<p id="spacer"></p>

		</div><!-- .postarea -->
	</div><!-- #content -->
</div>
<!-- #primary -->
<?php get_footer(); ?>