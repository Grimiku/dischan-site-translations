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
	'apply'				=> 'Podanie',
	'applyText'			=> 'Dischan nigdy nie zamyka swoich drzwi dla potencjalnych talentów. Jeśli uważasz, że posiadasz odpowiednie umiejętności do pracy z nami, prosimy o wypełnienie poniższego formularza. Pamiętaj, aby wypełnić wszystkie pola oznaczone gwiazdką! <br /><br /> Jeśli chcesz zobaczyć na jakie stanowiska jesteśmy szczególnie otwarci, odwiedź stronę <a href = "positions.php">stanowiska</a>.',
	'yourName'			=> 'Twoje Imię',
	'yourEmail'			=> 'Twój Email',
	'doubleCheck'		=> 'Sprawdź dokładnie!',
	'position'			=> 'Stanowisko',
	'graphicDesigner'	=> 'Projektant Graficzny',
	'artist'			=> 'Artysta',
	'yourSkills'		=> 'Twoje Umiejętności',
	'aboutYou'			=> 'Opowiedz nam trochę o sobie',
	'extra'				=> 'Jeszcze coś, o czym powinniśmy wiedzieć?',
));

?>