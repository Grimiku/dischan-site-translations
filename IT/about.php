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
	'aboutFirstPara'	=> '<h1>Chi siamo?</h1>
							<hr />
							<div class = "leftContentText">
								<p>Dischan Media è uno studio di sviluppo internazionale focalizzato nel creare arte, musica, letteratura, e design a livello di eccellenza. E\' stato fondato da Jeremy Miller nell\'estate del 2009 nell\'intento di realizzare una visual novel collaborativa e di alta qualità per il mercato occidentale.</p>
								<br />
								<p>Da allora, è cresciuto sia in personale che in aspirazioni. Dischan ora consiste di numerosi individui ricchi di talento che condividono il comune obiettivo di fornire a tutti, in qualsiasi luogo, esperienze bellissime e suggestive.</p>
							</div>',
	'aboutSecondPara'	=> '<h1>Sviluppatori</h1>
							<hr />
							<div class = "leftContentText">
								<p>I membri attuali del team di sviluppo centrale sono:</p>
								<ul>
			    					<li>Jeremy (Dani) Miller - Scrittore/Programmatore/Manager del Progetto (<a href = "http://jeremyrmiller.com">site</a>)</li>
			    					<li>Saimon (Doomfest) Ma - Direttore Artistico (<a href = "http://doomfest.com">site</a>)</li>
			   						<li>Terrence (Swifdemon) Smith - Scrittore/Programmatore</li>
			    					<li>Cherisse (Null Dizzy) Smith - Editor</li>
			    					<li>Kristian (CombatPlayer) Jensen - Musicista</li>
			    					<li>Anton (Guy-kun) Prydatko - Programmatore iOS</li>
			    				</ul>
							</div>'
));

?>