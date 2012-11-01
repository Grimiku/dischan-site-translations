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
	'details'				=> 'détails',
	'confirmation'				=> 'confirmation',
	'payment'	=> 'paiement',
	'finish'		=> 'terminer',
	'thankYouExcl'		=> 'Merci !',
	'youreAwesome'		=> 'Vous êtes <i>génial(e)</i>.',
	'loggedInPurchaseConf'	=> 'Un reçu a été envoyé à votre messagerie Dischan. Tout achat digital sera disponible dans votre <a href = "library.php">bibliothèque</a> dès que la transaction sera traitée.<br /><br />
							Nous vous remercions de votre achat. En cas de question ou de problème, n\'hésitez pas à <a href = "http://dischan.org/contact.php">nous contacter</a>.',
	'guestPurchaseConf'		=> 'Un reçu a été envoyé à votre messagerie Paypal, contenant les liens de téléchargement ainsi que les clés produits pour tout achat digital.<br /><br />
							Nous vous remercions de votre achat. En cas de question ou de problème, n\'hésitez pas à <a href = "http://dischan.org/contact.php">nous contacter</a>.',
	'returnToStore'		=> 'retourner au store',
	'comfirmationUppr'		=> 'Confirmation',
	'shippingHandlingCost'		=> 'frais de livraison',
	'total'		=> 'Total',
	'reviewOrder'		=> 'Veuillez vérifier les détails de la commande avant le paiement.',
	'dischanCartPaypal'		=> 'Votre achat apparaîtra dans Paypal sous le message \'Dischan Cart\'.',
	'purchaseTOS'		=> 'Veuillez noter qu\'en effectuant un achat
									sur le store Dischan, vous acceptez nos <a target="_blank" href = "../termsandconditions.php">conditions d\'utilisation</a> et notre <a target="_blank" href = "../privacypolicy.php">politique de respect de la vie privée</a>.',
	'giftCaps'		=> 'CADEAU',
	'cartEmpty'		=> 'On dirait que votre panier est vide ! Veuillez revenir sur le <a href = "index.php">store</a>. Si vous pensez avoir reçu cette notification par erreur, veuillez <a href = "http://dischan.org/contact.php">nous contacter.</a>',
	'signUp'		=> 'S\'inscrire',
	'checkoutLoginMsg'		=> 'Votre connexion ou votre inscription nous permet de joindre vos achats à votre compte et de les enregistrer dans votre bibliothèque. Cela vous aidera lors de vos futurs téléchargements de jeux, musiques, et/ou autres produits.',
	'guestCheckout'		=> 'Guest Checkout',
	'guestCheckMsg1'		=> 'Un compte invité utilisera votre e-mail Paypal pour faire le suivi de vos achats. Tout achat digital vous demandera
					d\'entrer votre e-mail et la clé produit du produit à télécharger. Une connexion ou une inscription sur le site reste toutefois la meilleure
					façon de faire des achats.',
	'guestCheckMsg2'		=> 'Veuillez noter que vous pourrez créer à tout moment un compte après votre achat, et ajouter vos produits sur celui-ci grâce à votre
					e-mail Paypal et vos clés produits.',
	'shippingNote'		=> 'Veuillez noter que pour l\'instant, nous expédions uniquement aux États-Unis et au Canada. Si vous résidez dans un autre pays et souhaitez recevoir un bien matériel, veuillez <a href = "../contact.php">nous contacter</a>.',
	'shippingGifts'		=> 'Si votre achat est un cadeau, vous pouvez entrer l\'adresse du destinataire dans le formulaire d\'expédition. Nous enverrons votre achat directement à cette adresse !',
					
));

?>