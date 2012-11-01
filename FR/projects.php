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
	'cradlePara'			=> '<p>Cradle Song est un Visual Novel sur lequel Dischan travaille depuis sa création en 2009.</p>
							<br />
							<p>Le <a href = "http://cradle-song.com/story.php">Synopsis de l\'histoire</a> est disponible sur le <a href = "http://cradle-song.com/">Site Officiel de Cradle Song</a>, tout comme la <a href = "http://cradle-song.com/characters.php">description de
							quelques personnages</a> issus du jeu.</p>
							<br />
							<p>En 2011, nous avons sorti une version Preview (apperçu du jeu) que vous pouvez <a href = "http://cradle-song.com/download.php">télécharger</a> et essayer. Vous trouverez le trailer de la version preview ci-dessous.</p>',
	'projectsPara'		=> '<p>Actuellement, Dischan se concentre autour de son projet principal intitulé "Cradle Song". Veuillez visiter la <a href = "projects.php?p=1">page de Cradle Song</a> pour en apprendre plus sur ce Visual Novel.</p>
							<br />
							<p>Dischan a aussi créé un court Visual Novel intitulé "Juniper\'s Knot" lors du NaNoReNo 2012. Veuillez visiter la <a href = "projects.php?p=2">page de Juniper\'s Knot</a> pour en apprendre davantage.</p>',
));

?>