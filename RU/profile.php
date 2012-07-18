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
	'lastOnline'				=> 'Последний раз был в сети',
	'dateJoined'		=> 'Дата регистрации',
	'beforeTracking'	=> 'До того как мы начали следить.',
	'never'			=> 'Никогда.',
	'userNotFound'		=> 'Пользователь не найден.',
	'realName'			=> 'Имя',
	'about'				=> 'О пользователе',
	'message'			=> 'Сообщение',
	'location'			=> 'Местоположение',
	'website'			=> 'Сайт',
	'profile'			=> 'Профиль',
	'tagNote'		=> 'Внимание: Все теги функционируют',
));

?>