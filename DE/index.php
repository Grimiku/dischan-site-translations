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
	'latestBlog'		=> 'Neueste Blogposts',
	'visitBlog'			=> 'zum Blog',
	'readTheRest'		=> 'Vollständiger Post',
	'featuredDL'		=> 'Ausgewählte Downloads',
	'featuredDLTitle'	=> 'Juniper\'s Knot',
	'featuredDLText'	=> 'Downloade Juniper\'s Knot hier: <a href = "http://junipersknot.dischan.org/">offizielle Seite</a>.',
));

?>
