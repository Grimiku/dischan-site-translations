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
	'libraryLWR'				=> 'libreria',
	'redeemSerials'				=> 'riscatta serial',
	'libraryEmpty'	=> 'La tua libreria è vuota!',
	'libraryEmptyPara'		=> '<p>Prova a dare un\'occhiata al <a href = "index.php">negozio</a>. Potresti trovare qualcosa che ti piace.
							<br />
							<br />
							Oppure, se sei in possesso del serial di un prodotto digitale, puoi associarlo al tuo account <a href = "redeem.php">qui</a>.
							</p>',
	'recipient'		=> 'desinatario',
	'nothingYet'		=> 'Ancora niente qui!',
	'byGenre'				=> 'Per Genere',
	'byType'		=> 'Per Tipo',
	'info'		=> 'Info',
	'redeemSerials'		=> 'Riscatta serial',
	'support'		=> 'Supporto',
	'helpFAQ'		=> 'Aiuto/FAQ',
	'tAndCond'		=> 'Termini e Condizioni',
	'priPolicy'		=> 'Privacy Policy',
	'contact'		=> 'Contattaci',
));

?>