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
	'recentlyBumped'				=> 'Messages récents',
	'forumDNE'				=> 'Le forum spécifié n\'existe pas',
	'noThreadsYet'		=> 'Pas encore de discussions',
	'noPostsYet'	=> 'Pas de message',
	'newThread'			=> 'Nouvelle discussion',
	'stickyLock'		=> 'Épinglé <br />& bloqué ',
	'locked'			=> 'Bloqué',
	'sticky'				=> 'Épinglé',
	'replies'				=> 'réponse(s)',
	'images'				=> 'image(s)',
	'jumpToLatest'				=> 'Voir le Dernier',
	'author'				=> 'Auteur',
	'reply'				=> 'Répondre',
	'newThreadContent'				=> 'Contenu de la Nouvelle Discussion...',
	'quote'				=> 'Citer',
	'threadDNE'				=> 'La discussion n\'existe pas',
	'forumLocked'				=> 'Toutes nos excuses, ce forum est bloqué.',
	'picture'				=> 'Image',
	'message'				=> 'Message',
	'newThreadNote'				=> 'Note : les nouvelles discussions nécessitent une image.',
	'threadLocked'				=> 'Toutes nos excuses, cette discussion est bloquée.',
	'postLimitReached'				=> 'Limite des messages atteinte.',
	'imageLimitReached'				=> 'Limite des images atteinte.',
	'subscribe'				=> 'S\'abonner',
	'unsubscribe'				=> 'Se désabonner',
));

?>