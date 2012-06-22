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
	'internationalTrans'=> 'Internationalization and Translations',
	'internationalPara'	=> '<p>Dischan tries to be as international as possible, and to share our products in as many languages as we can. In order to do this, we need help from you.
							If you are confidently multilingual, and notice a language being neglected, please <a href = "contact.php">contact us</a>. We\'d love your help in translating our sites,
							or our products.</p>
							<br />
							<p>In order to ensure your aptitude, we do ask that you complete our <a href="files/translatorspack.zip">translation test</a>, which involves translating various
								sections of script from the Cradle Song preview. We will ask you for it after you contact us, so please complete it before doing so.</p>',
	'qualityControl'	=> 'Quality Control',
	'qualityControlPara'=> '<p>Although we try our best, Dischan can only guarantee the quality of original English script and web site content. If you notice any typos, grammatical errors, or mistranslations, please
							<a href = "contact.php">contact us</a> and let us know.</p>',
));

?>