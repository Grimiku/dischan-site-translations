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
	'redeem'				=> 'воспользоватся',
	'errorOwned'			=> 'Ошибка: Товар уже зарегистрован',
	'errorOwnedPrt1'	=> 'Вы ввели серийный ключ для',
	'errorOwnedPrt2'			=> ', хотя ваша учётная запись уже имеет этот товар. Может стоит подарить этот серийный ключ другу? Если вы считаете что получаете это сообщение по ошибке, вы можете <a href = "../contact.php">связатся с нами</a>.',
	'redeemAnother'		=> 'Воспользоваться ещё одним серийным ключом',
	'serial'		=> 'Серийный ключ',
	'serialNote'			=> 'Серийные ключи нужно вводить с учётом регистра!',
	'success'		=> 'Удача',
	'successPrt1'		=> 'Ваш серийный ключ для',
	'successPrt2'		=> 'был добавлен в вашу учётную запись. Вы теперь можете скачать её в любой момент из <a href = "library.php">библиотеки</a>.',
	'redeemUppr'		=> 'Воспользоватся',
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