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
	'posts'				=> 'Posty',
	'rank'				=> 'Ranga',
	'dateJoined'		=> 'Dołączył',
	'beforeTracking'	=> 'Zanim zaczęliśmy śledzenie.',
	'profile'			=> 'Profil',
	'viewProfile'		=> 'pokaż profil',
	'realName'			=> 'Prawdziwe Imię',
	'about'				=> 'O mnie',
	'avatar'			=> 'Awatar',
	'location'			=> 'Skąd',
	'website'			=> 'Strona',
	'account'			=> 'Konto',
	'currentEmail'		=> 'Aktualny Email',
	'newEmail'			=> 'Nowy Email',
	'newPassword'		=> 'Nowe Hasło',
	'oldPassword'		=> 'Stare Hasło',
	'requiredIf'		=> 'wymagane tylko przy zmianie hasła lub emaila',
	'options'			=> 'Opcje',
	'autoSubscribe'		=> 'Automatycznie obserwuj temat, w którym odpowiedziałem',
	'emailPM'			=> 'Wyślij email, gdy otrzymam prywatną wiadomość',
	'subscribeToNews'	=> 'Subskrybuj do Dischan newsletter',
	'language'			=> 'Język',
	'whatsThis'			=> 'co to jest?',
));

?>
