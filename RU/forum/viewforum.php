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
	'recentlyBumped'				=> 'недавно поднятые',
	'forumDNE'				=> 'Форум не существует',
	'noThreadsYet'		=> 'Тем ещё нету',
	'noPostsYet'	=> 'Постов ещё нет',
	'newThread'			=> 'Новая тема',
	'stickyLock'		=> 'Важно <br />& Закрыто ',
	'locked'			=> 'Закрыто',
	'sticky'				=> 'Важно',
	'replies'				=> 'ответов',
	'images'				=> 'изображений',
	'jumpToLatest'				=> 'Перейти к последнему посту',
	'author'				=> 'Автор',
	'reply'				=> 'Ответить',
	'newThreadContent'				=> 'Содержание новой темы...',
	'quote'				=> 'Цитата',
	'threadDNE'				=> 'Тема не существует',
	'forumLocked'				=> 'Простите, этот форум закрыт.',
	'picture'				=> 'Картина',
	'message'				=> 'Сообщение',
	'newThreadNote'				=> 'Примите во внимание: Новые темы требуют картинку.',
	'threadLocked'				=> 'Простите, эта тема закрыта.',
	'postLimitReached'				=> 'Лимит размера поста достигнут.',
	'imageLimitReached'				=> 'Лимит размера изображения достигнут.',
	'subscribe'				=> 'Подписаться',
	'unsubscribe'				=> 'Отписаться',
));

?>