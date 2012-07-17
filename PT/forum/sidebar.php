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
	'search'				=> 'Procura',
	'keywords'				=> 'frase...',
	'recenltyBumped'		=> 'Posts Recentes',
	'jumpToLatestBold'	=> 'Ir Para o <b>Mais Recente</b></a>',
	'whosOnline'			=> 'Quem Está Online',
	'nobodyOnline'		=> 'Não está ninguém online neste momento!',
));

?>