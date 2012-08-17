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
	'search'				=> 'Search',
	'keywords'				=> 'keywords...',
	'remove'	=> 'remove',
	'sidebarGift'			=> 'GIFT',
	'recipient'		=> 'recipient',
	'nothingYet'		=> 'Nothing yet!',
	'byGenre'				=> 'By Genre',
	'byType'		=> 'By Type',
	'info'		=> 'Info',
	'redeemSerials'		=> 'Redeem Serials',
	'support'		=> 'Support',
	'helpFAQ'		=> 'Help/FAQ',
	'tAndCond'		=> 'Terms and Conditions',
	'priPolicy'		=> 'Privacy Policy',
	'contact'		=> 'Contact',
));

?>