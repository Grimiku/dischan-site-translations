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
	'storeHelp'				=> 'Winkelondersteuning',
	'sotreHelpPara'				=> 'Als je vragen of problemen hebt die betrekking hebben op de Dischan-winkel, kun je hieronder een lijst van veelgestelde vragen bekijken.
                                    Als dit je zaak niet oplost, raden wij aan om het <a href = "contact.php">contactformulier</a> te gebruiken (in het Engels). Voeg alle informatie toe waarvan je denkt dat ze relevant is. We zullen je zo snel mogelijk proberen te helpen.',
	'storeFAQ'		=> 'Veelgestelde vragen - Winkel',
	'storeFAQPara'	=> '<p><b>Ondersteunt de Dischan-winkel het geven van geschenken?</b></p>
							<p>Jazeker! Je kunt een geschenk aan een andere Dischan-gebruiker of aan een e-mailadres geven. Het enige wat je hoeft te doen is naar de productpagina te gaan en op "Geschenk geven" te drukken.</p>
							<br />
							<p><b>Staat Dischan internationale aankopen toe?</b></p>
							<p>Jazeker! We gebruiken PayPal als onze betalingsverwerker, dus elke betalingsmethode die zij accepteren, accepteren wij ook. Echter, voor producten die fysieke verzending vereisen is het beter om eerst even contact met ons op te nemen als je buiten de Verenigde Staten of Canada woont.</p>
							<br />
							<p><b>Hoe werken digitale productdownloads?</b></p>
							<p>Als je een digitaal product koopt met behulp van je Dischan-account wordt het automatisch aan je verzameling toegevoegd: op deze manier kun je het product op elk moment van de dag, week of jaar downloaden, mits je ingelogd bent.
                            Als je geen gebruikgemaakt van een Dischan-account, wordt een unieke licentiecode naar het e-mailadres van je PayPal-account verzonden. Je kunt vervolgens deze code, in combinatie met je PayPal e-mailadres, gebruiken om je product te downloaden.</p>
							<br />
							<p><b>Ik heb nog geen e-mail gekregen na mijn aankoop, wat moet ik nu doen?</b></p>
							<p>Wacht allereerst ten minste tot 30 minuten na je aankoop, en check je prullenbak en spam-map. Als de e-mail nog steeds nergens te vinden is, raden we aan om <a href = "contact.php">contact met ons op te nemen</a> (in het Engels). Voeg je PayPal-transactieid en je Dischan-gebruikersnaam of e-mailadres toe dat je gebruikt heb bij de aankoop. We zullen het probleem zo snel mogelijk met je proberen op te lossen.</p>',
));

?>