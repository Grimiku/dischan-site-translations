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
	'loggedInPurchaseConf'	=> 'Kwit został wysłany na email powiązany z twoim kontem na Dischanie. Wszelkie produkty cyfrowe będą dostępne w twojej <a href = "library.php">bibliotece</a> z ukończeniem transakcji.<br /><br />
							Dziękujemy bardzo za twoje zainteresowanie. Jeśli masz jakiś problem, proszę się z nami <a href = "http://dischan.org/contact.php">skontaktować</a>',
	'guestPurchaseConf'		=> 'Kwit został wysłany na email powiązany z twoim kontem PayPal. Załączone są również linki do pobierania i numery seryjne jakichkolwiek produktów cyfrowych.<br /><br />
							Dziękujemy bardzo za twoje zainteresowanie. Jeśli masz jakiś problem, proszę się z nami <a href = "http://dischan.org/contact.php">skontaktować</a>.',
	'returnToStore'		=> 'wróć do sklepu',
	'comfirmationUppr'		=> 'Potwierdzenie',
	'shippingHandlingCost'		=> 'wysyłka',
	'total'		=> 'Suma',
	'reviewOrder'		=> 'Prosimy sprawdzić zamówienie przed kontynuowaniem transakcji.',
	'dischanCartPaypal'		=> 'Twój zakup pojawi się w PayPalu jako \'Dischan Cart\'.',
	'purchaseTOS'		=> 'Proszę zauważyć, że kupując 
									w sklepie Dischana akceptujesz nasze <a target="_blank" href = "../termsandconditions.php">warunki korzystania z serwisu</a> oraz <a target="_blank" href = "../privacypolicy.php">politykę prywatności</a>.',
	'giftCaps'		=> 'PODARUNEK',
	'cartEmpty'		=> 'Wygląda na to, że twój koszyk jest pusty! Proszę wrócić do <a href = "index.php">sklepu</a>. Jeśli sądzisz, że widzisz tę wiadomość w skutek błędu, proszę się z nami <a href = "http://dischan.org/contact.php">skontaktować.</a>',
	'signUp'		=> 'Zarejestruj się',
	'checkoutLoginMsg'		=> 'Logując lub rejestrując się pozwalasz nam powiązać twoje zakupy z twoim kontem i przechowywać je w twojej bibliotece. To ułatwia ci pobieranie później twoich gier, muzyki i/lub innych produktów.',
	'guestCheckout'		=> 'Kasa dla gości',
	'guestCheckMsg1'		=> 'Konto gościa użyje twojego emaila z PayPala do przechowywania twoich zakupów. Wszystkie produkty cyfrowe pobierzesz podając swój email i numer seryjny produktu. Zarejestrowanie lub zalogowanie się jest zalecaną
					metodą do robienia zakupów.',
	'guestCheckMsg2'		=> 'Zauważ, że w każdej chwili po zakupie możesz nadal utworzyć konto i dodać swoje produkty używając adresu email z PayPala i numerów seryjnych.',
					
));

?>
