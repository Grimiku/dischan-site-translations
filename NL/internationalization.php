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
	'internationalTrans'=> 'Internationalisatie en vertalingen',
	'internationalPara'	=> '<p>Dischan streeft erna om zo internationaal mogelijk te zijn, om haar producten in zo veel mogelijk talen uit te brengen. Om dit voor elkaar te krijgen, hebben we jouw hulp nodig.
					Als je multitalig bent en ziet dat een taal wordt verwaarloosd, <a href = "contact.php">stuur ons dan een bericht</a>. We zouden je hulp in het vertalen van onze website of producten geweldig vinden.</p>
							<br />
							<p>Om je bekwaamheid vast te stellen vragen we je wel dat je een <a href="files/translatorspack.zip">vertalingstest</a> uitvoert, wat de vertaling van een paar secties van het script van de Cradle Song preview inhoudt. We zullen je erna vragen als je ons contacteert, dus maak hem alsjeblieft alvorens je ons een bericht stuurt.</p>',
	'qualityControl'	=> 'Kwaliteitsbeheer',
	'qualityControlPara'=> '<p>Desondanks dat we ons best doen, kunnen we alleen de kwaliteit van de originele Engelse scripts en site garanderen. Als je typfouten, grammaticafouten of verkeerde vertalingen ziet, zouden we het op prijs stellen als je ons een <a href = "contact.php">bericht stuurt</a>.</p>',
));

?>
