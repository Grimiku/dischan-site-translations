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
	'internationalTrans'=> 'Internationalisierung und Übersetzung',
	'internationalPara'	=> '<p>Dischan versucht so international wie möglich zu sein und die Produkte in so viel Sprachen wie möglich anbieten zu können. Dafür brauchen wir deine Hilfe.
							Falls du sicher in mehreren Sprachen bist, und merkst, dass wir deine vernachlässigen, <a href = "contact.php">kontaktiere uns</a>.
							Wir freuen uns über jede Hilfe bei der Übersetzung unserer Seiten und Produkte.</p>
							<br />
							<p>Wir bitten Bewerber, <a href="files/translatorspack.zip">diesen Übersetzungstest</a> zu absolvieren, in dem verschiedene Ausschnitte aus Cradle-Song        
								zu übersetzen sind. Wir werden, nach dem du uns kontaktiert hast, danach fragen, also solltest du ihn vorher erledigt haben.</p>',
	'qualityControl'	=> 'Qualitätsprüfung',
	'qualityControlPara'=> '<p>Obwohl wir uns große Mühe geben, kann Dischan nur die Qualität des englischen Originals garantieren. Sollten irgendwelche Tippfehler, grammatische Fehler oder Übersetzungsfehler auffallen, 
							<a href = "contact.php">kontaktiere uns</a> bitte.</p>',
));

?>
