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
	'mailLwr'			=> 'почта',
	'outboxLwr'			=> 'исходящее',
	'inboxLwr'			=> 'входящее',
	'all'				=> 'всё',
	'privateMessages'	=> 'приватные сообщения',
	'threadReplies'		=> 'ответы в теме на форуме',
	'notifications'		=> 'оповещения',
	'unread'			=> 'Непрочитанное',
	'inboxUppr'			=> 'Входящее',
	'outboxUppr'		=> 'Исходящее',
	'mailUppr'			=> 'Почта',
	'permissionDenied'	=> 'Ошибка: У вас не хватает прав чтобы просмотреть это сообщение или оно было удалено.',
	'noMessages'		=> 'Нет Сообщений.',
	'deletePage'		=> 'Удалить Страницу',
	'confirmDelete'		=> 'Подтвердить Удаление',
	'cancel'			=> 'Отменить',
	'composeMessage'	=> 'Составить Сообщение',
	'new'				=> 'Новое',
	'read'				=> 'Прочитать',
	'markRead'			=> 'Пометить как Прочитанное',
	'markUnread'		=> 'Пометить как Не Прочитанное',
	'delete'			=> 'Удалить',
	'reallyDelete'		=> 'Точно удалить?',
	'yes'				=> 'Да',
	'no'				=> 'Нет',
	'pmFrom'			=> 'Приватное Сообщение От',
	'threadRepliesUppr'	=> 'Ответы в Теме на Форуме',
	'siteNotiFrom'		=> 'Оповещение Сайта От',
	'recipients'		=> 'Получатели',
	'alsoSentTo'		=> 'Также отправить',
	'newPostsIn'		=> 'Новые Посты в',
	'confirmClear'		=> 'Подтвердить Очистку',
	'clear'				=> 'Очистить',
	'reply'				=> 'Ответить',
	'viewPost'			=> 'посмотреть пост',
	'missingReplies'	=> 'Ответы к чему это сообщение были удалены.',
	'notification'		=> 'Оповещение',
	'messageNotFound'	=> 'Сообщение не найдено',
	'newMessage'		=> 'Новое Сообщение',
	'lockedForum'		=> 'Извините, этот форум закрыт.',
	'recipient'			=> 'Получатель',
	'message'			=> 'Сообщение',
	'mutipleInstru'		=> 'Несколько: user1; user2; user3',
	'tagNote'			=> 'Примите во внимание: Все теги работают',
	'replyToAll'		=> 'Ответить всем?',
	'messageDisclaim'	=> 'За все сообщения и их содержимое несёт ответственность их постер',

));

?>