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
	'latestBlog'		=> 'Post più recenti del blog',
	'visitBlog'			=> 'visita il blog',
	'readTheRest'		=> 'Leggi il resto di questo post',
	'featuredDL'		=> 'In primo piano',
	'featuredDLTitle'	=> 'Juniper\'s Knot',
	'featuredDLText'	=> 'Scarica Juniper\'s Knot qui: <a href = "http://junipersknot.dischan.org/">sito ufficiale</a>.',
));

?>