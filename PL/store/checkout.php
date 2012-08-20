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
	'details'				=> 'szczeg�y',
	'confirmation'				=> 'potwierdzenie',
	'payment'	=> 'zap�ata',
	'finish'		=> 'koniec',
	'thankYouExcl'		=> 'Dzi�kuj�!',
	'youreAwesome'		=> 'Jeste� <i>niesamowity</i>.',
	'loggedInPurchaseConf'	=> 'Kwit zosta� wys�any na email powi�zany z twoim kontem na dischanie. Jakiekolwiek cyfrowe produkty b�d� dost�pne w twojej <a href = "library.php">bibliotece</a> z uko�czeniem transakcji.<br /><br />
							Dzi�kujemy bardzo za twoje zainteresowanie. Je�li masz jaki� problem, nie wahaj si� <a href = "http://dischan.org/contact.php">skontaktowa� z nami</a>.',
	'guestPurchaseConf'		=> 'Kwit zosta� wys�any na email powi�zany twoim kontem PayPal. Za��czone s� r�wnie� linki do pobierania i numery seryjne jakichkolwiek produkt�w cyfrowych.<br /><br />
							Dzi�kujemy bardzo za twoje zainteresowanie. Je�li masz jaki� problem, nie wahaj si� <a href = "http://dischan.org/contact.php">skontaktowa� z nami</a>.',
	'returnToStore'		=> 'wr�� do sklepu',
	'comfirmationUppr'		=> 'Potwierdzenie',
	'shippingHandlingCost'		=> 'wysy�ka',
	'total'		=> 'Suma',
	'reviewOrder'		=> 'Prosimy sprawdzi� zam�wienie przed kontynuowaniem transakcji.',
	'dischanCartPaypal'		=> 'Tw�j zakup pojawi si� w PayPalu jako \'Dischan Cart\'.',
	'purchaseTOS'		=> 'Prosz� zauwa�y�, �e przez zakup 
									w sklepie dischana, zgadzasz si� z naszymi <a target="_blank" href = "../termsandconditions.php">warunkami us�ugi</a> i <a target="_blank" href = "../privacypolicy.php">polityk� prywatno�ci</a>.',
	'giftCaps'		=> 'PODARUNEK',
	'cartEmpty'		=> 'Wygl�da na to, �e tw�j koszyk jest pusty! Prosz� wr�ci� do <a href = "index.php">sklepu</a>. Je�li s�dzisz, �e widzisz t� wiadomo�� w skutek b��du, prosimy <a href = "http://dischan.org/contact.php">skontaktowa� si� z nami.</a>',
	'signUp'		=> 'Zarejestruj si�',
	'checkoutLoginMsg'		=> 'Loguj�c lub rejestruj�c si� pozwalasz nam do��czy� twoje zakupydo twojego konta i przechowywa� je w twojej bibliotece. To u�atwia tobie pobieranie p�niej twoich gier, muzyki i/lub innych produkt�w.',
	'guestCheckout'		=> 'Kasa dla go�ci',
	'guestCheckMsg1'		=> 'Konto go�cia u�yje twojego emaila z PayPala do przechowywania twoich zakup�w. Wszystkie cyfrowe produkty pobierzesz podaj�c sw�j email i numer seryjny produktu. Zarejestrowanie lub zalogowanie si� jest zalecan�
					metod� do robienia zakup�w.',
	'guestCheckMsg2'		=> 'Zauwa�, �e w ka�dej chwili po zakupie mo�esz nadal utworzy� konto i doda� swoje produkty u�ywaj�c adresu email z paypala i numer�w seryjnych.',
					
));

?>