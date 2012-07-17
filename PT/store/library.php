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
	'libraryLWR'				=> 'biblioteca',
	'redeemSerials'				=> 'usar chaves',
	'libraryEmpty'	=> 'A sua biblioteca está vazia!',
	'libraryEmptyPara'		=> '<p>Tente navegar pela <a href = "index.php">loja</a>. Poderá encontrar algo que goste.
							<br />
							<br />
							Ou, se tiver a chave para um produto digital, pode usá-la<a href = "redeem.php">aqui</a>.
							</p>',
	'recipient'		=> 'recipiente',
	'nothingYet'		=> 'Nada ainda!',
	'byGenre'				=> 'Por Género',
	'byType'		=> 'Por Tipo',
	'info'		=> 'Informação',
	'redeemSerials'		=> 'Usar Chaves',
	'support'		=> 'Suporte',
	'helpFAQ'		=> 'Ajuda/Perguntas Frequentes',
	'tAndCond'		=> 'Termos e Condições',
	'priPolicy'		=> 'Política de Privacidade',
	'contact'		=> 'Contacto',
));

?>