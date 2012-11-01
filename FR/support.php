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
	'support'				=> 'Support',
	'supportPara'			=> '<p>Un problème avec le service ou un produit Dischan ? Vous trouverez peut-être une solution dans la <a href = "http://www.dischan.org/forum/viewforum.php?c=3&f=8">Partie Support de notre forum</a>. Si votre
								problème n\'y est pas référencé, n\'hésitez pas à ouvrir une nouvelle discussion pour en parler. Captures d\'écran recommandées.</p>
								<br />
								<p>Pour des questions plus délicates, tels que les problèmes de sécurité, les problèmes avec votre compte, ou vos achats sur le Store, utilisez la section <a href = "contact.php">nous contacter</a>.</p>',
));

?>