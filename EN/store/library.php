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
	'libraryLWR'				=> 'library',
	'redeemSerials'				=> 'redeem serials',
	'libraryEmpty'	=> 'Your library is empty!',
	'libraryEmptyPara'		=> '<p>Try browsing around the <a href = "index.php">store</a>. You might find something you like.
							<br />
							<br />
							Or, if you have a digital product serial, you can redeem it <a href = "redeem.php">here</a>.
							</p>',
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