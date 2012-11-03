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
	'store'				=> 'Store',
	'developer'				=> 'Créateur ',
	'free'		=> 'GRATUIT',
	'type'	=> 'Type ',
	'genre'			=> 'Genre ',
	'rating'		=> 'Âge ',
	'selectOSDL'			=> 'Sélectionner la langue et le SE...',
	'selectDLFMT'			=> 'Sélectionner le format...',
	'download'			=> 'Télécharger',
	'games'				=> 'Jeux',
	'cart'		=> 'Panier',
	'recipient'		=> 'Destinataire',
	'subtotal'		=> 'Total partiel',
	'subtotalLwr'		=> 'total partiel',
	'newestUppr'				=> 'Plus récents',
	'newReleases'				=> 'Sorties inédites',
	'comingSoon'				=> 'À venir',
	'bestSellers'				=> 'Meilleures ventes',
	'highestRated'				=> 'Mieux notés',
	'onSale'				=> 'En vente',
	'freeCat'				=> 'Gratuit',
	'music'				=> 'Musique',
	'swag'				=> 'Swag',
	'addAsGift'				=> 'Ajouter comme cadeau',
	'giveToUser'				=> 'Offrir à un utilisateur Dischan',
	'giveToGuest'				=> 'Offrir à un invité',
	'giveBack'				=> 'Soutenir ce développeur',
	'chooseAmount'				=> 'Le montant doit être supérieur à $3.00',
));

?>