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
	'frequentlyAskedQ'	=> 'Domande frequenti',
	'freqPara'				=> '<p>
								<a href = "#release">Quando sarà rilasciato Cradle Song?</a><br />
								<a href = "#commercial">Cradle Song sarà un gioco commerciale?</a><br />
								<a href = "#mature">In Cradle Song saranno presenti contenuti adatti solo ad un pubblico adulto?</a><br />
								<a href = "#join">Posso entrare a far parte di Dischan?</a><br />
								<a href = "#translate">Posso tradurre un prodotto o il sito web di Dischan?</a><br />
								<a href = "#problems">Ho qualche problema con un prodotto o il sito web di Dischan, cossa posso fare?</a><br />
								<a href = "#language">Perchè devo selezionare una lingua nel mio account?</a><br />
								<a href = "#languageMissing">La lingua che vorrei impostare non è presente nella lista di lingue disponibili, come mai?</a><br />
								<a href = "#languageErrors">Ho notato un errore di battitura/traduzione incorretta/errore grammaticale in un prodotto o nel sito web di Dischan, cosa posso fare?</a>
							</p>
							<br />
							<br />
							<p id = "release"><b>Quando sarà rilasciato Cradle Song?</b></p>
							<p>Ancora non abbiamo una data di rilascio precisa per Cradle Song, ma contiamo di rilasciare una demo nel 2012, e il gioco completo, sempre che vada tutto bene, l\'anno dopo.</p>
							<br />
							<p id = "commercial"><b>Cradle Song sarà un gioco commerciale?</b></p>
							<p>Sì. Tuttavia, preferiremmo che ci giocasse un sacco di gente piuttosto che fare un sacco di soldi, quindi non sarà affatto costoso. Di sicuro il prezzo sarà al di sotto di $10 USD.</p>
							<br />
							<p id = "mature"><b>In Cradle Song saranno presenti contenuti adatti solo ad un pubblico adulto?</b></p>
							<p>Sì, in Cradle Song ci sarà violenza, gore, turpiloquio, e contenuti sessualmenti espliciti in alcune route. Gli utenti dovrebbero avere almeno 17 anni per giocare.</p>
							<br />
							<p id = "join"><b>Posso entrare a far parte di Dischan?</b></p>
							<p>E\' disponibile un modulo di richiesta online <a href = "apply.php">qui</a>.</p>
							<br />
							<pid = "translate"><b>Posso tradurre un prodotto o il sito web di Dischan?</b></p>
							<p>Certamente, tuttavia lavorare con i traduttori per ottenere una buona traduzione può essere difficile e faticoso, perciò avremmo bisogno che tu completi un test di traduzione prima di contattarci.
							Lo puoi trovare <a href = "internationalization.php">qui</a>.</p>
							<br />
							<p id = "problems"><b>Ho qualche problema con un prodotto o il sito web di Dischan, cosa posso fare?</b></p>
							<p>Puoi visitare la nostra pagina di <a href = "support.php">supporto</a>.</p>
							<br />
							<p id = "language"><b>Perché devo selezionare una lingua nel mio account?</b></p>
							<p>Utilizzeremo la lingua da te selezionata per:</p>
							<ol>
								<li>Fare in modo che il negozio organizzi i download per giochi o altri prodotti mettendo automaticamente per prima la tua lingua, se una traduzione è disponibile (altrimenti sarà visualizzato per primo "inglese", e le altre lingue seguiranno in ordine alfabetico).</li>
								<li>Visualizzare gli elementi del sito nella tua lingua, se una traduzione è disponibile.</li>
								<li>Consegnarti newsletter e mail di notifica nella tua lingua, se una traduzione è disponibile.</li>
							</ol>
							<p id = "languageMissing"><b>La lingua che vorrei impostare non è presente nella lista di lingue disponibili, come mai?</b></p>
							<p>Probabilmente perché ancora non possediamo una traduzione nella tua lingua, perciò un opzione simile sarebbe piuttosto inutile. Se parli fluentemente l\'inglese e la lingua che avresti voluto impostare, e ti piacerebbe darci una mano a tradurre un prodotto o il sito in quella lingua,
							puoi fare un salto alla pagina <a href = "internationalization.php">internazionalizzazione e traduzioni</a>.</p>
							<br />
							<p id = "languageErrors"><b>Ho notato un errore di battitura/traduzione incorretta/errore grammaticale in un prodotto o nel sito web di Dischan, cosa posso fare?</b></p>
							<p>Puoi <a href = "contact.php">contattarci per riportare questo errore</a>. Cercheremo di correggerlo il prima possibile.</p>',
));

?>