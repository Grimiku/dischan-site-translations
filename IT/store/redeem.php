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
	'redeem'				=> 'riscatta',
	'errorOwned'			=> 'Errore: Possiedi già questo prodotto',
	'errorOwnedPrt1'	=> 'hai inserito un serial per',
	'errorOwnedPrt2'			=> ', ma questo account già dispone di questo prodotto. Magari potresti regalare questo serial ad un amico. Se pensi di aver ricevuto questa notifica per errore, puoi <a href = "../contact.php">contattarci</a>.',
	'redeemAnother'		=> 'Riscatta un altro serial',
	'serial'		=> 'Serial',
	'serialNote'			=> 'I serial sono sensibili alle maiuscole!',
	'success'		=> 'operazione riuscita',
	'successPrt1'		=> 'Il tuo serial per',
	'successPrt2'		=> 'è stato aggiunto al tuo account. Ora puoi scaricarlo in qualsiasi momento dalla tua <a href = "library.php">libreria</a>.',
	'redeemUppr'		=> 'Riscatta',
	'notice'		=> 'Nota',
	'noticeAbuseText'		=> 'Questo serial è stato disabilitato perché sospettato di abuso. Rifletteremo attentamente sul da farsi, comunque puoi <a href = "http://dischan.org/contact.php">contattarci</a> se pensi che questo sia un errore.',
	'invalidCombin'		=> 'Indirizzo email o serial invalido. Riprova.',
	'redeemExplan'		=> 'Puoi riscattare i giochi che hai acquistato senza un account usando il tuo indirizzo email e il tuo serial. Inserisci le informazioni richieste qua sotto.',
	'impNotice'		=> 'Importante',
	'impNoticePrt1'		=> 'I tuoi serial saranno associati a questo account',
	'impNoticePrt2'		=> ', e non sarai più in grado di scaricare i prodotti che hai comprato senza eseguire l\'accesso. Se vuoi scaricare i tuoi prodotti senza associare i tuoi serial, dovresti uscire da questo account prima.',
	'redeemExplanGue'		=> 'Puoi riscattare i giochi che hai acquistato senza un account usando il tuo indirizzo email e il tuo serial. Inserisci le informazioni richieste qua sotto.',
));

?>