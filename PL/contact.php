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
	'contactText'		=> 'If you\'d like to contact us, please feel free to fill out the form below. We\'ll try to get back to you as soon as we can.',
	'message'			=> 'Message',
	'name'				=> 'Name',
	'send'				=> 'Send',
));

?>