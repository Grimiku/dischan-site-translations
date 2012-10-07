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
	'recentlyBumped'				=> 'zuletzt gebumpt',
	'forumDNE'				=> 'Forum existiert nicht',
	'noThreadsYet'		=> 'Keine Threads vorhanden',
	'noPostsYet'	=> 'Keine Posts vorhanden',
	'newThread'			=> 'Neuer Thread',
	'stickyLock'		=> 'Sticky <br />& Gesperrt ',
	'locked'			=> 'Gesperrt',
	'sticky'				=> 'Sticky',
	'replies'				=> 'Antworten',
	'images'				=> 'Bilder',
	'jumpToLatest'				=> 'Zum neuesten springen',
	'author'				=> 'Autor',
	'reply'				=> 'Antwort',
	'newThreadContent'				=> 'Neuer Thread Inhalt...',
	'quote'				=> 'Zitat',
	'threadDNE'				=> 'Thread existiert nicht',
	'forumLocked'				=> 'Sorry, dieses Forum ist gesperrt.',
	'picture'				=> 'Bild',
	'message'				=> 'Nachricht',
	'newThreadNote'				=> 'Hinweis: Neue Threads benötigen ein Bild.',
	'threadLocked'				=> 'Sorry, dieser Thread ist gesperrt.',
	'postLimitReached'				=> 'Postlimit erreicht.',
	'imageLimitReached'				=> 'Bilderlimit erreicht.',
	'subscribe'				=> 'Subscribe',
	'unsubscribe'				=> 'Unsubscribe',
));

?>
