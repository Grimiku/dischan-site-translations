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
	'newMessagesBefore'	=> 'Masz',
	'newMessagesAfter'	=> 'nowych wiadomości',// again 1 nowa, 2, 3, 4 nowe, 5, 6 ... nowych, please implement this
	'newPM'				=> 'Nowa Prywatna Wiadomość',
	'subject'			=> 'Temat',
	'from'				=> 'Skąd',
	'dismiss'			=> 'Odrzuć',
	'dismissAll'		=> 'Odrzuć Wszystkie',
	'newTR'				=> 'Nowe odpowiedzi w wątku',
	'thread'			=> 'Wątek',
	'lastPost'			=> 'Ostatni Post',
	'newNotification'	=> 'Nowe Powiadomienia',
	'visitInbox'		=> 'Odwiedź swoją skrzynkę',
	'noNewMessages'		=> 'Brak nowych wiadomości!',
	'user'				=> 'Użytkownik',
	'inbox'				=> 'Skrzynka',
	'library'			=> 'Biblioteka',
	'logout'			=> 'Wyloguj',
	'usernameEmail'		=> 'Nazwa Użytkownika/Email',
	'password'			=> 'Hasło',
	'login'				=> 'Login',
	'register'			=> 'Rejestracja',
	'username'			=> 'Nazwa Użytkownika',
	'email'				=> 'Email',
	'confirmPassword'	=> 'Potwierdź Hasło',
	'subscribeNews'		=> 'Subskrybować Dischan newsletter?',
	'registerTOS'		=> 'Uwaga: Rejestrując się na koncie Dischan, akceptujesz nasze <a target="_blank" href = "termsandconditions.php">warunki korzystana z serwisu</a> oraz <a target="_blank" href = "privacypolicy.php">politykę prywatności</a>.',
	'backtotop'			=> 'do góry',
	'caseSensitive'		=> 'uwzględnia wielkość liter, min. 8 znaków',
	'show'		=> 'Pokaż',
	'showLwr'		=> 'pokaż',
	'page'		=> 'Strona',
	'bottom'		=> 'Dół',
	'top'		=> 'Góra',
	'contents'		=> 'Zawartość',
	'usernameNotes'		=> 'A-Z, 0-9, i _- nie uwzględnia wielkości liter',
	'forgotPass'		=> 'Zapomniałeś hasła?',
	'sortBy'		=> 'sortuj',
	'newest'		=> 'najnowsze',
));

?>
