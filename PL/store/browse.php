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
	'coming'	=> 'Nadchodz¹ce',
	'bestSelling'	=> 'Najlepiej sprzedaj¹ce siê',
	'browseSearch'	=> 'Szukaj',
	'queryTooLong'	=> 'B³¹d: zapytanie zbyt d³ugie',
	'queryTooShort'	=> 'B³¹d: zapytanie zbyt krótkie',
	'queryBlank'	=> 'B³¹d: puste zapytanie ',
	'bestSellersLwr'	=> 'bestsellery',
	'highestRatedLwr'	=> 'najwy¿ej ocenione',
	'icons'	=> 'ikony',
	'listView'	=> 'lista',
	'noProductsFound'	=> 'Nie znaleziono produktu',
	'max'	=> 'max',
));

?>