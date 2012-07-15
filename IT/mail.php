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
	'outboxLwr'			=> 'posta inviata',
	'inboxLwr'			=> 'posta ricevuta',
	'all'				=> 'tutti i messaggi',
	'privateMessages'	=> 'messaggi privati',
	'threadReplies'		=> 'risposte a discussioni',
	'notifications'		=> 'notifiche',
	'unread'			=> 'Non letti',
	'inboxUppr'			=> 'Posta inviata',
	'outboxUppr'		=> 'Posta ricevuta',
	'mailUppr'			=> 'Mail',
	'permissionDenied'	=> 'Errore: Non hai i permessi necessari per visualizzare questo messaggio, o il messaggio è stato eliminato.',
	'noMessages'		=> 'Nessun Messaggio.',
	'deletePage'		=> 'Cancella Pagina',
	'confirmDelete'		=> 'Conferma Cancellazione',
	'cancel'			=> 'Cancella',
	'composeMessage'	=> 'Crea Messaggio',
	'new'				=> 'Nuovo',
	'read'				=> 'Leggi',
	'markRead'			=> 'Segna come letto',
	'markUnread'		=> 'Segna come non letto',
	'delete'			=> 'Elimina',
	'reallyDelete'		=> 'Sei sicuro di volerlo eliminare?',
	'yes'				=> 'Sì',
	'no'				=> 'No',
	'pmFrom'			=> 'Messaggio Personale Da',
	'threadRepliesUppr'	=> 'Risposte A Discussioni',
	'siteNotiFrom'		=> 'Notifica Da',
	'recipients'		=> 'Destinatari',
	'alsoSentTo'		=> 'Mandato anche a',
	'newPostsIn'		=> 'Nuovo Post in',
	'confirmClear'		=> 'Conferma Cancellazione',
	'clear'				=> 'Cancella',
	'reply'				=> 'Rispondi',
	'viewPost'			=> 'visualizza post',
	'missingReplies'	=> 'La risposta per la quale questo messaggio è stato creato è stata elimiata.',
	'notification'		=> 'Notifica',
	'messageNotFound'	=> 'Messaggio Non Trovato',
	'newMessage'		=> 'Nuovo Messaggio',
	'lockedForum'		=> 'Spiacenti, questo forum è bloccato.',
	'recipient'			=> 'Destinatario',
	'message'			=> 'Messaggio',
	'mutipleInstru'		=> 'Per destinatari multipli: utente1; utente2; utente3',
	'tagNote'			=> 'Nota: Tutti i tag sono in funzione',
	'replyToAll'		=> 'Rispondere a tutti?',
	'messageDisclaim'	=> 'Tutti i messaggi e i loro contenuti sono sotto la responsabilità di chi li scrive',

));

?>