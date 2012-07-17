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
	'contact'			=> 'Contactos',
	'contactText'		=> 'Se nos quiser contactar, por favor preencha o formulário abaixo. Tentaremos responder-lhe o mais cedo possível.<br /><i><small>Por favor note que deve escrever em Inglês.</small></i>',
	'message'			=> 'Mensagem',
	'name'				=> 'Nome',
	'send'				=> 'Enviar',
));

?>