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
	'lastOnline'				=> 'Ultima connessione',
	'dateJoined'		=> 'Data di iscrizione',
	'beforeTracking'	=> 'Prima che cominciassimo a tenere il conto.',
	'never'			=> 'Mai.',
	'userNotFound'		=> 'Utente non trovato.',
	'realName'			=> 'Nome Reale',
	'about'				=> 'Informazioni personali',
	'message'			=> 'Messaggio',
	'location'			=> 'Posizione geografica',
	'website'			=> 'Sito Web',
	'profile'			=> 'Profilo',
	'tagNote'		=> 'Nota: Tutti i tag sono in funzione',
));

?>