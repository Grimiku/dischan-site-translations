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
	'redeem'				=> 'redeem',
	'errorOwned'			=> 'Error: Product Already Owned',
	'errorOwnedPrt1'	=> 'You entered a serial for',
	'errorOwnedPrt2'			=> ', however your account already owns this product. Perhaps consider gifting your serial to a friend? If you believe you have recieved this notification in error, you can <a href = "../contact.php">contact us</a>.',
	'redeemAnother'		=> 'Redeem another serial',
	'serial'		=> 'Serial',
	'serialNote'			=> 'Serials are case-sensitive!',
	'success'		=> 'Success',
	'successPrt1'		=> 'Your serial for',
	'successPrt2'		=> 'has been added to your account. You may now download it any time from your <a href = "library.php">library</a>.',
	'redeemUppr'		=> 'Redeem',
	'notice'		=> 'Notice',
	'noticeAbuseText'		=> 'This serial has been disabled due to suspected abuse. The matter will be looked into, however you may <a href = "http://dischan.org/contact.php">contact us</a> immediately if you feel this was a mistake.',
	'invalidCombin'		=> 'Email or serial invalid. Please try again.',
	'redeemExplan'		=> 'You may redeem any games you have purchased without an account using your email and serial. Please enter the required information below.',
	'impNotice'		=> 'Important Notice',
	'impNoticePrt1'		=> 'Any redeemed serials will attach this this account',
	'impNoticePrt2'		=> ', and you will no longer be able to download your products without logging in. If you want to download your products without attaching your serial, you should log out first.',
	'redeemExplanGue'		=> 'You may redeem any games you have purchased without an account using your email and serial. Please enter the required information below.',
));

?>