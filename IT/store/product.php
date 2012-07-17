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
	'gameDetails'				=> 'Dettagli',
	'loadingVideo'				=> 'Il player si sta caricando ...',
	'noThreadsYet'		=> 'Nessuna Discussione',
	'release'	=> 'Data di rilascio',
	'website'			=> 'Sito web',
	'visit'		=> 'visita',
	'tags'			=> 'Tag',
	'languages'				=> 'Lingue',
	'platforms'				=> 'Piattaforme',
	'price'				=> 'Prezzo',
	'reviews'				=> 'recensioni',
	'returnToDesc'				=> 'ritorna alla descrizione',
	'bad'				=> 'pessimo',
	'okay'				=> 'discreto',
	'good'				=> 'buono',
	'great'				=> 'ottimo',
	'excellent'				=> 'eccellente',
	'noReviews'				=> 'Nessuna recensione. Sii il primo ad aggiungerne una!',
	'writeReview'				=> 'Scrivi una recensione...',
	'chooseRating'				=> 'scegli una valutazione',
	'productReviewed'				=> 'Hai recensito questo prodotto. Grazie!',
	'mustPurchase'				=> 'Devi acquistare questo prodotto prima di poterlo recensire.',
	'loginRegisterReview'				=> '<a href = "#top">Login</a> oppure <a style = "cursor:pointer;" onclick ="overlay(\'register\')">registrati</a> per aggiungerne una!',
	'loginRegisterReview2'				=> 'Hai comprato qusto prodotto? <a href = "#top">Accedi</a> o <a style = "cursor:pointer;" onclick ="overlay(\'register\')">registrati</a> per aggiungerne una!',
	'productDetails'				=> 'Dettagli',
	'productNotFound'				=> 'Prodotto non trovato',
));

?>