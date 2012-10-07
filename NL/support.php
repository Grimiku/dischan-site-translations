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
	'support'				=> 'Ondersteuning',
	'supportPara'			=> '<p>Heb je problemen met een van onze producten of services? Neem eerst even een kijkje in het <a href = "http://www.dischan.org/forum/viewforum.php?c=3&f=8">ondersteuningsgedeelte van ons forum</a> (in het Engels). 
                                Als je niemand kunt vinden met hetzelfde probleem, start dan gerust een nieuw topic; screenshots helpen altijd.</p>
								<br />
								<p>Voor iets gevoeligere problemen zoals beveiligingszaken, accountproblemen of winkelaankopen raden wij aan het <a href = "contact.php">contactformulier</a> gebruiken.</p>',
));

?>