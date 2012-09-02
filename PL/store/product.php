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
	'gameDetails'				=> 'Game Details',
	'loadingVideo'				=> 'Loading the player ...',
	'noThreadsYet'		=> 'No Threads Yet',
	'release'	=> 'Release',
	'website'			=> 'Website',
	'visit'		=> 'visit',
	'tags'			=> 'Tags',
	'languages'				=> 'Languages',
	'platforms'				=> 'Platforms',
	'price'				=> 'Price',
	'reviews'				=> 'reviews',
	'returnToDesc'				=> 'return to description',
	'bad'				=> 'bad',
	'okay'				=> 'okay',
	'good'				=> 'good',
	'great'				=> 'great',
	'excellent'				=> 'excellent',
	'noReviews'				=> 'No reviews yet. Be the first to add your own!',
	'writeReview'				=> 'Write a review...',
	'chooseRating'				=> 'choose a rating',
	'productReviewed'				=> 'You have reviewed this product. Thanks!',
	'mustPurchase'				=> 'You have to purchase this product before you are allowed to review it.',
	'loginRegisterReview'				=> '<a href = "#top">Login</a> or <a style = "cursor:pointer;" onclick ="overlay(\'register\')">register</a> to add your own!',
	'loginRegisterReview2'				=> 'Bought this product from us? <a href = "#top">Login</a> or <a style = "cursor:pointer;" onclick ="overlay(\'register\')">register</a> to add your own!',
	'productDetails'				=> 'Product Details',
	'productNotFound'				=> 'Product not found',
));

?>