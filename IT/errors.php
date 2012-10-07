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
	'passwordIncorrect'			=> 'Password non corretta.',
	'userEmailNotFound'			=> 'Username o indirizzo email non trovato.',
	'notLoggedIn'		=> 'Non hai eseguito l\'accesso.',
	'error'		=> 'Errore!',
	'forumDoesNotExist'		=> 'Stai cercando di postare su un forum che non esiste.',
	'subConPicRequired'		=> 'Una nuova discussione necessita di un titolo, di contenuto e di un\'immagine.',
	'picConRequired'		=> 'Una risposta necessita di un immagine e/o di contenuto.',
	'threadLocked'				=> 'Impossibile postare. La discussione è bloccata.',
	'fileUpError'			=> 'Si è verificato un problema con l\'upload del file. Riprova.',
	'thumbProblem'			=> 'Si è verificato un problema con l\'anteprima dell\'immagine. Magari potresti provare con un\'immagine diversa?',
	'passwordNoMatch'		=> 'Le tue nuove password non corrispondono.',
	'invalidEmail'			=> 'Email invalida.',
	'postLimitReached'		=> 'Limite di post raggiunto. Comincia un\'altra discussione se desideri ancora discutere di quest\'argomento.',
	'imageLimitReached'		=> 'Limite di immagini raggiunto, prova a postare senza un\'immagine.',
	'charLimitReached'		=> 'Il tuo post supera il numero massimo di caratteri consentito. Accorcialo, per piacere.',
	'newLLimitReached'		=> 'Il tuo post supera il limite di righe consentito. Accorcialo, per piacere.',
	'postingTooFast'		=> 'Stai postando troppo velocemente! Dovrai aspettare un altro po\'. Perché non ti fai una bella cioccolata calda intanto che aspetti?',
	'fileTooLarge'			=> 'Il tuo file è troppo grande! Puoi provare a renderlo più piccolo, o lamentarti che il nostro limite di dimensione dei file è troppo bassp.',
	'silenced'		=> 'Silenziato!',
	'silencedMsg'			=> 'Sei stato silenziato. Ciò significa che non puoi più postare! Forse ti sei comportato male, o forse sei stato accidentalmente bannato. Per appelarti contro questa decisione, contatta un moderatore.',
	'alreadyUnsubbed'	=> 'Sembra che tu non sia iscritto a questa discussione, perciò non possiamo cancellare la tua iscrizione!',
	'alreadySubbed'			=> 'Non possiamo iscriverti a qualcosa a cui sei già iscritto! Vacci piano con quel mouse.',
	'ipBanned'			=> 'IP Bannato!',
	'ipBannedMsg'			=> 'Il tuo indirizzo IP è stato bannato. Può darsi che non sia colpa tua, è probabile che uno spammer ci abbia costretto a bannarlo. Contattaci se pensi di non essere stato tu.',
	'forumLocked'			=> 'Questo forum è bloccato.',
	'captchaFail'			=> 'Captcha non riuscito, riprova.',
	'emptyForms'			=> 'Alcuni moduli sono stati lasciati vuoti, controlla una seconda volta per piacere.',
	'invalidUsername'			=> 'Username non valido, riprova.',
	'passwordTooShort'			=> 'Password non corrispondenti, o troppo brevi.',
	'emailUsed'			=> 'Email già in uso.',
	'usernameUsed'			=> 'Username già in uso.',
	'passwordIncoTryAgain'	=> 'Password non corretta. Riprova.',
	'msgReqSubCon'			=> 'Un nuovo messaggio necessita di un oggetto e di contenuto.',
	'msgTooManyChars'		=> 'Il tuo messaggio supera il numero massimo di caratteri consentito! Accorcialo, per piacere.',
	'msgTooManyNewL'		=> 'Il tuo messaggio è di troppe righe, accorcialo un po\', per piacere.',
	'flood'			=> 'Stai eseguendo troppe azioni o le stai eseguendo troppo rapidamente. Attendi e riprova più tardi.',
	'destinationReq'		=> 'Necessita di una destinazione.',
	'threadNoLonger'			=> 'La discussione non esiste più.',
	'registrationLock'			=> 'Le registrazioni sono momentaneamente chiuse. Ci dispiace! Probabilmente, stiamo lavorando a qualcosa. Controlla più tardi, per piacere.',
	'userNotFound'			=> 'Utente non trovato.',
	'spamFilter'			=> 'Filtro spam attivato!',
	'spamFilterMsg'			=> 'Il tuo messaggio sembrava spam, perciò l\'abbiamo scartato. Se non sei uno spammer, riscrivi il tuo messaggio e riprova.',
	'sendMsgFail'			=> 'Invio del messaggio non riuscito!',
	'sendMsgFailMsg'		=> 'Il tuo messaggio non è stato inviato a causa di un errore sconosciuto. Spiacenti! Riprova più tardi.',
	'formsEmpty'			=> 'Alcuni campi obbligatori sono stati lasciati vuoti.',
	'contactFlood'			=> 'Hai già inviato un modulo per contattarci recentemente. Riprova più tardi.',
	'applicationFlood'		=> 'Hai già inviato una richiesta per lavorare con noi recentemente. Riprova più tardi.',
	'noAcctEmail'			=> 'Non esiste un account associato a questo indirizzo email.',
	'passRstFlood'			=> 'Hai già resettato la tua password di recente, controlla la tua email.<br /><br />Se non hai ricevuto nessuna email, controlla la casella "spam", e <a href = "contact.php">contattaci</a>.',
	'sorry'			=> 'Spiacenti!',
	'loginDisabl'			=> 'L\'accesso è temporaneamente disabilitato. Controlla più tardi.',
	'msgSendFailSome'		=> 'Invio del messaggio non riuscito per i seguenti utenti (potrebbero non esistere, controlla di avere scritto bene i loro nomi):',
	'ratAndReviewEmp'			=> 'Campi "recensione" e/o "voto" vuoti.',
	'reviewTooManyChars'		=> 'La tua recensione supera il numero massimo di caratteri consentito! Accorciala, per piacere.',
	'reviewTooManyNewL'			=> 'La tua recensione è di troppe righe, accorciala un po\', per piacere.',
	'productMssng'			=> 'Spiacenti! Il prodotto non è stato trovato. Potrebbe essere stato temporaneamente o permanentemente rimosso.',
	'reviewedAlr'			=> 'Hai già recensito questo prodotto. Puoi recensire ogni prodotto una volta sola. Se desideri modificare
		    una tua recensione, puoi <a href = "http://dischan.org/contact.php">contattarci</a> e farcelo sapere.',
	'serialDisabled'			=> 'Questo serial è stato disabilitato perchè sospettato di abuso. Rifletteremo attentamente sul da farsi, comunque puoi <a href = "http://dischan.org/contact.php">contattarci</a> immediatamente se pensi che questo sia un errore.',
	'noDownloadPrm'			=> 'Non hai il permesso di scaricare questo prodotto. Spiacenti! Se credi di aver ricevuto questo messaggio per errore, puoi
			<a href = "http://dischan.org/contact.php">contattarci</a>.',
	'noDLSelect'			=> 'Devi selezionare un formato o un sistema operativo prima di scaricare!',
	'invEmailSerialComb'		=> 'Indirizzo email o serial non valido, riprova.',
	'downloadLimit'			=> 'Limite di download raggiunto!',
	'downloadLimitMsg1'			=> 'Hai raggiunto il limite massimo di download di demo. Ritorna tra qualche ora e il tuo limite sarà resettato. Ci scusiamo per l\'inconveniente.',
	'downloadLimitMsg2'			=> 'Hai raggiunto il limite massimo di downlaod di prodotti. Ritorna tra qualche ora e il tuo limite sarà resettato. Ci scusiamo per l\'inconveniente.',
	'downloadLimitMsg3'			=> 'Hai raggiunto il limite massimo di download per questo prodotto. Se hai ancora bisogno di scaricarlo, ritorna tra qualche ora e il tuo limite sarà resettato.',
	'reviewNotFound'			=> 'Recensione non trovata.',
	'mustPurchase'			=> 'Devi acquistare questo prodotto prima di poterlo recensire.',
	'noPermission'			=> 'Non hai il permesso di eseguire questa azione. Se credi che ci sia un errore, puoi <a href = "http://dischan.org/contact.php">contattarci</a>.',
	'formExpired'			=> 'Questo modulo è scaduto, o è invalido. Riprova.',
	'userNotFoundGift'		=> 'Utente non trovato.',
	'UserOwns'			=> 'L\'utente scelto possiede già questo prodotto.',
	'invalidEmailGift'		=> 'Email invalida.',
	'alreadyInCart'			=> 'Già nel tuo carrello.',
	'giftLimit'			=> 'Limite di regali raggiunto. Acquista i tuoi regali prima di aggiungerne altri.',
	'noSelfGifting'			=> 'Non puoi auto-regalarti qualcosa!',
	'outboxFull'			=> 'La tua casella "messaggi inviati" è piena. Non sarai in grado di mandare altri messaggi finchè non cancellerai quelli vecchi.',
	'invalidAmount'			=> 'Invalid amount.',
	'alreadyGiven'			=> 'Sorry, but you can\'t give for the same product twice. ):',
));

?>