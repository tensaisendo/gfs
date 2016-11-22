<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("Il y a un problème avec ton adresse e-mail");
        return false;
    }
    if (f.elements["nn"] && (f.elements["nn"].value == "" || f.elements["nn"].value == f.elements["nn"].defaultValue)) {
        alert("Il y a un problème avec ton pseudo");
        return false;
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("Tu dois accepter les Conditions Générales d'Utilisations de GoFor Séduction");
        return false;
    }
    return true;
}
}
//]]>
</script>

<div class="newsletter newsletter-subscription">
	<h4 class="widget-title">Newsletter
		<span class="icone-info right">
			<a rel="nofollow" href="">i</a>
		</span>
		<br class="clear" />
	</h4>
			
	<div class="widget-block">
		<form method="post" action="http://localhost/Gfs/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
			<div class="newsletter-gauche">
				<h4 class="newsletter-description">Articles, Techniques, Expériences : GoFor SEDUCTION t'envoie le meilleur pour séduire les femmes comme jamais.</h4>
                <div class="newsletter-bouton">
                    <input class="newsletter-submit" type="submit" value="Inscris-toi →"/>
                    <p>GoFor SEDUCTION  est garanti sans spam.</p>
                </div>
            </div>
			
			<div class="newsletter-centre">
				<div style="margin-top: 5px;"><input class="newsletter-firstname" type="text" name="nn" size="30" value="Pseudo" required></div>
				<div><input class="newsletter-email" type="email" name="ne" size="30" value="adresse@email.com" required></div>
				<div class="newsletter-checkbox">
					<input type="checkbox" name="ny" required>
					<span>En m'inscrivant, j'accepte les <a href="<?php echo esc_url( home_url( '/conditions-generales-de-vente' ) ); ?>">Conditions Générales de Vente</a> de GoFor SEDUCTION</span>
				</div>
			</div>

		</form>
	</div><!-- widget-block -->
		
</div><!-- newsletter -->