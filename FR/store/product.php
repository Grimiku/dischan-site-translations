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
	'gameDetails'				=> 'Détails du Jeu',
	'loadingVideo'				=> 'Loading the player ...',
	'noThreadsYet'		=> 'Pas Encore de Discussions',
	'release'	=> 'Sortie ',
	'website'			=> 'Site web ',
	'visit'		=> 'visiter',
	'tags'			=> 'Tags ',
	'languages'				=> 'Langue(s) ',
	'platforms'				=> 'Supports ',
	'price'				=> 'Prix ',
	'reviews'				=> 'Avis',
	'returnToDesc'				=> 'revenir à la description',
	'bad'				=> 'nul',
	'okay'				=> 'moyen',
	'good'				=> 'bien',
	'great'				=> 'super',
	'excellent'				=> 'excellent',
	'noReviews'				=> 'Aucun avis pour le moment. Soyez le premier à donner le votre !',
	'writeReview'				=> 'Écrire un avis...',
	'chooseRating'				=> 'Choisir une note',
	'productReviewed'				=> 'Merci d\'avoir donné votre avis sur ce produit !',
	'mustPurchase'				=> 'Vous devez d\'abord acheter ce produit avant de pouvoir donner votre avis.',
	'loginRegisterReview'				=> '<a href = "#top">Se connecter</a> ou <a style = "cursor:pointer;" onclick ="overlay(\'register\')">S\'inscrire</a> pour ajouter le votre !',
	'loginRegisterReview2'				=> 'Bought this product from us? <a href = "#top">Login</a> or <a style = "cursor:pointer;" onclick ="overlay(\'register\')">register</a> to add your own!',
	'productDetails'				=> 'Détails du Produit',
	'productNotFound'				=> 'Produit non trouvé',
));

?>