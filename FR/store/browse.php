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
	'products'		=> 'Produits',
	'coming'	=> 'Bientôt',
	'bestSelling'	=> 'Meilleure vente',
	'browseSearch'	=> 'Recherche',
	'queryTooLong'	=> 'Erreur : mots-clés trop nombreux',
	'queryTooShort'	=> 'Erreur : mot-clé trop court',
	'queryBlank'	=> 'Erreur : recherche à vide',
	'bestSellersLwr'	=> 'meilleures ventes',
	'highestRatedLwr'	=> 'mieux notés',
	'icons'	=> 'icônes',
	'listView'	=> 'liste',
	'noProductsFound'	=> 'Aucun produit trouvé',
	'max'	=> 'max',
));

?>