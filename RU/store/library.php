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
	'redeemSerials'				=> 'воспользоватся ключом',
	'libraryEmpty'	=> 'Ваша библиотека пустая!',
	'libraryEmptyPara'		=> '<p>Попробуйте походить по нашему <a href = "index.php">магазину</a>. Может найдёте что вам понравится.
							<br />
							<br />
							Или если у вас имеется ключ, вы можете им воспользоватся <a href = "redeem.php">здесь</a>.
							</p>',
	'recipient'		=> 'получать',
	'nothingYet'		=> 'Ешё ничего нет!',
	'byGenre'				=> 'По жанру',
	'byType'		=> 'По типу',
	'info'		=> 'Информация',
	'redeemSerials'		=> 'Воспользоватся ключом',
	'support'		=> 'Поддержка',
	'helpFAQ'		=> 'Помощь/FAQ',
	'tAndCond'		=> 'Условия пользования',
	'priPolicy'		=> 'Политика конфиденциальности',
	'contact'		=> 'Связатся с нами',
));

?>