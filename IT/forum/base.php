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
	'index'				=> 'indice',
	'categories'				=> 'Categorie',
	'forums'		=> 'Forum',
	'posts'	=> 'Post',
	'users'			=> 'Utenti',
	'databaseSize'		=> 'Dimensioni del database',
	'forumRules'			=> 'Regole e giuda all\'uso del forum
	.',
	'forumDisclaimer'				=> 'Tutti i post e i contenuti in essi presenti sono sotto la responsabilità di chi li pubblica.',
));

?>