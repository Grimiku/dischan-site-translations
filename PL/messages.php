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
	'success'				=> 'Sukces!',
	'information'			=> 'Informacja',
	'notice'			=> 'Ogłoszenie',
	'informationChanged'	=> 'Informacja zmieniona.',
	'avatarChange'			=> 'Twój awatar został zmieniony.',
	'unsubscribed'			=> 'Anulowano subskrypcję',
	'unsubscribed'		=> 'Przestałeś obserwować ten wątek.',
	'subscribed'			=> 'Zasubskrybowano!',
	'subscribedMsg'			=> 'Będziesz teraz otrzymywał wiadomość gdy ktoś odpowie w tym wątku.',
	'applied'			=> 'Twoje podanie do firmy Dischan zostało wysłane. Zwrócimy się do Ciebie w przeciągu 24 godzin.',
	'messageSent'			=> 'Wiadomość została wysłana.',
	'passReset'			=> 'Twoje hasło zostało zresetowane. Niedługo otrzymasz wiadomość z nowym hasłem.',
	'newsUnsub'			=> 'Przestałeś subskrybować Dischan newsletter.',
	'resetEmail'		=> 'Wiadomość została wysłana na Twój adres, kliknij na link znajdujący się w środku, aby zresetować hasło.',
	'forumLocked'			=> 'Forum jest aktualnie zamknięte w celach konserwacyjnych. Proszę sprawdzić później.',
	'blogLocked'		=> 'Blog jest aktualnie zamknięty w celach konserwacyjnych. Proszę sprawdzić później.',
	'storeLocked'		=> 'Sklep jest aktualnie zamknięty w celach konserwacyjnych. Proszę sprawdzić później.',
	'reviewPosted'		=> 'Twoja recenzja została dodana! Dziękujemy za opinię.',
	'giftAdded'			=> 'Podarunek dodany.',
));

?>
