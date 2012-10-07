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
	'posts'				=> 'Berichten',
	'projects'				=> 'Projects',
	'disMAEPara'		=> '<p>DisMAE, of "Dischan Mobile Animation Engine", is een zelfgebouwde visual novel-engine voor iOS, gemaakt met het <a href = "http://www.cocos2d-iphone.org/" target="_blank">Cocos2D-framework</a>.</p>
							<br />
							<p>DisMAE is vooral handig doordat het veel <a href = "http://www.renpy.org/" target="_blank">Ren\'Py</a>-commando\'s direct uit kan voeren, wat het omzetten van Ren\'Py-spellen naar iOS aanzienlijk vereenvoudigd.</p>
							<br />
							<p>Op dit moment is de engine alleen voor intern gebruik, maar licentieafname zal wellicht in de toekomst mogelijk worden.</p>',
	'juniperPara'	=> '<p>Juniper\'s Knot is een gratis korte visual novel gemaakt door Dischan voor NaNoReNo 2012. NaNoReNo is een jaarlijkse uitdaging om een visual novel in de periode van de maand maart te maken.</p>
						<br />
						<p>Juniper\'s Knot is een verhaal over de plotse ontmoeting van een jongeman met een demon. Je kunt het <a href = "http://junipersknot.dischan.org/">hier</a> downloaden; het is beschikbaar voor Windows, Mac, Linux, en iOS. Hieronder wat promotiemateriaal.</p>',
	'cradlePara'			=> '<p>Cradle Song is een visual novel waar Dischan aan het werken is sinds haar oprichting in 2009.</p>
							<br />
							<p>Een kort <a href = "http://cradle-song.com/story.php">verhaaloverzicht</a> kan gevonden worden op de <a href = "http://cradle-song.com/">offici&euml;le Cradle Song-website</a>,
                            samen met <a href = "http://cradle-song.com/characters.php">personagebeschrijvingen</a> van personen in het spel, allen in het Engels.</p>
							<br />
							<p>In 2011 hebben we een \'preview\' uitgebracht, die je kunt vinden op de <a href = "http://cradle-song.com/download.php">downloadpagina</a> om zelf te proberen. Hieronder vind je een korte trailer voor de preview.</p>',
	'projectsPara'		=> '<p>Op dit moment is Dischan\'s hoofdproject een visual novel genaamd "Cradle Song". Kijk op de <a href = "projects.php?p=1">Cradle Song-pagina</a> om meer over het project te weten te komen.</p>
							<br />
							<p>Dischan heeft ook een korte visual novel gemaakt voor NaNoReNo 2012, genaamd "Juniper\'s Knot". Kijk op de <a href = "projects.php?p=2">Juniper\'s Knot-pagina</a> om daar meer te weten over tekomen.</p>',
));

?>