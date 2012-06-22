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
	'index'				=> 'индекс',
	'categories'				=> 'Категории',
	'forums'		=> 'Форумы',
	'posts'	=> 'Посты',
	'users'			=> 'Пользователи',
	'databaseSize'		=> 'Размера датабазы',
	'forumRules'			=> 'Правила форума.',
	'forumDisclaimer'				=> 'За все посты и их содержания несёт ответственность их постер.',
));

?>