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
	'contact'			=> 'Contact',
	'contactText'		=> 'Si vous souhaitez nous contacter, veuillez remplir les champs ci-dessous. Nous essaierons de vous répondre aussi vite que possible.',
	'message'			=> 'Message',
	'name'				=> 'Nom',
	'send'				=> 'Envoyer',
));

?>