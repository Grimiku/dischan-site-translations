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
	'success'				=> 'Gelukt!',
	'information'			=> 'Informatie',
	'notice'			=> 'Opmerking',
	'informationChanged'	=> 'Informatie veranderd.',
	'avatarChange'			=> 'We hebben je avatar veranderd.',
	'unsubscribed'			=> 'Afgemeld',
	'unsubscribed'		=> 'Je bent nu afgemeld voor dit onderwerp.',
	'subscribed'			=> 'Aangemeld!',
	'subscribedMsg'			=> 'Je zult nu een bericht krijgen wanneer dit onderwerp reacties krijgt.',
	'applied'			=> 'You have successfully applied to Dischan. We should be getting back to you within 24 hours.',
	'messageSent'			=> 'Je bericht is verzonden.',
	'passReset'			=> 'Je wachtwoord is nu gereset. Je zou binnenkort een e-mail met je nieuwe wachtwoord moeten krijgen.',
	'newsUnsub'			=> 'Je hebt je nu afgemeld voor de Dischan-nieuwsbrief.',
	'resetEmail'		=> 'Een e-mail is nu naar je aangegeven adres gestuurd, gebruik de link daarin om je wachtwoord te resetten.',
	'forumLocked'			=> 'Het forum is momenteel gesloten voor onderhoud. Probeer het later nog eens.',
	'blogLocked'		=> 'De weblog is momenteel gesloten voor onderhoud. Probeer het later nog eens.',
	'storeLocked'		=> 'De winkel is momenteel gesloten voor onderhoud. Probeer het later nog eens.',
	'reviewPosted'		=> 'Je recensie is geplaatst! Bedankt voor je mening.',
	'giftAdded'			=> 'Geschenk toegevoegd.',
	'giveBackAdded'			=> 'Your product has been added to your cart. Thank you for choosing to support this developer!',
));

?>
