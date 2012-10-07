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
	'press'				=> 'Presse',
	'pressPara'				=> '<p>Arbeitest du an einem Artikel über Visual-Novels? Hast du Lust über Dischan oder eines der Projekte zu schreiben? Wenn du Fragen hast,
							oder du ein Interview führen möchtest, schick uns bitte eine Nachricht über unser <a href = "contact.php">Kontaktformular</a>.</p>
							<br />
							<p>Es gibt außerdem ein <a href = "files/press_package.zip">Press Kit</a> zum freien Download. Es enthält einige Graphiken, sowie Kurzinformationen zu Dischan und den Projekten.</p>',
));

?>
