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
	'posts'				=> 'Message(s)',
	'rank'				=> 'Rang',
	'dateJoined'		=> 'Compte créé le',
	'beforeTracking'	=> 'Before we started keeping track.',
	'profile'			=> 'Profil',
	'viewProfile'		=> 'Voir le profil',
	'realName'			=> 'Prénom',
	'about'				=> 'À propos',
	'avatar'			=> 'Avatar',
	'location'			=> 'Pays/Région',
	'website'			=> 'Site web',
	'account'			=> 'Compte',
	'currentEmail'		=> 'E-mail actuel',
	'newEmail'			=> 'Nouvel e-mail',
	'newPassword'		=> 'Nouveau mot de passe',
	'oldPassword'		=> 'Ancien mot de passe',
	'requiredIf'		=> 'Seulement demandé lors d\'un changement d\'e-mail ou de mot de passe',
	'options'			=> 'Options',
	'autoSubscribe'		=> 'Abonnement automatique aux discussions que je commente',
	'emailPM'			=> 'M\'envoyer un e-mail lorsque je reçois un message privé',
	'subscribeToNews'	=> 'M\'abonner à la Newsletter Dischan',
	'language'			=> 'Langue',
	'whatsThis'			=> 'Qu\'est-ce que c\'est ?',
));

?>