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
	'rank'				=> 'Ранк',
	'dateJoined'		=> 'Дата регистрация',
	'beforeTracking'	=> 'До того как мы начали следить.',
	'profile'			=> 'Профиль',
	'viewProfile'		=> 'просмотреть профиль',
	'realName'			=> 'Имя',
	'about'				=> 'О вас',
	'avatar'			=> 'Аватар',
	'location'			=> 'Местоположение',
	'website'			=> 'Сайт',
	'account'			=> 'Учётная запись',
	'currentEmail'		=> 'Текущий E-Mail',
	'newEmail'			=> 'Новый E-Mail',
	'newPassword'		=> 'Новый пароль',
	'oldPassword'		=> 'Старый пароль',
	'requiredIf'		=> 'только требуется что бы сменить пароль или E-Mail',
	'options'			=> 'Опции',
	'autoSubscribe'		=> 'Авто-подписываться к темам в которых я отвечаю',
	'emailPM'			=> 'Отправить письмо как только я получу личное сообщение',
	'subscribeToNews'	=> 'Подписать меня к Dischan рассылке',
	'language'			=> 'Язык',
	'whatsThis'			=> 'Что это?',
));

?>