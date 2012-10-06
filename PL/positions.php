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
	'positions'			=> 'Stanowiska',
	'positionsPara'		=> 'Chociaż Dischan jest zawsze zainteresowany potencjalnym talentem jakiegokolwiek typu, w naszym teamie są pewne
							dziury, które chcemy szczególnie wypełnić. Pamiętaj jednak, że tymczasowo poniższe pozycje to praca ochotnicza. Jednakże jeśli
							jakiekolwiek pieniądze będą zyskane dzięki Twojej pracy, będziesz odpowiednio zrekompensowany, zwykle poprzez procent ze wspomnianych dochodów.',
	'graphicDesigner'	=> 'Projektant Graficzny',
	'graphicDesignPara'	=> '<p>Dischan szuka grafika do zadań takich jak:</p>
							<ul>
								<li>Wymyślanie symbolów dla fikcyjnych lokacji (loga, sygnatury, znaki, itp.)</li>
								<li>Projektowanie stron internetowych</li>
								<li>Projektowanie interfejsu użytkownika</li>
							</ul>
							<p>Jeśli uważasz, że potrafisz sprostać któremukolwiek z wyżej wymienionych zadań, wówczas z chęcią chcielibyśmy z tobą współpracować.
							Kandydaci muszą dołączyć link do swojego portfolio w celu weryfikacji. Im więcej prac tym lepiej,
							niemniej jednak śmiało wyróżnij swoje najlepsze prace, z których jesteś szczególnie dumny.
							<br/><br/>
							<a href = "apply.php?position=gd"><b>Złóż podanie</b></a></p>',
	'artist'			=> 'Artysta',
	'artistPara'		=> '<p>Dischan szuka artysty do pomocy przy rysowaniu concept artów, sprite\'ów i teł. Umiejętności jakich poszukujemy::
							<ul>
								<li>Biegłość w obsłudze Photoshopa</li>
								<li>Doświadczenie w tworzeniu i modyfikowaniu grafiki cyfrowej</li>
							</ul>
							Kandydaci powinni dołączyć portfolio z ostatnimi pracami jako załącznik lub link.
							<br/><br/>
							<a href = "apply.php?position=ar"><b>Złóż podanie</b></a></p>',
));

?>
