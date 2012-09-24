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
	'frequentlyAskedQ'	=> 'Najczęściej Zadawane Pytania',
	'freqPara'				=> '<p>
								<a href = "#release">Kiedy Cradle Song zostanie wydany?</a><br />
								<a href = "#commercial">Czy Cradle Song będzie grą komercyjną?</a><br />
								<a href = "#mature">Czy Cradle Song zawiera treści dla dorosłych?</a><br />
								<a href = "#join">Mogę dołączyć do zespołu Dischana?</a><br />
								<a href = "#translate">Czy mogę przetłumaczyć produkty Dischana lub stronę internetową?</a><br />
								<a href = "#problems">Mam problem z produktem Dischana lub ze stroną internetową, co powinienem zrobić?</a><br />
								<a href = "#language">Do czego służy ustawienie języka na moim koncie?</a><br />
								<a href = "#languageMissing">Mój preferowany język nie jest dostępny w opcjach wyboru języka, dlaczego?</a><br />
								<a href = "#languageErrors">Zauważyłem literówkę/błąd w tłumaczeniu/błąd gramatyczny w produkcie Dischana lub na stronie internetowej, co powinienem zrobić?</a>
							</p>
							<br />
							<br />
							<p id = "release"><b>Kiedy Cradle Song zostanie wydany?</b></p>
							<p>Nie ma wyznaczonej daty premiery Cradle Song\'a, ale postaramy się wydać demo w 2012 roku i miejmy nadzieję, pełną wersję gry rok później.</p>
							<br />
							<p id = "commercial"><b>Czy Cradle Song będzie grą komercyjną?</b></p>
							<p>Tak. Jednak bardziej zależy nam na graczach niż na zarabianiu pieniędzy, dlatego nie będzie drogi. Zdecydowanie poniżej $10 USD.</p>
							<br />
							<p id = "mature"><b>Czy Cradle Song zawiera treści dla dorosłych?</b></p>
							<p>Tak, Cradle Song zawiera przemoc, rozlew krwi, wulgaryzmy, i treści erotyczne w niektórych wątkach. Gracze powinni mieć ukończone 17 lat.</p>
							<br />
							<p id = "join"><b>Mogę dołączyć do zespołu Dischana?</b></p>
							<p>Możesz złożyć formularz aplikacyjny <a href = "apply.php">tutaj</a>.</p>
							<br />
							<pid = "translate"><b>Czy mogę przetłumaczyć produkty Dischana lub stronę internetową?</b></p>
							<p>Tak, jednak praca z tłumaczami przy tworzeniu dobrego przekładu może być trudna i czasochłonna, dlatego prosimy o wypełnienie testu przed kontaktowaniem się z nami.
							Znajdziesz go <a href = "internationalization.php">tutaj</a>.</p>
							<br />
							<p id = "problems"><b>Mam problem z produktem Dischana lub ze stroną internetową, co powinienem zrobić?</b></p>
							<p>Proszę odwiedzić stronę <a href = "support.php">obsługi</a>.</p>
							<br />
							<p id = "language"><b>Do czego służy ustawienie języka na moim koncie?</b></p>
							<p>Używamy ustawień języka dla następujących celów:</p>
							<ol>
								<li>W Sklepie pozwala na wyświetlanie plików do pobrania oraz innych produktów w twoim języku jako pierwsze, o ile tłumaczenie jest dostępne (w przeciwnym razie angielski jest wymieniony jako pierwszy, a pozostałe języki w kolejności alfabetycznej).</li>
								<li>Wyświetlanie elementów strony w twoim języku, o ile tłumaczenie jest dostępne.</li>
								<li>Dostarczanie newsletterów i powiadomień w twoim języku, o ile tłumaczenie jest dostępne.</li>
							</ol>
							<p id = "languageMissing"><b>Mój preferowany język nie jest dostępny w opcjach wyboru języka, dlaczego?</b></p>
							<p>Najprawdopodobniej dlatego, że nie mamy tłumaczenia na twój wybrany język, więc taka opcja nie dałaby żadnego efektu. Jeśli biegle posługujesz się angielskim oraz swoim preferowanym językiem i chciałbyś pomóc przy translacji produktów firmy lub stron na twój język,
							proszę odwiedzić stronę <a href = "internationalization.php">Tłumaczenia i Internacjonalizacja</a>.</p>
							<br />
							<p id = "languageErrors"><b>Zauważyłem literówkę/błąd w tłumaczeniu/błąd gramatyczny w produkcie Dischana lub na stronie internetowej, co powinienem zrobić?</b></p>
							<p>Proszę <a href = "contact.php">zgłosić nam ten błąd</a>. Postaramy się to naprawić.</p>',
));

?>