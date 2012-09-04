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
	'support'				=> 'Wsparcie',
	'supportPara'			=> '<p>Masz problemy z produktami Dischana lub serwisem? Jeśli tak, proszę odwiedzić <a href = "http://www.dischan.org/forum/viewforum.php?c=3&f=8">sekcję wsparcia na naszym forum</a>. Jeżeli 
						szukane przez ciebie zagadnienie nie zostało jeszcze poruszone, rozpocznij nowy wątek. Zrzuty ekranu mile widziane!</p>
								<br />
								<p>W przypadku problemów o bardziej wrażliwym charakterze, takich jak kwestie bezpieczeńtwa, kłopoty z kontem lub zakupy w sklepie, użyj naszego <a href = "contact.php">formularza kontaktowego</a>.</p>',
));

?>