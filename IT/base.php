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
	'newMessagesBefore'	=> 'Hai',
	'newMessagesAfter'	=> 'nuovi messaggi',
	'newPM'				=> 'Nuovo Messaggio Privato',
	'subject'			=> 'Oggetto',
	'from'				=> 'Da',
	'dismiss'			=> 'Archivia',
	'dismissAll'		=> 'Archivia Tutto',
	'newTR'				=> 'Nuove Risposte',
	'thread'			=> 'Discussione',
	'lastPost'			=> 'Ultimo Post alle',
	'newNotification'	=> 'Nuova Notifica',
	'visitInbox'		=> 'Visita la tua casella postale',
	'noNewMessages'		=> 'Non hai nuovi messaggi!',
	'user'				=> 'Utente',
	'inbox'				=> 'Casella postale',
	'library'			=> 'Libreria',
	'logout'			=> 'Logout',
	'usernameEmail'		=> 'Username/Email',
	'password'			=> 'Password',
	'login'				=> 'Login',
	'register'			=> 'Registrati',
	'username'			=> 'Username',
	'email'				=> 'Email',
	'confirmPassword'	=> 'Conferma la Password',
	'subscribeNews'		=> 'Vuoi iscriverti alla newsletter di Dischan?',
	'registerTOS'		=> 'Nota: Registrando un account su Dischan, accetti i nostri <a target="_blank" href = "termsandconditions.php">termini di servizio</a> e <a target="_blank" href = "privacypolicy.php">la nostra policy sulla privacy</a>.',
	'backtotop'			=> 'torna a inizio pagina',
	'caseSensitive'		=> 'sensibile alle maiuscole, min 8 caratteri',
	'show'		=> 'Mostra',
	'showLwr'		=> 'mostra',
	'page'		=> 'Pagina',
	'bottom'		=> 'Fine',
	'top'		=> 'Inizio',
	'contents'		=> 'Contenuto',
	'usernameNotes'		=> 'A-Z, 0-9, e _- non sensibile alle maiuscole',
	'forgotPass'		=> 'Scordata la password?',
	'sortBy'		=> 'organizza',
	'newest'		=> 'più recenti',
));

?>