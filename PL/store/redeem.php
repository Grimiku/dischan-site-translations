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
	'redeem'				=> 'Użyj klucza',
	'errorOwned'			=> 'Błąd: już posiadasz ten produkt',
	'errorOwnedPrt1'	=> 'Wprowadziłeś klucz dla',
	'errorOwnedPrt2'			=> ', jednak twoje konto już zawiera ten produkt. Może rozważysz podarowanie twojego klucza znajomemu? Jeśli uważasz, że widzisz te powiadomienie na w skutek błędu, możesz się z nami <a href = "http://dischan.org/contact.php">skontaktować</a>.',
	'redeemAnother'		=> 'Użyj innego klucza',
	'serial'		=> 'Klucz',
	'serialNote'			=> 'Uwzględniona jest wielkość liter!',
	'success'		=> 'Sukces',
	'successPrt1'		=> 'Twók klucz dla',
	'successPrt2'		=> 'został dodany do twojego konta. Teraz możesz pobrać ten produkt w dowolnym czasie z twojej <a href = "library.php">biblioteki</a>.',
	'redeemUppr'		=> 'Użyj klucza',
	'notice'		=> 'Powiadomienie',
	'noticeAbuseText'		=> 'Ten klucz został zablokowany z powodu podejrzenia nadużycia. Sprawa zostanie zbadana, jednak możesz się z nami od razu <a href = "http://dischan.org/contact.php">skontaktować</a> jeśli uważasz, że to pomyłka.',
	'invalidCombin'		=> 'Email lub klucz nieprawidłowy. Proszę spróbować ponownie.',
	'redeemExplan'		=> 'Możesz pobrać wszelkie zakupione gry bez posiadania konta, używając swojego adresu email i klucza. Proszę wpisać wymagane informacje poniżej.',
	'impNotice'		=> 'Ważna Informacja',
	'impNoticePrt1'		=> 'Wszystkie użyte klucze będą powiązane z tym kontem',
	'impNoticePrt2'		=> ' i nie będziesz już mógł pobierać swoich produktów bez logowania się. Jeśli chcesz je pobierać bez powiązywania kluczy, powinieneś się wpierw wylogować.',
	'redeemExplanGue'		=> 'Możesz pobrać wszelkie zakupione gry bez posiadania konta, używając swojego adresu email i klucza. Proszę wpisać wymagane informacje poniżej.',
));

?>
