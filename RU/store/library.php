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
	'libraryLWR'				=> 'библиотека',
	'redeemSerials'				=> 'воспользоваться ключом',
	'libraryEmpty'	=> 'Ваша библиотека пустая!',
	'libraryEmptyPara'		=> '<p>Попробуйте походить по нашему <a href = "index.php">магазину</a>. Может найдёте что вам понравится.
							<br />
							<br />
							Или если у вас имеется ключ, вы можете им воспользоваться <a href = "redeem.php">здесь</a>.
							</p>',
	'recipient'		=> 'получать',
	'nothingYet'		=> 'Ещё ничего нет!',
	'byGenre'				=> 'По жанру',
	'byType'		=> 'По типу',
	'info'		=> 'Информация',
	'redeemSerials'		=> 'Воспользоваться ключом',
	'support'		=> 'Поддержка',
	'helpFAQ'		=> 'Помощь/FAQ',
	'tAndCond'		=> 'Условия пользования',
	'priPolicy'		=> 'Политика конфиденциальности',
	'contact'		=> 'Связаться с нами',
));

?>