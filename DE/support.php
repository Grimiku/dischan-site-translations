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
	'support'				=> 'Support',
	'supportPara'			=> '<p>Gibt es Probleme mit einem dischan Produkt oder Service? Im Forum gibt es dafür eine eigene Sektion: <a href = "http://www.dischan.org/forum/viewforum.php?c=3&f=8">Support (Englisch)</a>.
								Wenn das Problem dort nicht angeführt ist, zögere nicht, einen neuen Thread dafür zu eröffnen. Screenshots sind willkommen.</p>
								<br />
								<p>Für heiklere Fälle, wie Sicherheitsprobleme, Probleme mit deinem Account, oder Store-Einkäufen, haben wir ein <a href = "contact.php">Kontaktformular</a>.</p>',
));

?>
