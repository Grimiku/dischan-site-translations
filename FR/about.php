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
	'aboutFirstPara'	=> '<h1>Qui sommes-nous ?</h1>
							<hr />
							<div class = "leftContentText">
								<p>Dischan Media is an international development studio focused on creating art, music, literature, and design to the utmost of excellence. It was founded by Jeremy Miller in the summer of 2009 in an effort to produce a collaborative, high-quality visual novel for the western market.</p>
								<br />
								<p>Since then, it has grown both in personnel and in purpose. Dischan now consists of several talented individuals with the common vision of providing beautiful experiences to everyone, everywhere.</p>
							</div>',
	'aboutSecondPara'	=> '<h1>Développeurs</h1>
							<hr />
							<div class = "leftContentText">
								<p>Membres de l\'équipe actuelle :</p>
								<ul>
			    					<li>Jeremy (Dani) Miller - Auteur/Programmeur/Chef de Projet (<a href = "http://jeremyrmiller.com">site</a>)</li>
			    					<li>Saimon (Doomfest) Ma - Directeur Artistique (<a href = "http://doomfest.com">site</a>)</li>
			   						<li>Terrence (Swifdemon) Smith - Auteur/Programmeur</li>
			    					<li>Cherisse (Null Dizzy) Smith - Éditeur</li>
			    					<li>Kristian (CombatPlayer) Jensen - Musicien</li>
			    					<li>Anton (Guy-kun) Prydatko - Programmeur iOS</li>
			    				</ul>
							</div>'
));

?>