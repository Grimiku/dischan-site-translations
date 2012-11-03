<?php

if (empty($siteStrings) || !is_array($siteStrings))
{
	$siteStrings = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Note: all uses of ' in translations should be precended with \, in example: \'
//

$siteStrings = array_merge($siteStrings, array(
	'frequentlyAskedQ'	=> 'Questions Fréquemment Posées',
	'freqPara'				=> '<p>
								<a href = "#release">Quand sortira Cradle Song ?</a><br />
								<a href = "#commercial">Cradle Song sera-t-il un jeu payant ?</a><br />
								<a href = "#mature">Cradle Song contiendra-t-il du contenu mature ?</a><br />
								<a href = "#join">Pourrais-je rejoindre l\'équipe Dischan ?</a><br />
								<a href = "#translate">Pourrais-je traduire le site web ou un produit Dischan ?</a><br />
								<a href = "#problems">Je rencontre un problème avec le site web ou un produit Dischan, que dois-je faire ?</a><br />
								<a href = "#language">À quoi sert le paramétrage de la langue sur mon compte ?</a><br />
								<a href = "#languageMissing">Ma langue préférée n\'est pas disponible dans le choix de la langue, pourquoi ?</a><br />
								<a href = "#languageErrors">J\'ai trouvé une faute de traduction/grammaire sur le site ou dans un produit Dischan, que dois-je faire ?</a>
							</p>
							<br />
							<br />
							<p id = "release"><b>Quand sortira Cradle Song ?</b></p>
							<p>La sortie de Cradle Song n\'a aucune date fixe pour le moment. Nous visons une sortie de la démo courant 2012, et espérons la sortie du jeu complet l\'année suivante.</p>
							<br />
							<p id = "commercial"><b>Cradle Song sera-t-il un jeu payant ?</b></p>
							<p>Oui. Toutefois, nous préférons que les gens y jouent, plutôt que de faire beaucoup de profit. Le jeu sera proposé à un prix raisonnable. Assurément en dessous de 10$ USD.</p>
							<br />
							<p id = "mature"><b>Cradle Song contiendra-t-il du contenu mature ?</b></p>
							<p>Oui, Cradle Song contiendra de la violence, du sang, des jurons, et du contenu sexuel dans certaines routes. Il faudra avoir 17 ans ou plus pour y jouer.</p>
							<br />
							<p id = "join"><b>Pourrais-je rejoindre l\'équipe Dischan ?</b></p>
							<p>Vous pouvez postuler en utilisant le formulaire de demande disponible <a href = "apply.php">ici</a>.</p>
							<br />
							<pid = "translate"><b>Pourrais-je traduire le site web ou un produit Dischan ?</b></p>
							<p>Oui. Toutefois, travailler avec des traducteurs pour proposer une bonne traduction peut être difficile et prendre beaucoup de temps. Un "Test de Traduction" est mis à votre disposition ; avant de nous contacter, veuillez d\'abord le remplir.
							Le test est disponible <a href = "internationalization.php">ici</a>.</p>
							<br />
							<p id = "problems"><b>Je rencontre un problème avec le site web ou un produit Dischan, que dois-je faire ?</b></p>
							<p>Veuillez visiter notre page <a href = "support.php">support</a>.</p>
							<br />
							<p id = "language"><b>À quoi sert le paramétrage de la langue sur mon compte ?</b></p>
							<p>Nous utilisons le paramétrage de la langue sur votre compte pour les raisons suivantes :</p>
							<ol>
								<li>Permettre au Store de classer les téléchargements de jeux ou d\'autres produits dans votre langue d\'abord, si celle-ci est disponible (dans le cas contraire, la langue anglaise est la première listée ; les autres langues suivent dans l\'ordre alphabétique).</li>
								<li>Afficher le contenu du site dans votre langue, si celle-ci est disponible.</li>
								<li>Permettre l\'envoi de Newsletters et d\'e-mails de notifications dans votre langue, si celle-ci est disponible.</li>
							</ol>
							<p id = "languageMissing"><b>Ma langue préférée n\'est pas disponible dans le choix de la langue, pourquoi ?</b></p>
							<p>Tout simplement car nous n\'avons pas encore de traductions dans cette langue, le réglage n\'a donc aucun effet. Si vous parlez couramment votre langue préférée et Anglais, et si vous souhaitez nous aider à traduire le site ou un produit Dischan dans votre langue,
							veuillez visiter notre page <a href = "internationalization.php">Internationalisation et Traductions</a>.</p>
							<br />
							<p id = "languageErrors"><b>J\'ai trouvé une faute de traduction/grammaire sur le site ou dans un produit Dischan, que dois-je faire ?</b></p>
							<p>Veuillez nous <a href = "contact.php">signaler cette erreur</a>. Nous essaierons de corriger cela.</p>',
));

?>