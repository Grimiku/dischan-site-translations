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
	'newMessagesBefore'	=> 'Vous avez',
	'newMessagesAfter'	=> 'nouveau(x) message(s)',
	'newPM'				=> 'Nouveau message privé',
	'subject'			=> 'Sujet',
	'from'				=> 'De',
	'dismiss'			=> 'Dismiss',
	'dismissAll'		=> 'Dismiss All',
	'newTR'				=> 'Nouvelle(s) réponse(s) de la discussion',
	'thread'			=> 'Discussion',
	'lastPost'			=> 'Dernier message sur',
	'newNotification'	=> 'Nouvelle Notification',
	'visitInbox'		=> 'Visiter votre boîte de réception',
	'noNewMessages'		=> 'Aucun nouveau message !',
	'user'				=> 'Utilisateur',
	'inbox'				=> 'Boîte de réception',
	'library'			=> 'Bibliothèque',
	'logout'			=> 'Se déconnecter',
	'usernameEmail'		=> 'Pseudo/E-mail',
	'password'			=> 'Mot de passe',
	'login'				=> 'Connexion',
	'register'			=> 'S\'inscrire',
	'username'			=> 'Pseudo',
	'email'				=> 'E-mail',
	'confirmPassword'	=> 'Confirmer le mot de passe',
	'subscribeNews'		=> 'S\'abonner à la Newsletter Dischan ?',
	'registerTOS'		=> 'Note : En créant un compte Dischan, vous acceptez nos <a target="_blank" href = "termsandconditions.php">conditions d\'utilisation</a> et notre <a target="_blank" href = "privacypolicy.php">politique de respect de la vie privée</a>.',
	'backtotop'			=> 'Haut de page',
	'caseSensitive'		=> 'sensible à la casse, min 8 caractères',
	'show'		=> 'Voir',
	'showLwr'		=> 'voir',
	'page'		=> 'Page',
	'bottom'		=> 'bas',
	'top'		=> 'haut',
	'contents'		=> 'Contenus',
	'usernameNotes'		=> 'A-Z, 0-9, et _- insensibles à la casse',
	'forgotPass'		=> 'Mot de passe oublié ?',
	'sortBy'		=> 'trier par',
	'newest'		=> 'plus récent',
));

?>