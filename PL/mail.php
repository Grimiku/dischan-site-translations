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
	'mailLwr'			=> 'poczta',
	'outboxLwr'			=> 'skrzynka nadawcza',
	'inboxLwr'			=> 'skrzynka odbiorcza',
	'all'				=> 'wszystko',
	'privateMessages'	=> 'prywatne wiadomości',
	'threadReplies'		=> 'odpowiedzi w wątkach',
	'notifications'		=> 'powiadomienia',
	'unread'			=> 'Nieprzeczytane',
	'inboxUppr'			=> 'Skrzynka odbiorcza',
	'outboxUppr'		=> 'Skrzynka nadawcza',
	'mailUppr'			=> 'Poczta',
	'permissionDenied'	=> 'Błąd: Nie masz uprawnień do wyświetlenia tej wiadomości lub została usunięta.',
	'noMessages'		=> 'Brak Wiadomości.',
	'deletePage'		=> 'Usuń Stronę',
	'confirmDelete'		=> 'Potwierdź',
	'cancel'			=> 'Anuluj',
	'composeMessage'	=> 'Ułóż Wiadomość',
	'new'				=> 'Nowe',
	'read'				=> 'Przeczytane',
	'markRead'			=> 'Oznacz jako przeczytane',
	'markUnread'		=> 'Oznacz jako nieprzeczytane',
	'delete'			=> 'Usuń',
	'reallyDelete'		=> 'Na pewno usunąć?',
	'yes'				=> 'Tak',
	'no'				=> 'Nie',
	'pmFrom'			=> 'Prywatna Wiadomość od',
	'threadRepliesUppr'	=> 'Odpowiedzi w Wątkach',
	'siteNotiFrom'		=> 'Powiadomienie z Serwisu od',
	'recipients'		=> 'Odbiorcy',
	'alsoSentTo'		=> 'Wyślij również do',
	'newPostsIn'		=> 'Nowe Posty w',
	'confirmClear'		=> 'Potwierdź',
	'clear'				=> 'Wyczyść',
	'reply'				=> 'Odpowiedz',
	'viewPost'			=> 'pokaż post',
	'missingReplies'	=> 'Odpowiedzi, których ten komunikat dotyczy, zostały usunięte.',
	'notification'		=> 'Powiadomienie',
	'messageNotFound'	=> 'Nie znaleziono wiadomości',
	'newMessage'		=> 'Nowa Wiadomość',
	'lockedForum'		=> 'Przepraszamy, te forum jest zablokowane.',
	'recipient'			=> 'Odbiorca',
	'message'			=> 'Wiadomość',
	'mutipleInstru'		=> 'Do wielu: user1; user2; user3',
	'tagNote'			=> 'Uwaga: Wszystkie tagi są nadal funkcjonalne',
	'replyToAll'		=> 'Odpowiedz do wszystkich?',
	'messageDisclaim'	=> 'Za wszystkie wiadomości i ich zawartość jest odpowiedzialny nadawca',

));

?>