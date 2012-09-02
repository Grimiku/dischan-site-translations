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
	'search'				=> 'Wyszukaj',
	'keywords'				=> 'słowa kluczowe...',
	'remove'	=> 'usuń',
	'sidebarGift'			=> 'PODARUNEK',
	'recipient'		=> 'odbiorca',
	'nothingYet'		=> 'Jeszcze nic nie dodałeś!',
	'byGenre'				=> 'Wg gatunku',
	'byType'		=> 'Wg typu',
	'info'		=> 'Info',
	'redeemSerials'		=> 'Użyj klucze',
	'support'		=> 'Obsługa',
	'helpFAQ'		=> 'Pomoc/FAQ',
	'tAndCond'		=> 'Warunki użytkowania',
	'priPolicy'		=> 'Polityka prywatności',
	'contact'		=> 'Kontakt',
));

?>
