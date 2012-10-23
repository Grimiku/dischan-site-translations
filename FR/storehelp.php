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
	'storeHelp'				=> 'Aide Store',
	'sotreHelpPara'				=> 'En cas de question ou de problème sur le Store Dischan, n\'hésitez pas à vérifier les questions fréquemment posées ci-dessous. Si votre problème n\'est toujours pas résolu, nous vous encourageons à <a href = "contact.php">nous contacter</a>, en précisant toute information que vous jugez pertinente. Nous vous répondrons aussi vite que possible.',
	'storeFAQ'		=> 'FAQ Store',
	'storeFAQPara'	=> '<p><b>Le Store Dischan accepte-t-il le "gifting" (offrir comme cadeau) ?</b></p>
							<p>Oui ! Vous pouvez offrir un cadeau à un autre utilisateur Dischan, ou bien à une adresse e-mail. Il vous suffit simplement de faire un tour sur la page d\'un produit et de cliquer sur "Cadeau".</p>
							<br />
							<p><b>Le site Dischan accepte-t-il les achats internationaux ?</b></p>
							<p>Oui ! Nous utilisons Paypal comme système de paiement et nous acceptons tout ce que Paypal propose. Toutefois, pour les achats nécessitant un envoie par courrier, nous vous invitons à nous contacter auparavant, si vous résidez en dehors des États-Unis ou du Canada.</p>
							<br />
							<p><b>Comment fonctionne les produits digitaux à télécharger ?</b></p>
							<p>Si vous achetez un contenu digital avec votre compte Dischan, il sera ajouté à votre bibliothèque pour être téléchargé à tout moment. Si vous n\'utilisez pas un compte Dischan, une clé produit de votre achat sera envoyée à votre adresse e-mail Paypal. Vous pouvez utiliser cette clé produit conjointement avec votre e-mail Paypal pour télécharger vos produits.</p>
							<br />
							<p><b>Je n\'ai pas reçu d\'e-mail après mon achat, que dois-je faire ?</b></p>
							<p>Veuillez patienter au moins 30 minutes après votre achat, et vérifiez bien que le message ne se trouve pas dans la partie Spam ou Corbeille de votre messagerie. Si vous ne recevez toujours pas de message, veuillez <a href = "contact.php">nous contacter</a> avec l\'ID de la transaction Paypal ou le numéro de réception et le nom d\'utilisateur ou l\'e-mail que vous avez utilisé lors de l\'achat. Nous ferons tout notre possible pour résoudre le problème rapidement.</p>',
));

?>