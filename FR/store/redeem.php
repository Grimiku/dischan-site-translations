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
	'redeem'				=> 'Récupérer',
	'errorOwned'			=> 'Erreur : Produit Déjà Obtenu',
	'errorOwnedPrt1'	=> 'Vous entrez une clé produit pour',
	'errorOwnedPrt2'			=> ', toutefois, votre compte possède déjà ce produit. Vous souhaitez peut-être envoyer votre clé produit à un ami ? Si vous pensez avoir reçu cette notification par erreur, veuillez <a href = "../contact.php">nous contacter</a>.',
	'redeemAnother'		=> 'Récupérer une autre clé produit',
	'serial'		=> 'Clé produit',
	'serialNote'			=> 'Les clés produits sont sensibles à la casse !',
	'success'		=> 'Succès',
	'successPrt1'		=> 'Votre clé produit pour',
	'successPrt2'		=> 'a été ajoutée à votre compte. Vous pouvez désormais télécharger celui-ci à tout moment dans votre <a href = "library.php">bibliothèque</a>.',
	'redeemUppr'		=> 'Récupérer',
	'notice'		=> 'Remarque',
	'noticeAbuseText'		=> 'Cette clé produit a été désactivée en raison d\'un soupçon d\'abus. Nous examinerons cette affaire, cependant vous pouvez <a href = "http://dischan.org/contact.php">nous contacter</a> immédiatement si vous pensez que c\'est une erreur.',
	'invalidCombin'		=> 'E-mail ou clé produit invalide. Veuillez réessayer.',
	'redeemExplan'		=> 'Vous pouvez récupérer les jeux que vous avez achetés sans compte Dischan en utilisant votre e-mail et votre clé produit. Veuillez entrer ci-dessous les informations demandées.',
	'impNotice'		=> 'Remarque Importante ',
	'impNoticePrt1'		=> 'Toutes les récupérations de clés produits seront attachées à ce compte',
	'impNoticePrt2'		=> ', vous ne pourrez donc plus télécharger vos achats si vous n\'êtes pas connecté(e) sur le site. Si vous souhaitez télécharger vos achats sans attacher votre clé produit, veuillez d\'abord vous déconnecter.',
	'redeemExplanGue'		=> 'Vous pouvez récupérer les jeux que vous avez achetés sans compte Dischan en utilisant votre e-mail et votre clé produit. Veuillez entrer ci-dessous les informations demandées.',
));

?>