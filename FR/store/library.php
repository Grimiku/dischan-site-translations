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
	'libraryLWR'				=> 'bibliothèque',
	'redeemSerials'				=> 'Récupérer les clés produits',
	'libraryEmpty'	=> 'Votre bibliothèque est vide !',
	'libraryEmptyPara'		=> '<p>Essayez de faire une recherche dans le <a href = "index.php">store</a>. Vous trouverez peut-être quelque chose qui vous intéresse.
							<br />
							<br />
							Ou, si vous avez une clé produit digitale, vous pouvez récupérer votre achat <a href = "redeem.php">ici</a>.
							</p>',
	'recipient'		=> 'Destinataire',
	'nothingYet'		=> 'Rien pour le moment !',
	'byGenre'				=> 'Par Genre',
	'byType'		=> 'Par Type',
	'info'		=> 'Info',
	'redeemSerials'		=> 'Récupérer les clés produits',
	'support'		=> 'Support',
	'helpFAQ'		=> 'Aide/FAQ',
	'tAndCond'		=> 'Termes et Conditions',
	'priPolicy'		=> 'Politique de respect de la vie privée',
	'contact'		=> 'Contact',
));

?>