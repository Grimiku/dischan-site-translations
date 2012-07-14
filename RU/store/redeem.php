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
	'redeem'				=> 'воспользоваться',
	'errorOwned'			=> 'Ошибка: Товар уже зарегистрирован',
	'errorOwnedPrt1'	=> 'Вы ввели ключ для',
	'errorOwnedPrt2'			=> ', хотя ваша учётная запись уже имеет этот товар. Может стоит подарить этот ключ другу? Если вы считаете что получаете это сообщение по ошибке, вы можете <a href = "../contact.php">связатся с нами</a>.',
	'redeemAnother'		=> 'Воспользоваться ещё одним серийным ключом',
	'serial'		=> 'Серийный ключ',
	'serialNote'			=> 'Серийные ключи нужно вводить с учётом регистра!',
	'success'		=> 'Удача',
	'successPrt1'		=> 'Ваш ключ для',
	'successPrt2'		=> 'был добавлен в вашу учётную запись. Вы теперь можете скачать её в любой момент из <a href = "library.php">библиотеки</a>.',
	'redeemUppr'		=> 'Воспользоваться',
	'notice'		=> 'Внимание',
	'noticeAbuseText'		=> 'Этот ключ был заблокирован поскольку он подозревается в злоупотреблении. С этим скоро разберутся, но вы можете <a href = "http://dischan.org/contact.php">связатся с нами</a> немедленно если вы чувствуете что это ошибка.',
	'invalidCombin'		=> 'E-Mail или ключ некорректен. Попробуйте снова.',
	'redeemExplan'		=> 'Вы можете получить любую игру которую вы купили без учётной записи используя ваш E-Mail и ключ. Пожалуйста введите нужную информацию снизу.',
	'impNotice'		=> 'Очень важно',
	'impNoticePrt1'		=> 'Любой использованный ключ будет привязан к этой учётной записи',
	'impNoticePrt2'		=> 'и вы не сможете больше скачивать покупки без входа в учётную запись. Если вы хотите скачать покупку без привязывания ключа к учётной записи, вам следует вначале выйти из учётной записи.',
	'redeemExplanGue'		=> 'Вы можете получить любую игру которую вы купили без учётной записи используя ваш E-Mail и ключ. Пожалуйста введите нужную информацию снизу.',
));

?>