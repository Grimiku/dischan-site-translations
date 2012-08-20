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
	'pressPara'				=> '<p>Robisz artykuł o grach z gatunku visual novel? Jesteś zainteresowany o pisaniu na temat Dischana lub jego produkcjach? Jeśli masz jakieś pytania lub chciałbyś przeprowadzić wywiad z dowolnym członkiem zespołu, wyślij do nas wiadomość za pośrednictwem <a href = "contact.php">formularza kontaktowego</a>.</p>
							<br />
							<p>Możesz tu również pobrać <a href = "files/press_package.zip">materiały promocyjne</a>. Zawierają grafiki, które możesz użyć, jak i podstawowe informacje o Dischanie i jego produkcjach.</p>',
));

?>