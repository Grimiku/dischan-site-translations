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
	'details'				=> 'szczegóły',
	'confirmation'				=> 'potwierdzenie',
	'payment'	=> 'zapłata',
	'finish'		=> 'koniec',
	'thankYouExcl'		=> 'Dziękuję!',
	'youreAwesome'		=> 'Jesteś <i>niesamowity</i>.',
	'loggedInPurchaseConf'	=> 'Kwit został wysłany na email powiązany z twoim kontem na dischanie. Jakiekolwiek cyfrowe produkty będą dostępne w twojej <a href = "library.php">bibliotece</a> z ukończeniem transakcji.<br /><br />
							Dziękujemy bardzo za twoje zainteresowanie. Jeśli masz jakiś problem, nie wahaj się <a href = "http://dischan.org/contact.php">skontaktować z nami</a>.',
	'guestPurchaseConf'		=> 'Kwit został wysłany na email powiązany twoim kontem PayPal. Załączone są również linki do pobierania i numery seryjne jakichkolwiek produktów cyfrowych.<br /><br />
							Dziękujemy bardzo za twoje zainteresowanie. Jeśli masz jakiś problem, nie wahaj się <a href = "http://dischan.org/contact.php">skontaktować z nami</a>.',
	'returnToStore'		=> 'wróć do sklepu',
	'comfirmationUppr'		=> 'Potwierdzenie',
	'shippingHandlingCost'		=> 'wysyłka',
	'total'		=> 'Suma',
	'reviewOrder'		=> 'Prosimy sprawdzić zamówienie przed kontynuowaniem transakcji.',
	'dischanCartPaypal'		=> 'Twój zakup pojawi się w PayPalu jako \'Dischan Cart\'.',
	'purchaseTOS'		=> 'Proszę zauważyć, że przez zakup 
									w sklepie dischana, zgadzasz się z naszymi <a target="_blank" href = "../termsandconditions.php">warunkami usługi</a> i <a target="_blank" href = "../privacypolicy.php">polityką prywatności</a>.',
	'giftCaps'		=> 'PODARUNEK',
	'cartEmpty'		=> 'Wygląda na to, że twój koszyk jest pusty! Proszę wrócić do <a href = "index.php">sklepu</a>. Jeśli sądzisz, że widzisz tę wiadomość w skutek błędu, prosimy <a href = "http://dischan.org/contact.php">skontaktować się z nami.</a>',
	'signUp'		=> 'Zarejestruj się',
	'checkoutLoginMsg'		=> 'Logując lub rejestrując się pozwalasz nam dołączyć twoje zakupydo twojego konta i przechowywać je w twojej bibliotece. To ułatwia tobie pobieranie później twoich gier, muzyki i/lub innych produktów.',
	'guestCheckout'		=> 'Kasa dla gości',
	'guestCheckMsg1'		=> 'Konto gościa użyje twojego emaila z PayPala do przechowywania twoich zakupów. Wszystkie cyfrowe produkty pobierzesz podając swój email i numer seryjny produktu. Zarejestrowanie lub zalogowanie się jest zalecaną
					metodą do robienia zakupów.',
	'guestCheckMsg2'		=> 'Zauważ, że w każdej chwili po zakupie możesz nadal utworzyć konto i dodać swoje produkty używając adresu email z paypala i numerów seryjnych.',
					
));

?>