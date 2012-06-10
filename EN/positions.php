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
	'positions'			=> 'Positions',
	'positionsPara'		=> 'Although Dischan is always interested in potential talent of any kind, below are some of the
							openings which we would particularly like to fill. Please note that at this time these positions
							are volunteer. However, if any money is made from your work, you will be compensated appropriately, usually
							through a percentage of the revenue in question.',
	'graphicDesigner'	=> 'Graphic Designer',
	'graphicDesignPara'	=> '<p>Dischan is looking for a graphic designer for tasks such as:</p>
							<ul>
								<li>Brainstorming designs for fictional worlds (logos, signage, seals, etc)</li>
								<li>Web design</li>
								<li>User interface design</li>
							</ul>
							<p>If you believe you can perform any of the tasks listed above, then we would love to work with you.
							Applicants must include a link to their portfolio to be reviewed. The more works the better,
							however feel free to point out the works of which you are particularly proud.
							<br/><br/>
							<a href = "apply.php?position=gd"><b>Apply</b></a></p>',
	'artist'			=> 'Artist',
	'artistPara'		=> '<p>Dischan is looking for artists to help draw concept art, sprites, and backgrounds. Some of the skills we are looking for are:
							<ul>
								<li>Proficiency in Photoshop</li>
								<li>Experience with creating and modifying digital art</li>
							</ul>
							Applicants should include a portfolio of recent work either as an attachment, or as a link.
							<br/><br/>
							<a href = "apply.php?position=ar"><b>Apply</b></a></p>',
));

?>