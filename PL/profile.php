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
	'posts'				=> 'Posty',
	'lastOnline'				=> 'Ostatnio Online',
	'dateJoined'		=> 'Dołączył',
	'beforeTracking'	=> 'Zanim zaczęliśmy śledzenie.',
	'never'			=> 'Nigdy.',
	'userNotFound'		=> 'Nie znaleziono użytkownika.',
	'realName'			=> 'Prawdziwe Imię',
	'about'				=> 'O mnie',
	'message'			=> 'Wiadomość',
	'location'			=> 'Skąd',
	'website'			=> 'Strona',
	'profile'			=> 'Profil',
	'tagNote'		=> 'Uwaga: wszystkie tagi są nadal funkcjonalne',
));

?>