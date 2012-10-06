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
	'internationalTrans'=> 'Tłumaczenia i Internacjonalizacja',
	'internationalPara'	=> '<p>Dischan próbuje być tak międzynarodowy, na ile to możliwe oraz dzielić się naszymi produktami w tak wielu językach, jak tylko możemy. W tym celu potrzebujemy pomocy od ciebie.
							Jeśli pewnie operujesz wieloma językami i zauważysz brakującą wersję językową, proszę się z nami <a href = "contact.php">skontaktować</a>. Będziemy wdzięczni za wsparcie w tłumaczeniu naszych stron
							lub naszych produktów.</p>
							<br />
							<p>W celu sprawdzenia twoich predyspozycji stworzyliśmy pewien rodzaj <a href="files/translatorspack.zip">testu</a>, który obejmuje różne
								części scenariusza z fragmentu Cradle Song do przetłumaczenia. Prosimy o jego wypełnienie przed wysłaniem do nas wiadomości.</p>',
	'qualityControl'	=> 'Kontrola Jakości',
	'qualityControlPara'=> '<p>Choć staramy się jak najlepiej, Dischan może zagwarantować wysoką jakość jedynie oryginalnej angielskiej pisowni i zawartości stron. Jeśli zauważysz jakieś literówki, błędy ortograficzne lub błędy w tłumaczeniu, proszę
							dać znać <a href = "contact.php">kontaktując się z nami</a>.</p>',
));

?>
