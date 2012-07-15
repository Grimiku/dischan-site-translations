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
	'search'				=> 'cerca',
	'queryShort'				=> 'Query troppo corta (inserisci più termini per la ricerca)',
	'resultsFor'		=> 'Risultati per',
	'max'	=> 'max',
	'postedIn'			=> 'postato in',
	'noResults'		=> 'Nessun risultato trovato per',
));

?>