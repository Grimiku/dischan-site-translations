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
	'posts'				=> 'Posty',
	'projects'				=> 'Projekty',
	'disMAEPara'		=> '<p>DisMAE, lub Dischan Mobile Animation Engine to własny silnik visual novel dla systemu iOS zbudowany w oparciu o <a href = "http://www.cocos2d-iphone.org/" target="_blank">Cocos2D framework</a>.</p>
							<br />
							<p>DisMAE jest szczególnie użyteczny w swojej zdolności do bezpośredniego rozpoznawania wielu poleceń skryptów <a href = "http://www.renpy.org/" target="_blank">silnika ren\'py</a>, znacznie upraszczając proces przenoszenia gier ren\'py na iOS.</p>
							<br />
							<p>Aktualnie silnik jest tylko do użytku domowego, jednakże w przyszłości może być wydawany na licencje.</p>',
	'juniperPara'	=> '<p>Juniper\'s Knot to krótka i darmowa gra visual novel stworzona przez Dischana dla NaNoReNo 2012 (NaNoReNo to coroczne wyzwanie na stworzenie visual novel w ciągu jednego miesiąca - marca).</p>
						<br />
						<p>Jest to opowieść o spotkaniu chłopca i demona. Możesz pobrać ją <a href = "http://junipersknot.dischan.org/">tutaj</a> na systemy Windows, Mac, Linux oraz iOS. Poniżej znajdują się materiały promocyjne gry.</p>',
	'cradlePara'			=> '<p>Cradle Song jest to visual novel nad którą Dischan pracuje od czasu swojego powstania w 2009 roku.</p>
							<br />
							<p><a href = "http://cradle-song.com/story.php">Streszczenie historii</a> jest dostępne <a href = "http://cradle-song.com/">na oficjalnej stronie Cradle Song</a>, zarówno jak <a href = "http://cradle-song.com/characters.php">opisy
							niektórych postaci</a> z gry.</p>
							<br />
							<p>W 2011 roku wydaliśmy poglądowy fragment gry, który możesz <a href = "http://cradle-song.com/download.php">pobrać</a> i sprawdzić samemu. Trailer znajduje się poniżej.</p>',
	'projectsPara'		=> '<p>Obecnie głównym projektem Dischana jest visual novel zatytułowana "Cradle Song". Odwiedź <a href = "projects.php?p=1">stronę Cradle Song</a> aby dowiedzieć się więcej.</p>
							<br />
							<p>Dischan również stworzył krótką visual novel zatytułowaną "Juniper\'s Knot" dla NaNoReNo 2012. Odwiedź <a href = "projects.php?p=2">stronę Juniper\'s Knot</a> aby dowiedzieć się więcej.</p>',
));

?>