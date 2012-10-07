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
	'posts'				=> 'Posts',
	'lastOnline'				=> 'Zuletzt Online',
	'dateJoined'		=> 'Beitrittsdatum',
	'beforeTracking'	=> 'Bevor wir begonnen haben, Daten aufzuzeichnen.',
	'never'			=> 'Nie.',
	'userNotFound'		=> 'Benutzer nicht gefunden.',
	'realName'			=> 'Echer Name',
	'about'				=> 'Über',
	'message'			=> 'Nachricht',
	'location'			=> 'Ort',
	'website'			=> 'Website',
	'profile'			=> 'Profil',
	'tagNote'		=> 'Hinweis: Alle Tags sind immer noch funktional',
));

?>
