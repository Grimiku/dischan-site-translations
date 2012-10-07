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
	'index'				=> 'Index',
	'categories'				=> 'Kategorien',
	'forums'		=> 'Forum',
	'posts'	=> 'Posts',
	'users'			=> 'User',
	'databaseSize'		=> 'Datenbank Größe',
	'forumRules'			=> 'Forum Regeln und Verwendung.',
	'forumDisclaimer'				=> 'Die Verantwortung für die Posts und Inhalte liegt bei den Postern.',
));

?>
