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
	'support'				=> 'Support',
	'supportPara'			=> '<p>Having trouble with a dischan product or service? If so, please check out the <a href = "http://www.dischan.org/forum/viewforum.php?c=3&f=8">support section of our forum</a>. If your
								problem is not listed there, please feel free to start a new thread for it. Screenshots are appreciated.</p>
								<br />
								<p>For problems of a more sensitive nature, such as security issues, problems with your account, or store purchases, please use our <a href = "contact.php">contact form</a>.</p>',
));

?>