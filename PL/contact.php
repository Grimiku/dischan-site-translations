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
	'contact'			=> 'Kontakt',
	'contactText'		=> 'Jeśli chcesz się z nami skontaktować, prosimy o wypełnienie poniższego formularza. Postaramy się odpowiedzieć tak szybko, jak jest to możliwe.',
	'message'			=> 'Wiadomość',
	'name'				=> 'Imię',
	'send'				=> 'Wyślij',
));

?>
