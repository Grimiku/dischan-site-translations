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
	'apply'				=> 'Postuler',
	'applyText'			=> 'Dischan never closes its doors to potential talent. If you think you have what it takes to work with us, please fill out the form below. Be sure to complete all the fields with stars, or it won\'t submit! <br /><br /> If you would like to view what positions we are particularly open to, please visit the <a href = "positions.php">positions</a> page.',
	'yourName'			=> 'Votre Nom',
	'yourEmail'			=> 'Votre E-mail',
	'doubleCheck'		=> 'Vérifiez bien !',
	'position'			=> 'Poste',
	'graphicDesigner'	=> 'Designer Graphiste',
	'artist'			=> 'Artiste',
	'yourSkills'		=> 'Vos Compétences',
	'aboutYou'			=> 'Dites-nous en plus sur vous',
	'extra'				=> 'Autre chose que vous jugez utile de préciser ?',
));

?>