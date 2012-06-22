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
	'support'				=> 'Поддержка',
	'supportPara'			=> '<p>У вас проблема с продукцией Dischan или её сервисом? Если так, то пожалуста проверьте <a href = "http://www.dischan.org/forum/viewforum.php?c=3&f=8">раздел поддержки на нашем форуме</a>. Если ваша проблема там не перечислена, начните новую тему насчёт неё. Скриншоты могут сильно помочь.</p>
								<br />
								<p>Для более деликатных проблем, таких как проблемы с безопасностью, вашей учётной записью или покупками в магазине, пожалуста воспользуйтесь <a href = "contact.php">контактной формой</a>.</p>',
));

?>