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
	'index'				=> 'index',
	'categories'				=> 'Catégories',
	'forums'		=> 'Forums',
	'posts'	=> 'Messages',
	'users'			=> 'Utilisateurs',
	'databaseSize'		=> 'Taille de la base de données',
	'forumRules'			=> 'Règles et utilisation du forum.',
	'forumDisclaimer'				=> 'Les messages et leurs contenus sont de la responsabilité des utilisateurs.',
));

?>