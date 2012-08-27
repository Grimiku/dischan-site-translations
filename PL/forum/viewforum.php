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
	'recentlyBumped'				=> 'ostatnio aktywne',
	'forumDNE'				=> 'Forum nie istnieje',
	'noThreadsYet'		=> 'Brak wątków',
	'noPostsYet'	=> 'Brak postów',
	'newThread'			=> 'Nowy wątek',
	'stickyLock'		=> 'Przyklejony <br />& Zamknięty ',
	'locked'			=> 'Zamknięty',
	'sticky'				=> 'Przyklejony',
	'replies'				=> 'odpowiedzi',
	'images'				=> 'obrazki',
	'jumpToLatest'				=> 'Skocz do ostatniego',
	'author'				=> 'Autor',
	'reply'				=> 'Odpowiedz',
	'newThreadContent'				=> 'Treść nowego wątku...',
	'quote'				=> 'Cytat',
	'threadDNE'				=> 'Wątek nie istnieje',
	'forumLocked'				=> 'Przepraszamy, to forum jest zamknięte',
	'picture'				=> 'Zdjęcie',
	'message'				=> 'Wiadomość',
	'newThreadNote'				=> 'Uwaga: nowe wątki wymagają zdjęcia',
	'threadLocked'				=> 'Przepraszamy, ten wątek jest zamknięty',
	'postLimitReached'				=> 'Limit postów przekroczony.',
	'imageLimitReached'				=> 'Limit obrazków przekroczony',
	'subscribe'				=> 'Subskrybuj',
	'unsubscribe'				=> 'Usuń subskrypcję',
));

?>
