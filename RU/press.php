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
	'press'				=> 'Пресса',
	'pressPara'				=> '<p>Вы пишите статью про визуальные новеллы? Хотите написать о студии Dischan или о её продуктах? Если у вас имеются вопросы, или хотите получить интервью с любым членом нашей команды, то пожалуйста отправьте нам сообщение через нашу <a href = "contact.php">контактную форму</a>.</p>
							<br />
							<p>Так же у нас имеется <a href = "files/press_package.zip">пресс кит</a> который вы можете загрузить. Он содержит некоторые изображения которые вы можете использовать и краткую информацию о студии Dischan и о её продуктах.</p>',
));

?>