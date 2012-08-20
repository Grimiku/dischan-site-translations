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
	'products'		=> 'Produkty',
	'coming'	=> 'Nadchodzące',
	'bestSelling'	=> 'Najlepiej sprzedające się',
	'browseSearch'	=> 'Szukaj',
	'queryTooLong'	=> 'Błąd: zapytanie zbyt długie',
	'queryTooShort'	=> 'Błąd: zapytanie zbyt krótkie',
	'queryBlank'	=> 'Błąd: puste zapytanie ',
	'bestSellersLwr'	=> 'bestsellery',
	'highestRatedLwr'	=> 'najwyżej ocenione',
	'icons'	=> 'ikony',
	'listView'	=> 'lista',
	'noProductsFound'	=> 'Nie znaleziono produktu',
	'max'	=> 'max',
));

?>