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
	'storeHelp'				=> 'Pomoc',
	'sotreHelpPara'				=> 'Jeśli masz jakieś problemy lub pytania dotyczące sklepu Dischan, sprawdź najczęściej zadawane pytania poniżej. Jeśli to nie rozwiąże problemu, wówczas proszę się z nami <a href = "contact.php">skontaktować</a>, dołączając wszystkie istotne informacje. Zwrócimy się do ciebie tak szybko, jak to możliwe.',
	'storeFAQ'		=> 'FAQ',
	'storeFAQPara'	=> '<p><b>Czy sklep Dischan umożliwia wysyłanie jako prezent?</b></p>
							<p>Tak! Możesz obdarować innego użytkownika Dischana lub wysłać na czyjś adres email. Wystarczy przejść na stronę produktu i kliknąć "Gift".</p>
							<br />
							<p><b>Czy Dischan pozwala na zakupy międzynarodowe?</b></p>
							<p>Tak! Używamy PayPala jako nasz system płatności i wszystko co on akceptuje, my również. Jednak w przypadku produktów wymagających wysyłki, najlepiej najpierw się z nami skontaktować, jeśli jesteś spoza Stanów Zjednoczonych lub Kanady.</p>
							<br />
							<p><b>Jak działa pobieranie produktów cyfrowych?</b></p>
							<p>Jeśli kupisz produkt poprzez konto Dischan, zostanie on dodany do twojej biblioteki i będzie możliwy do pobrania w dowolnym czasie. Jeśli nie używasz konta Dischan, klucz do produktu będzie wysłany na twój adres email z konta PayPal. Możesz użyć tego klucza w połączeniu z twoim emailem na koncie PayPal, aby pobrać produkty.</p>
							<br />
							<p><b>Nie otrzymałem wiadomości zwrotnej po dokonaniu zakupu, co powinienem zrobić?</b></p>
							<p>Proszę poczekać co najmniej 30 minut i koniecznie sprawdzić folder Spam. Jeśli wiadomość nadal nie doszła, proszę się z nami <a href = "contact.php">skontaktować</a> podając ID twojej transakcji na PayPalu lub numer pokwitowania oraz nazwę użytkownika lub adres email, którego użyłeś przy zakupie. Postaramy się rozwiązać ten problem możliwie najszybciej.</p>',
));

?>
