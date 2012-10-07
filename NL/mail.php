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
	'mailLwr'			=> 'mail',
	'outboxLwr'			=> 'postvak uit',
	'inboxLwr'			=> 'postvak in',
	'all'				=> 'alles',
	'privateMessages'	=> 'privéberichten',
	'threadReplies'		=> 'onderwerpreacties',
	'notifications'		=> 'notificaties',
	'unread'			=> 'Ongelezen',
	'inboxUppr'			=> 'Postvak In',
	'outboxUppr'		=> 'Postvak Uit',
	'mailUppr'			=> 'Mail',
	'permissionDenied'	=> 'Error: Je hebt geen toestemming om dit bericht te lezen, of het bericht is verwijderd.',
	'noMessages'		=> 'Geen berichten.',
	'deletePage'		=> 'Verwijder pagina',
	'confirmDelete'		=> 'Bevestig verwijdering',
	'cancel'			=> 'Annuleer',
	'composeMessage'	=> 'Nieuw bericht',
	'new'				=> 'Nieuw',
	'read'				=> 'Gelezeen',
	'markRead'			=> 'Markeer als gelezen',
	'markUnread'		=> 'Markeer als ongelezen',
	'delete'			=> 'Verwijder',
	'reallyDelete'		=> 'Wil je het echt verwijderen?',
	'yes'				=> 'Ja',
	'no'				=> 'Nee',
	'pmFrom'			=> 'Privébericht van',
	'threadRepliesUppr'	=> 'Onderwerpreacties',
	'siteNotiFrom'		=> 'Systeembericht van',
	'recipients'		=> 'Ontvangers',
	'alsoSentTo'		=> 'Stuur ook naar',
	'newPostsIn'		=> 'Nieuwe reacties in',
	'confirmClear'		=> 'Bevestig wissing',
	'clear'				=> 'Wis',
	'reply'				=> 'Beantwoord',
	'viewPost'			=> 'toon reactie',
	'missingReplies'	=> 'De reacties waarover dit bericht gaat zijn verwijderd.',
	'notification'		=> 'Notificatie',
	'messageNotFound'	=> 'Bericht niet gevonden',
	'newMessage'		=> 'Nieuw bericht',
	'lockedForum'		=> 'Sorry, dit forum is gesloten.',
	'recipient'			=> 'Ontvanger',
	'message'			=> 'Bericht',
	'mutipleInstru'		=> 'Meerdere ontvangers: gebruiker1; gebruiker2; gebruiker3',
	'tagNote'			=> 'Let op: alle tags werken gewoon.',
	'replyToAll'		=> 'Beantwoord naar iedereen?',
	'messageDisclaim'	=> 'Alle berichten en hun inhoud zijn de verantwoordelijk van de plaatsende gebruiker',

));

?>
