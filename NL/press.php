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
	'press'				=> 'Pers',
	'pressPara'				=> '<p>Ben je bezig met een stuk over visual novels? Geïntereseerd in schrijven over Dischan of een van haar producten?
                                Als je vragen hebt of een interview wilt met een lid van ons team, kun je ons een bericht sturen via ons <a href = "contact.php">contactformulier</a>.</p>
							<br />
							<p>Er is tevens een <a href = "files/press_package.zip">perskit</a> beschikbaar die je kunt downloaden.
                            Het bevat enkele afbeeldingen die vrij te gebruiken zijn, samen met wat korte informatie informatie over Dischan en haar producten.</p>',
));