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
	'aboutFirstPara'	=> '<h1>Wer sind wir?</h1>
							<hr />
							<div class = "leftContentText">
								<p>Dischan Media ist ein internationales Studio, das sich auf die Produktion von Kunst, Musik, Literatur und Design von höchster Qualität konzentriert. Es wurde im Sommer 2009 von Jeremy Miller in einer gemeinsamen Unternehmung, eine hochwertige Visual Novel für den westlichen Markt zu produzieren, gegründet.</p>
								<br />
								<p>Mit der Größe unseres Teams sind auch unsere Ziele gewachsen. Dischan besteht nun aus vielen talentierten Individuen mit der gemeinsamen Vision, das Erleben schöner Momente allen und überall zu ermöglichen.</p>
							</div>',
	'aboutSecondPara'	=> '<h1>Entwickler</h1>
							<hr />
							<div class = "leftContentText">
								<p>Zum Kern unseres Teams gehören zur Zeit:</p>
								<ul>
			    					<li>Jeremy (Dani) Miller - Autor/Programmierung/Projekt Manager (<a href = "http://jeremyrmiller.com">site</a>)</li>
			    					<li>Saimon (Doomfest) Ma - Künstlerische Leitung (<a href = "http://doomfest.com">link</a>)</li>
			   						<li>Terrence (Swifdemon) Smith - Autor/Programmierung</li>
			    					<li>Cherisse (Null Dizzy) Smith - Bearbeitung</li>
			    					<li>Kristian (CombatPlayer) Jensen - Musik</li>
			    					<li>Anton (Guy-kun) Prydatko - iOS Programmierung</li>
			    				</ul>
							</div>'
));

?>
