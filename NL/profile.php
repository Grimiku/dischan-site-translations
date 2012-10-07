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
	'posts'				=> 'Berichten',
	'lastOnline'				=> 'Laatst online',
	'dateJoined'		=> 'Registreerdatum',
	'beforeTracking'	=> 'Voordat we dit bijhielden.',
	'never'			=> 'Nooit.',
	'userNotFound'		=> 'Gebruiker niet gevonden.',
	'realName'			=> 'Echte naam',
	'about'				=> 'Over',
	'message'			=> 'Bericht',
	'location'			=> 'Locatie',
	'website'			=> 'Website',
	'profile'			=> 'Profiel',
	'tagNote'		=> 'Opmerking: alle opmaaktags werken gewoon',
));

?>