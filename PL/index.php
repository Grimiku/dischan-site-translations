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
	'latestBlog'		=> 'Latest Blogposts',
	'visitBlog'			=> 'visit the blog',
	'readTheRest'		=> 'Read the rest of this post',
	'featuredDL'		=> 'Featured Download',
	'featuredDLTitle'	=> 'Juniper\'s Knot',
	'featuredDLText'	=> 'Download Juniper\'s Knot here: <a href = "http://junipersknot.dischan.org/">official site</a>.',
));

?>