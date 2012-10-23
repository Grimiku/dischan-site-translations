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
	'success'				=> 'Réussi !',
	'information'			=> 'Information',
	'notice'			=> 'Remarque',
	'informationChanged'	=> 'Information changée.',
	'avatarChange'			=> 'Votre avatar a été modifié.',
	'unsubscribed'			=> 'Se désabonner',
	'unsubscribed'		=> 'Vous vous êtes désabonné(e) de cette discussion.',
	'subscribed'			=> 'S\'abonner !',
	'subscribedMsg'			=> 'Vous recevrez dorénavant un message lorsque cette discussion sera commentée.',
	'applied'			=> 'Votre question à été envoyée à Dischan avec succès. Vous recevrez une réponse de notre part dans les 24 heures.',
	'messageSent'			=> 'Votre message a été envoyé.',
	'passReset'			=> 'Votre mot de passe a été supprimé. Vous recevrez très vite un e-mail avec votre nouveau mot de passe.',
	'newsUnsub'			=> 'Vous vous êtes désabonné(e) de la Newsletter Dischan.',
	'resetEmail'		=> 'Un e-mail vous a été envoyé, veuillez cliquer sur le lien à l\'intérieur pour réinitialiser votre mot de passe.',
	'forumLocked'			=> 'Le forum est actuellement fermé pour cause de maintenance. Veuillez réessayer plus tard.',
	'blogLocked'		=> 'Le blog est actuellement fermé pour cause de maintenance. Veuillez réessayer plus tard.',
	'storeLocked'		=> 'Le Store est actuellement fermé pour cause de maintenance. Veuillez réessayer plus tard.',
	'reviewPosted'		=> 'Votre avis a été posté ! Merci de votre opinion.',
	'giftAdded'			=> 'Cadeau ajouté.',
	'giveBackAdded'			=> 'Your product has been added to your cart. Thank you for choosing to support this developer!',
));

?>