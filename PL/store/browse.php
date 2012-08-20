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
	'coming'	=> 'Nadchodz�ce',
	'bestSelling'	=> 'Najlepiej sprzedaj�ce si�',
	'browseSearch'	=> 'Szukaj',
	'queryTooLong'	=> 'B��d: zapytanie zbyt d�ugie',
	'queryTooShort'	=> 'B��d: zapytanie zbyt kr�tkie',
	'queryBlank'	=> 'B��d: puste zapytanie ',
	'bestSellersLwr'	=> 'bestsellery',
	'highestRatedLwr'	=> 'najwy�ej ocenione',
	'icons'	=> 'ikony',
	'listView'	=> 'lista',
	'noProductsFound'	=> 'Nie znaleziono produktu',
	'max'	=> 'max',
));

?>