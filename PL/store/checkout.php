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
	'details'				=> 'szczegó³y',
	'confirmation'				=> 'potwierdzenie',
	'payment'	=> 'zap³ata',
	'finish'		=> 'koniec',
	'thankYouExcl'		=> 'Dziêkujê!',
	'youreAwesome'		=> 'Jesteœ <i>niesamowity</i>.',
	'loggedInPurchaseConf'	=> 'Kwit zosta³ wys³any na email powi¹zany z twoim kontem na dischanie. Jakiekolwiek cyfrowe produkty bêd¹ dostêpne w twojej <a href = "library.php">bibliotece</a> z ukoñczeniem transakcji.<br /><br />
							Dziêkujemy bardzo za twoje zainteresowanie. Jeœli masz jakiœ problem, nie wahaj siê <a href = "http://dischan.org/contact.php">skontaktowaæ z nami</a>.',
	'guestPurchaseConf'		=> 'Kwit zosta³ wys³any na email powi¹zany twoim kontem PayPal. Za³¹czone s¹ równie¿ linki do pobierania i numery seryjne jakichkolwiek produktów cyfrowych.<br /><br />
							Dziêkujemy bardzo za twoje zainteresowanie. Jeœli masz jakiœ problem, nie wahaj siê <a href = "http://dischan.org/contact.php">skontaktowaæ z nami</a>.',
	'returnToStore'		=> 'wróæ do sklepu',
	'comfirmationUppr'		=> 'Potwierdzenie',
	'shippingHandlingCost'		=> 'wysy³ka',
	'total'		=> 'Suma',
	'reviewOrder'		=> 'Prosimy sprawdziæ zamówienie przed kontynuowaniem transakcji.',
	'dischanCartPaypal'		=> 'Twój zakup pojawi siê w PayPalu jako \'Dischan Cart\'.',
	'purchaseTOS'		=> 'Proszê zauwa¿yæ, ¿e przez zakup 
									w sklepie dischana, zgadzasz siê z naszymi <a target="_blank" href = "../termsandconditions.php">warunkami us³ugi</a> i <a target="_blank" href = "../privacypolicy.php">polityk¹ prywatnoœci</a>.',
	'giftCaps'		=> 'PODARUNEK',
	'cartEmpty'		=> 'Wygl¹da na to, ¿e twój koszyk jest pusty! Proszê wróciæ do <a href = "index.php">sklepu</a>. Jeœli s¹dzisz, ¿e widzisz tê wiadomoœæ w skutek b³êdu, prosimy <a href = "http://dischan.org/contact.php">skontaktowaæ siê z nami.</a>',
	'signUp'		=> 'Zarejestruj siê',
	'checkoutLoginMsg'		=> 'Loguj¹c lub rejestruj¹c siê pozwalasz nam do³¹czyæ twoje zakupydo twojego konta i przechowywaæ je w twojej bibliotece. To u³atwia tobie pobieranie póŸniej twoich gier, muzyki i/lub innych produktów.',
	'guestCheckout'		=> 'Kasa dla goœci',
	'guestCheckMsg1'		=> 'Konto goœcia u¿yje twojego emaila z PayPala do przechowywania twoich zakupów. Wszystkie cyfrowe produkty pobierzesz podaj¹c swój email i numer seryjny produktu. Zarejestrowanie lub zalogowanie siê jest zalecan¹
					metod¹ do robienia zakupów.',
	'guestCheckMsg2'		=> 'Zauwa¿, ¿e w ka¿dej chwili po zakupie mo¿esz nadal utworzyæ konto i dodaæ swoje produkty u¿ywaj¹c adresu email z paypala i numerów seryjnych.',
					
));

?>