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
	'forumRules'		=> 'Forum rules',
	'forumRulesPara'	=> '<p>Posting any of the below can result in a temporary or permanent ban from the forums:</p> 
							<ul>
								<li>Illegal content as determined by Canadian and/or United States law</li>
								<li>Pornography</li>
								<li>Excessive profanity</li>
								<li>Advertising and/or spam</li>
							</ul>
							<p>Moderators may also ban users of their own discretion, if you believe you have been falsely or unfairly banned, please <a href = "contact.php">contact us</a>.</p>',
	'forumUse'		=> 'Using the forum',
	'forumUsePara'	=> '<p>There are some tags that allow you to format your posts on the forum. They are as follows:</p>
							<ul>
								<li>Strikethrough - Use: [s]strikethrough text[/s] - Example: <s>strikethrough text</s></li>
								<li>Bold - Use: [b]bold text[/b] - Example: <b>bold text</b></li>
								<li>Italics - Use: [i]italicised text[/i] - Example: <i>italicised</i></li>
								<li>Spoilers - Use: [spoiler]spoiler[/spoiler] - Example: <p class = "spoiler">spoiler</p><s></s></li>
							</ul>
							<p>Some notes:</p>
							<ul>
								<li>Links automatically linkify</li>
								<li>Hovering over an image will show the original image\'s filename</li>
							</ul>',
));

?>