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
	'search'				=> 'Recherche',
	'keywords'				=> 'mots-clés...',
	'remove'	=> 'retirer',
	'sidebarGift'			=> 'CADEAU',
	'recipient'		=> 'destinataire',
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