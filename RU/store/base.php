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
	'store'				=> 'магазин',
	'developer'				=> 'Разработчик',
	'free'		=> 'БЕСПЛАТНО',
	'type'	=> 'Тип',
	'genre'			=> 'Жанр',
	'rating'		=> 'Рейтинг',
	'selectOSDL'			=> 'Выберите ОС и язык...',
	'selectDLFMT'			=> 'Выберите формат скачки...',
	'download'			=> 'Скачать',
	'games'				=> 'Игры',
	'cart'		=> 'Корзина',
	'recipient'		=> 'получатель',
	'subtotal'		=> 'Сумма',
	'subtotalLwr'		=> 'Сумма',
	'newestUppr'				=> 'Последнее',
	'newReleases'				=> 'Новое',
	'comingSoon'				=> 'Скоро',
	'bestSellers'				=> 'Бэстселлеры',
	'highestRated'				=> 'Наивысший рейтинг',
	'onSale'				=> 'На продаже',
	'freeCat'				=> 'Бесплатно',
	'music'				=> 'Музыка',
	'swag'				=> 'Swag',
	'addAsGift'				=> 'Добавить как подарок',
	'giveToUser'				=> 'Подарить пользователю dischan',
	'giveToGuest'				=> 'Подарить гостю',
));

?>