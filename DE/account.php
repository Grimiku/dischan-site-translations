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
	'rank'				=> 'Rang',
	'dateJoined'		=> 'Beitrittsdatum',
	'beforeTracking'	=> 'Bevor wir begonnen haben, Daten aufzuzeichnen.',
	'profile'			=> 'Profil',
	'viewProfile'		=> 'Profil ansehen',
	'realName'			=> 'Echter Name',
	'about'				=> 'Über',
	'avatar'			=> 'Avatar',
	'location'			=> 'Ort',
	'website'			=> 'Website',
	'account'			=> 'Account',
	'currentEmail'		=> 'Aktuelle Email',
	'newEmail'			=> 'Neue Email',
	'newPassword'		=> 'Neues Passwort',
	'oldPassword'		=> 'Alte Passwort',
	'requiredIf'		=> 'wird nur zum Ändern von Passwort und Email benötigt',
	'options'			=> 'Optionen',
	'autoSubscribe'		=> 'Threads mit eigenen Posts automatisch subscriben',
	'emailPM'			=> 'Per Email beim Empfang privater Nachrichten verständigen',
	'subscribeToNews'	=> 'Den Dischan Newsletter abonnieren',
	'language'			=> 'Sprache',
	'whatsThis'			=> 'Was ist das?',
));

?>
