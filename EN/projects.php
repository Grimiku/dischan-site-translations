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
	'posts'				=> 'Posts',
	'projects'				=> 'Projects',
	'disMAEPara'		=> '<p>DisMAE, or Dischan Mobile Animation Engine, is a custom visual novel engine for iOS built using the <a href = "http://www.cocos2d-iphone.org/" target="_blank">Cocos2D framework</a>.</p>
							<br />
							<p>DisMAE is particularly useful in it\'s ability to recognise many <a href = "http://www.renpy.org/" target="_blank">ren\'py</a> script commands directly, simplifying the process of porting ren\'py games to iOS significantly.</p>
							<br />
							<p>Currently, the engine is for in-house use only, however may be released for licensing in the future.</p>',
	'juniperPara'	=> '<p>Juniper\'s Knot is a short and free visual novel created by Dischan for NaNoReNo 2012 (NaNoReNo is a yearly challenge to create a visual novel in the month of March).</p>
						<br />
						<p>It is a story about the meeting of a boy and a demon. You can download it <a href = "http://junipersknot.dischan.org/">here</a> for Windows, Mac, Linux, and iOS. Below is some promotional material for the game.</p>',
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