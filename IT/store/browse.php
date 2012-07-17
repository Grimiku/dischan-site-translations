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
	'products'		=> 'Prodotti',
	'coming'	=> 'In arrivo',
	'bestSelling'	=> 'I più venduti',
	'browseSearch'	=> 'Cerca',
	'queryTooLong'	=> 'Errore: hai immesso troppe parole',
	'queryTooShort'	=> 'Errore: hai immesso troppe poche parole',
	'queryBlank'	=> 'Errore: non hai scritto niente',
	'bestSellersLwr'	=> 'i più venduti',
	'highestRatedLwr'	=> 'i più votati',
	'icons'	=> 'icone',
	'listView'	=> 'lista',
	'noProductsFound'	=> 'Nessun prodotto trovato.',
	'max'	=> 'max',
	'max'	=> 'max',
	'max'	=> 'max',
	'max'	=> 'max',
));

?>