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
	'press'				=> 'Stampa',
	'pressPara'				=> '<p>Recensisci o scrivi articoli su visual novel? Ti piacerebbe scrivere qualcosa su Dischan o su uno dei nostri prodotti? Se hai
							delle domande da farci, o vorresti intervistare uno dei membri del team, puoi farcelo sapere attraverso il nostro <a href = "contact.php">modulo per contattarci</a>.</p>
							<br />
							<p>E\' disponibile anche un <a href = "files/press_package.zip">pacchetto stampa</a> che puoi scaricare. Contiene un po\' di immagini che puoi usare per il tuo aricolo, e qualche breve informazione su Dischan e i suoi prodotti.</p>',
));

?>