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
	'search'				=> 'Cerca',
	'keywords'				=> 'keywords...',
	'remove'	=> 'rimuovi',
	'sidebarGift'			=> 'REGALA',
	'recipient'		=> 'destinatario',
	'nothingYet'		=> 'Ancora niente qui!',
	'byGenre'				=> 'per Genere',
	'byType'		=> 'Per Tipo',
	'info'		=> 'Info',
	'redeemSerials'		=> 'Riscatta Serial',
	'support'		=> 'Supporto',
	'helpFAQ'		=> 'Aiuto/FAQ',
	'tAndCond'		=> 'Termini e Condizioni',
	'priPolicy'		=> 'Policy della Privacy',
	'contact'		=> 'Contattaci',
));

?>