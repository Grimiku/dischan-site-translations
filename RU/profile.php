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
	'posts'				=> 'Посты',
	'lastOnline'				=> 'Последний раз онлайн',
	'dateJoined'		=> 'Дата регистрации',
	'beforeTracking'	=> 'До того как мы начали следить.',
	'never'			=> 'Никогда.',
	'userNotFound'		=> 'Пользователь не найден.',
	'realName'			=> 'Настоящее имя',
	'about'				=> 'Об',
	'message'			=> 'Сообщение',
	'location'			=> 'Местоположение',
	'website'			=> 'Website',
	'profile'			=> 'Профиль',
	'tagNote'		=> 'Внимание: Все тэги функционируют',
));

?>