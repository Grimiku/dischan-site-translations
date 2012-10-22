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
	'forumRules'		=> 'Règles du Forum',
	'forumRulesPara'	=> '<p>Envoyer un message avec un des contenus ci-dessous pourra entrainer un bannissement temporaire ou permanent des forums :</p> 
							<ul>
								<li>Contenu illégal déterminé par les lois Canadiennes et/ou Américaines</li>
								<li>Pornographie</li>
								<li>Contenu à caractère profane</li>
								<li>Publicité et/ou Spam</li>
							</ul>
							<p>Des modérateurs peuvent également bannir des utilisateurs de leur propre discrétion ; si vous pensez avoir été banni injustement ou par erreur, veuillez <a href = "contact.php">nous contacter</a>.</p>',
	'forumUse'		=> 'Utilisation du Forum',
	'forumUsePara'	=> '<p>Des "tags" vous permettent de modifier le texte de vos messages sur le forum. Ainsi comprend :</p>
							<ul>
								<li>Mode barré - Utilisation : [s]texte barré[/s] - Exemple : <s>texte barré</s></li>
								<li>Gras - Utilisation : [b]texte en gras[/b] - Exemple : <b>texte en gras</b></li>
								<li>Italique - Utilisation : [i]texte en italique[/i] - Exemple : <i>texte en italique</i></li>
								<li>Masqué - Utilisation : [spoiler]spoiler[/spoiler] - Exemple : <p class = "spoiler">spoiler</p></li>
							</ul>
							<p>Autres notes :</p>
							<ul>
								<li>Les liens renvoient automatiquement sur Internet</li>
								<li>Passer la souris sur une image affichera le nom du fichier</li>
							</ul>',
));

?>