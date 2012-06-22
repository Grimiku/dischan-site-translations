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
	'gameDetails'				=> 'Детали об игре',
	'loadingVideo'				=> 'Загрузка проигрывателя ...',
	'noThreadsYet'		=> 'Ещё нету тем',
	'release'	=> 'Дата выхода',
	'website'			=> 'Website',
	'visit'		=> 'посетить',
	'tags'			=> 'Тэги',
	'languages'				=> 'Языки',
	'platforms'				=> 'Платформы',
	'price'				=> 'Цена',
	'reviews'				=> 'Рецензия',
	'returnToDesc'				=> 'вернутся к описанию',
	'bad'				=> 'плохо',
	'okay'				=> 'нормально',
	'good'				=> 'хорошо',
	'great'				=> 'отлично',
	'excellent'				=> 'супер',
	'noReviews'				=> 'Рецензий ещё нет. Будте первыми!',
	'writeReview'				=> 'Написать рецензию...',
	'chooseRating'				=> 'выбрать рейтинг',
	'productReviewed'				=> 'Вы рецензировали этот товар. Спасибо!',
	'mustPurchase'				=> 'Вы должны купить этот продукт до того как вы сможете его рецензировать.',
	'loginRegisterReview'				=> '<a href = "#top">Зайдите</a> или <a style = "cursor:pointer;" onclick ="overlay(\'register\')">зарегистрируйтесь</a> что бы добавить свою!',
	'loginRegisterReview2'				=> 'Купили этот товар у нас? <a href = "#top">Зайдите</a> или <a style = "cursor:pointer;" onclick ="overlay(\'register\')">зарегистрируйтесь</a> что бы добавить свою!',
	'productDetails'				=> 'Дополнительно о товаре',
	'productNotFound'				=> 'Товар не найден',
));

?>