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
	'search'				=> 'szukaj',
	'queryShort'				=> 'Zapytanie zbyt krótkie',
	'resultsFor'		=> 'Wyniki dla',
	'max'	=> 'max',
	'postedIn'			=> 'zamieszczone w',
	'noResults'		=> 'Brak wyników dla',
));

?>