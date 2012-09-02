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
	'latestBlog'		=> 'Ostatnie wpisy na blogu',
	'visitBlog'			=> 'odwiedź blog',
	'readTheRest'		=> 'Czytaj dalej',
	'featuredDL'		=> 'Do Pobrania',
	'featuredDLTitle'	=> 'Juniper\'s Knot',
	'featuredDLText'	=> 'Pobierz Juniper\'s Knot tutaj: <a href = "http://junipersknot.dischan.org/">oficjalna strona</a>.',
));

?>