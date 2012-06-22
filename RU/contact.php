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
	'contact'			=> 'Связатся с нами',
	'contactText'		=> 'Если вы хотите связатся с нами, вы можете заполнить анкету данную ниже. Мы попытаемся вам ответить как можно раньше.',
	'message'			=> 'Сообщение',
	'name'				=> 'Имя',
	'send'				=> 'Отправить',
));

?>