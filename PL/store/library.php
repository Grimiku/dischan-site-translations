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
	'libraryLWR'				=> 'biblioteka',
	'redeemSerials'				=> 'użyj klucza',
	'libraryEmpty'	=> 'Twoja biblioteka jest pusta!',
	'libraryEmptyPara'		=> '<p>Spróbuj rozejrzeć się po <a href = "index.php">sklepie</a>. Może znajdziesz coś interesującego.
							<br />
							<br />
							Jeżeli posiadasz klucz do produktu cyfrowego, możesz go użyć <a href = "redeem.php">tutaj</a>.
							</p>',
	'recipient'		=> 'odbiorca',
	'nothingYet'		=> 'Jeszcze nic nie ma!',
	'byGenre'				=> 'Według Gatunku',
	'byType'		=> 'Według Typu',
	'info'		=> 'Info',
	'redeemSerials'		=> 'Użyj Klucza',
	'support'		=> 'Wsparcie',
	'helpFAQ'		=> 'Pomoc/FAQ',
	'tAndCond'		=> 'Warunki',
	'priPolicy'		=> 'Polityka Prywatności',
	'contact'		=> 'Kontakt',
));

?>
