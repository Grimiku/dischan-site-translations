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
	'success'				=> 'Operazione riuscita!',
	'information'			=> 'Informazioni',
	'notice'			=> 'Nota',
	'informationChanged'	=> 'Informazioni modificate.',
	'avatarChange'			=> 'Il tuo avatar è stato modificato.',
	'unsubscribed'			=> 'Iscrizione cancellata',
	'unsubscribed'		=> 'Hai cancellato la tua iscrizione a questa discussione.',
	'subscribed'			=> 'Iscritto!',
	'subscribedMsg'			=> 'Riceverai un messaggio ogni volta che sarà postata una risposta a questa discussione.',
	'applied'			=> 'La tua richiesta di entrare a far parte di Dischan è stata inviata con successo. Ti contatteremo entro 24 ore.',
	'messageSent'			=> 'Il tuo messaggio è stato inviato.',
	'passReset'			=> 'La tua password è stata resettata. Entro breve dovresti ricevere una mail con la tua nuova password.',
	'newsUnsub'			=> 'La tua iscrizione alla newsletter di Dischan è stata cancellata.',
	'resetEmail'		=> 'Una mail è stata inviata al tuo indirizzo, Clicca sul link contenuto in essa per resettare la tua password.',
	'forumLocked'			=> 'Al momento, il forum è chiuso per manutenzione. Riprova più tardi.',
	'blogLocked'		=> 'Al momento, il blog è chiuso per manutenzione. Riprova più tardi.',
	'storeLocked'		=> 'Al momento, il negozio è chiuso per manuntenzione. Riprova più tardi.',
	'reviewPosted'		=> 'La tua recensione è stata pubblicata! Grazie per aver condiviso la tua opinione.',
	'giftAdded'			=> 'Regalo aggiunto.',
));

?>