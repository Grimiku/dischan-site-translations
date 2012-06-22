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
	'newMessagesBefore'	=> 'У вас',
	'newMessagesAfter'	=> 'новых сообщений',
	'newPM'				=> 'Новое личное сообщение',
	'subject'			=> 'Тема',
	'from'				=> 'От',
	'dismiss'			=> 'Закрыть',
	'dismissAll'		=> 'Закрыть всё',
	'newTR'				=> 'Новые ответы',
	'thread'			=> 'Тема',
	'lastPost'			=> 'Последний пост был в',
	'newNotification'	=> 'Новое оповещение',
	'visitInbox'		=> 'Проверьте ваши входящие сообщения',
	'noNewMessages'		=> 'Нет новых сообщений!',
	'user'				=> 'Пользователь',
	'inbox'				=> 'Входящие',
	'library'			=> 'Библиотека',
	'logout'			=> 'Выйти',
	'usernameEmail'		=> 'Имя пользователя/E-Mail',
	'password'			=> 'Пароль',
	'login'				=> 'Зайти',
	'register'			=> 'Зарегистрироватся',
	'username'			=> 'Имя пользователя',
	'email'				=> 'E-Mail',
	'confirmPassword'	=> 'Потвердите пароль',
	'subscribeNews'		=> 'Подписатся на рассылку Dischan?',
	'registerTOS'		=> 'Внимание: Регистрируя учётную запись на Dischan, вы соглашаетесь на наши <a target="_blank" href = "termsandconditions.php">условия пользования</a> и <a target="_blank" href = "privacypolicy.php">политику конфиденциальности</a>.',
	'backtotop'			=> 'обратно наверх',
	'caseSensitive'		=> 'чувствительно к регистру, минимум 8 знаков',
	'show'		=> 'Показать',
	'showLwr'		=> 'показать',
	'page'		=> 'Страница',
	'bottom'		=> 'Низ',
	'top'		=> 'Вверх',
	'contents'		=> 'Содержимое',
	'usernameNotes'		=> 'A-Z, 0-9, и _- не чувствительно к регистру',
	'forgotPass'		=> 'Забыли пароль?',
	'sortBy'		=> 'сортировать по',
	'newest'		=> 'новому',
));

?>