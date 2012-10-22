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
	'posts'				=> 'Messages',
	'lastOnline'				=> 'Dernière connexion',
	'dateJoined'		=> 'Compte crée le',
	'beforeTracking'	=> 'Before we started keeping track.',
	'never'			=> 'Jamais.',
	'userNotFound'		=> 'Utilisateur non trouvé.',
	'realName'			=> 'Prénom',
	'about'				=> 'À propos',
	'message'			=> 'Message',
	'location'			=> 'Pays/Région',
	'website'			=> 'Site web',
	'profile'			=> 'Profil',
	'tagNote'		=> 'Note : Les "tags" peuvent être utilisés',
));

?>