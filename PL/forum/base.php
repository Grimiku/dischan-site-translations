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
	'index'				=> 'indeks',
	'categories'				=> 'Kategorie',
	'forums'		=> 'Fora',
	'posts'	=> 'Posty',
	'users'			=> 'Użytkownicy',
	'databaseSize'		=> 'Rozmiar bazy danych',
	'forumRules'			=> 'Zasady forum',
	'forumDisclaimer'				=> 'ZA wszystkie posty i ich zawartość na forum odpowiedzialny jest postujący.',
));

?>
