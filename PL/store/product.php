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
	'gameDetails'				=> 'Informacje o grze',
	'loadingVideo'				=> 'Wczytywanie odtwarzacza ...',
	'noThreadsYet'		=> 'Brak wątków',
	'release'	=> 'Premiera',
	'website'			=> 'Strona',
	'visit'		=> 'odwiedź',
	'tags'			=> 'Tagi',
	'languages'				=> 'Wersje językowe',
	'platforms'				=> 'Platformy',
	'price'				=> 'Cena',
	'reviews'				=> 'recenzji',
	'returnToDesc'				=> 'powrót do opisu',
	'bad'				=> 'słabe',
	'okay'				=> 'może być',
	'good'				=> 'dobre',
	'great'				=> 'bardzo dobre',
	'excellent'				=> 'doskonałe',
	'noReviews'				=> 'Brak recenzji. Bądź pierwszy i dodaj swoją własną!',
	'writeReview'				=> 'Napisz swoją opinię...',
	'chooseRating'				=> 'wybierz ocenę',
	'productReviewed'				=> 'Dodałeś recenzję produktu. Dzięki!',
	'mustPurchase'				=> 'Musisz zakupić ten produkt, aby móc go zrecenzować.',
	'loginRegisterReview'				=> '<a href = "#top">Zaloguj się</a> lub <a style = "cursor:pointer;" onclick ="overlay(\'register\')">zarejestruj</a>, aby dodać swoją własną!',
	'loginRegisterReview2'				=> 'Kupiłeś od nas ten produkt? <a href = "#top">Zaloguj się</a> lub <a style = "cursor:pointer;" onclick ="overlay(\'register\')">zarejestruj</a>, aby dodać swoją własną!',
	'productDetails'				=> 'Informacje o produkcie',
	'productNotFound'				=> 'Nie znaleziono produktu',
));

?>
