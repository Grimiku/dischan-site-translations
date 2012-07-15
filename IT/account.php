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
	'posts'				=> 'Post',
	'rank'				=> 'Posizione',
	'dateJoined'		=> 'Data di iscrizione',
	'beforeTracking'	=> 'Prima che cominciassimo a tenere il conto.',
	'profile'			=> 'Profilo',
	'viewProfile'		=> 'visualizza profilo',
	'realName'			=> 'Nome Reale',
	'about'				=> 'Informazioni personali',
	'avatar'			=> 'Avatar',
	'location'			=> 'Posizione geografica',
	'website'			=> 'Sito Web',
	'account'			=> 'Account',
	'currentEmail'		=> 'Email Attuale',
	'newEmail'			=> 'Nuova Email',
	'newPassword'		=> 'Nuova Password',
	'oldPassword'		=> 'Vecchia Password',
	'requiredIf'		=> 'richiesto solo per il cambio di password o di email',
	'options'			=> 'Opzioni',
	'autoSubscribe'		=> 'Iscrivimi automaticamente alle discussioni a cui rispondo',
	'emailPM'			=> 'Mandami una mail quando ricevo un messaggio privato',
	'subscribeToNews'	=> 'Iscrivimi alla newsletter di Dischan',
	'language'			=> 'Lingua',
	'whatsThis'			=> 'cos\'è questo?',
));

?>