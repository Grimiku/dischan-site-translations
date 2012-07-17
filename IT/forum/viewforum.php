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
	'recentlyBumped'				=> 'bump più recenti',
	'forumDNE'				=> 'Il Forum Non Esiste',
	'noThreadsYet'		=> 'Ancora Nessuna Discussione',
	'noPostsYet'	=> 'Ancora Nessun Post',
	'newThread'			=> 'Nuova Discussione',
	'stickyLock'		=> 'Sticky <br />e Bloccate',
	'locked'			=> 'Bloccate',
	'sticky'				=> 'Sticky',
	'replies'				=> 'risposte',
	'images'				=> 'immagini',
	'jumpToLatest'				=> 'Vai a più recenti',
	'author'				=> 'Autore',
	'reply'				=> 'Rispondi',
	'newThreadContent'				=> 'Nuova Discussione...',
	'quote'				=> 'Citazione',
	'threadDNE'				=> 'La Discussione Non Esiste',
	'forumLocked'				=> 'Spiacenti, questo forum è bloccato.',
	'picture'				=> 'Immagine',
	'message'				=> 'Messaggio',
	'newThreadNote'				=> 'Nota: Nuovi discussioni necessitano di un\'immagine.',
	'threadLocked'				=> 'Spiacenti, questa discussione è bloccata.',
	'postLimitReached'				=> 'Limite di post raggiunto.',
	'imageLimitReached'				=> 'Limite di immagini raggiunto.',
	'subscribe'				=> 'Iscriviti',
	'unsubscribe'				=> 'Cancella l\'iscrizione',
));

?>