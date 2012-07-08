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
	'success'				=> 'Удача!',
	'information'			=> 'Информация',
	'notice'			=> 'Объявление',
	'informationChanged'	=> 'Информация изменена.',
	'avatarChange'			=> 'Ваш аватар поменялся.',
	'unsubscribed'			=> 'Отписаны',
	'unsubscribed'		=> 'Вас отписали от этой темы.',
	'subscribed'			=> 'Подписаны!',
	'subscribedMsg'			=> 'Теперь вы будете получать сообщения когда в эта тема получит ответы.',
	'applied'			=> 'Вы подали заявку Dischan. Мы с вами свяжемся в течении 24 часов.',
	'messageSent'			=> 'Ваше сообщение было отправлено.',
	'passReset'			=> 'Ваш пароль был сброшен. Скоро вы получите письмо с вашим новым паролем.',
	'newsUnsub'			=> 'Вы отписались от рассылки Dischan.',
	'resetEmail'		=> 'Письмо было отправлено на ваш E-Mail, пожалуйста нажмите на ссылку в письме чтобы сбросить ваш пароль.',
	'forumLocked'			=> 'Форум в данный момент закрыт для профилактики. Пожалуйста вернитесь позже.',
	'blogLocked'		=> 'Блог в данный момент закрыт для профилактики. Пожалуйста вернитесь позже.',
	'storeLocked'		=> 'Магазин в данный момент закрыт для профилактики. Пожалуйста вернитесь позже.',
	'reviewPosted'		=> 'Ваша рецензия принята! Спасибо что поделились своим мнением.',
	'giftAdded'			=> 'Подарок добавлен.',
));

?>