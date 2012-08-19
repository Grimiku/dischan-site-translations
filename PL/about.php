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
	'aboutFirstPara'	=> '<h1>Kim jesteśmy?</h1>
							<hr />
							<div class = "leftContentText">
								<p>Dischan Media to międzynarodowe studio koncentrujące się na tworzeniu sztuki, muzyki, literatury i designu w najwyższym stopniu doskonałości. Założone przez Jeremiego Millera w lecie 2009 roku w wyniku starań w celu stworzenia kolaboracyjnej, wysokiej jakości visual novel na rynek zachodni.</p>
								<br />
								<p>Od tamtej pory rozrósł się zarówno w przeznaczeniu jak i personelu. Dischan składa się teraz z kilku utalentowanych osób o wspólnej wizji zapewnienia pięknych przeżyć dla wszystkich, wszędzie.</p>
							</div>',
	'aboutSecondPara'	=> '<h1>Twórcy</h1>
							<hr />
							<div class = "leftContentText">
								<p>Obecny trzon zespołu tworzą:</p>
								<ul>
			    					<li>Jeremy (Dani) Miller - Autor/Programista/Kierownik Projektu (<a href = "http://jeremyrmiller.com">strona</a>)</li>
			    					<li>Saimon (Doomfest) Ma - Dyrektor Artystyczny (<a href = "http://doomfest.com">strona</a>)</li>
			   						<li>Terrence (Swifdemon) Smith - Autor/Programista</li>
			    					<li>Cherisse (Null Dizzy) Smith - Edytor</li>
			    					<li>Kristian (CombatPlayer) Jensen - Muzyk</li>
			    					<li>Anton (Guy-kun) Prydatko - Programista iOS</li>
			    				</ul>
							</div>'
));

?>