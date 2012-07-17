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
	'gameDetails'				=> 'Detalhes do Jogo',
	'loadingVideo'				=> 'A carregar o reprodutor ...',
	'noThreadsYet'		=> 'Ainda Não Há Tópicos',
	'release'	=> 'Lançamento',
	'website'			=> 'Website',
	'visit'		=> 'visite',
	'tags'			=> 'Etiquetas',
	'languages'				=> 'Línguas',
	'platforms'				=> 'Plataformas',
	'price'				=> 'Preço',
	'reviews'				=> 'críticas',
	'returnToDesc'				=> 'regressar à descrição',
	'bad'				=> 'mau',
	'okay'				=> 'okay',
	'good'				=> 'bom',
	'great'				=> 'ótimo',
	'excellent'				=> 'excelente',
	'noReviews'				=> 'Ainda não existem críticas. Seja o primeiro a dar uma!',
	'writeReview'				=> 'Escreva uma crítica...',
	'chooseRating'				=> 'escolha uma pontuação',
	'productReviewed'				=> 'Fez uma crítica a este produto. Obrigado!',
	'mustPurchase'				=> 'Tem que comprar este produto antes de o poder criticar.',
	'loginRegisterReview'				=> '<a href = "#top">Entre</a> ou <a style = "cursor:pointer;" onclick ="overlay(\'register\')">registre-se</a> para adicionar a sua!',
	'loginRegisterReview2'				=> 'Comprou este produto de nós? <a href = "#top">Entre</a> ou <a style = "cursor:pointer;" onclick ="overlay(\'register\')">registre-se</a> para adicionar a sua!',
	'productDetails'				=> 'Detalhes do Produto',
	'productNotFound'				=> 'Produto não encontrado',
));

?>