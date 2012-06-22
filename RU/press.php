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
	'press'				=> 'Press',
	'pressPara'				=> '<p>Are you doing a story on visual novels? Interested in writing about Dischan or its products? If you
							have any questions, or would like an interview with any member of the team, please send us a message via our <a href = "contact.php">contact form</a>.</p>
							<br />
							<p>There is also a <a href = "files/press_package.zip">press package</a> which you can download. It contains some graphics you can use, as well as cursory information about Dischan and its products.</p>',
));

?>