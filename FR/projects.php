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
	'posts'				=> 'Messages',
	'projects'				=> 'Projets',
	'disMAEPara'		=> '<p>DisMAE, or Dischan Mobile Animation Engine, is a custom visual novel engine for iOS built using the <a href = "http://www.cocos2d-iphone.org/" target="_blank">Cocos2D framework</a>.</p>
							<br />
							<p>DisMAE is particularly useful in it\'s ability to recognise many <a href = "http://www.renpy.org/" target="_blank">ren\'py</a> script commands directly, simplifying the process of porting ren\'py games to iOS significantly.</p>
							<br />
							<p>Currently, the engine is for in-house use only, however may be released for licensing in the future.</p>',
	'juniperPara'	=> '<p>Juniper\'s Knot est un Visual Novel court et gratuit crée par Dischan lors du NaNoReNo 2012 (Le  NaNoReNo est une compétition annuelle dans laquelle les participants doivent créer un visual novel au court du mois de mars).</p>
						<br />
						<p>L\'histoire relate la rencontre entre un garçon et un démon. Vous pouvez télécharger les versions Windows, Mac, Linux et iOS du jeu <a href = "http://junipersknot.dischan.org/">ici</a>. Le matériel de promotion du jeu est disponible ci-dessous.</p>',
	'cradlePara'			=> '<p>Cradle Song is a visual novel Dischan has been working on since its inception in 2009.</p>
							<br />
							<p>A <a href = "http://cradle-song.com/story.php">synopsis of the story</a> is available on the <a href = "http://cradle-song.com/">official cradle song site</a>, as well as <a href = "http://cradle-song.com/characters.php">descriptions for
							some of the characters</a> from the game.</p>
							<br />
							<p>In 2011, we released a preview which you can <a href = "http://cradle-song.com/download.php">download</a> and try out for yourself. A trailer for the preview is below.</p>',
	'projectsPara'		=> '<p>Currently, Dischan\'s main project is a visual novel entitled "Cradle Song". Please visit the <a href = "projects.php?p=1">Cradle Song page</a> to learn more.</p>
							<br />
							<p>Dischan has also completed a short visual novel entitled "Juniper\'s Knot" for NaNoReNo 2012. Please visit the <a href = "projects.php?p=2">Juniper\'s Knot page</a> to learn more.</p>',
));

?>