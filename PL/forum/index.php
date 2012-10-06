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
	'threads'				=> 'tematów', // in polish form changes with quantity: 2, 3, 4 tematy 5, 6 .... tematów 
	'noCats'				=> 'Brak nowych wątków!',
));

?>
