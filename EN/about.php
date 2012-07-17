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
	'aboutFirstPara'	=> '<h1>Who are we?</h1>
							<hr />
							<div class = "leftContentText">
								<p>Dischan Media is an international development studio focused on creating art, music, literature, and design to the utmost of excellence. It was founded by Jeremy Miller in the summer of 2009 in an effort to produce a collaborative, high-quality visual novel for the western market.</p>
								<br />
								<p>Since then, it has grown both in personnel and in purpose. Dischan now consists of several talented individuals with the common vision of providing beautiful experiences to everyone, everywhere.</p>
							</div>',
	'aboutSecondPara'	=> '<h1>Developers</h1>
							<hr />
							<div class = "leftContentText">
								<p>Current core team members include:</p>
								<ul>
			    					<li>Jeremy (Dani) Miller - Writer/Programmer/Project Manager (<a href = "http://jeremyrmiller.com">site</a>)</li>
			    					<li>Saimon (Doomfest) Ma - Art Director (<a href = "http://doomfest.com">site</a>)</li>
			   						<li>Terrence (Swifdemon) Smith - Writer/Programmer</li>
			    					<li>Cherisse (Null Dizzy) Smith - Editor</li>
			    					<li>Kristian (CombatPlayer) Jensen - Musician</li>
			    					<li>Anton (Guy-kun) Prydatko - iOS Programmer</li>
			    				</ul>
							</div>'
));

?>