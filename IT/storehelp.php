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
	'storeHelp'				=> 'Assistenza - negozio',
	'sotreHelpPara'				=> 'Sei hai qualche problema o domanda riguardanti il negozio di Dischan, prova a dare un\'occhiata alle domande frequenti che abbiamo elencato qua sotto. Se questo non ti aiuta a risolvere il tuo problema, allora ti invitiamo a <a href = "contact.php">contattarci</a>, includendo nel tuo messaggio tutte le informazioni che pensi possano essere rilevanti. Cercheremo di risponderti il prima possibile.',
	'storeFAQ'		=> 'Domande frequenti sul negozio',
	'storeFAQPara'	=> '<p><b>Il negozio di Dischan permette l\'acquisto di regali?</b></p>
							<p>Certamente! Puoi regalare un nostro prodotto ad un altro utente di Dischan, o indicando un indirizzo email come destinatario. Per farlo, basta andare sulla pagina del prodotto e cliccare "regala".</p>
							<br />
							<p><b>Dischan consente acquisti internazionali?</b></p>
							<p>Certo! Usiamo PayPal come processore di pagamento, e tutto quello che loro accettano, lo accettiamo anche noi. Tuttavia, se hai intenzione di acquistare prodotti "fisici" che richiedono di essere spediti, è meglio se ci contatti prima se vivi al di fuori degli Stati Uniti o del Canada.</p>
							<br />
							<p><b>Come funziona l\'acquisto digitale dei vostri prodotti?</b></p>
							<p>Se acquisti un prodotto con il tuo account Dischan, sarà aggiunto alla tua libreria e potrai scaricarlo in qualsiasi momento. Se non usi un account, allora un serial per il tuo prodotto sarà inviato alla mail del tuo PayPal. Puoi usare questo serial insieme al tuo indirizzo email di PayPal per scaricare il prodotto che hai appena acquistato.</p>
							<br />
							<p><b>Non ho ricevuto nessuna email dopo il mio acquisto, che posso fare?</b></p>
							<p>Prova ad attendere almeno 30 minuti dopo il tuo acquisto, e assicurati di controllare anche la cartella "spam" e il cestino della tua mail. Se ancora non arriva, <a href = "contact.php">contattaci</a> includendo nel tuo messaggio l\'ID della tua transizione PayPal o il numero della ricevuta e l\'username o l\'indirizzo email che hai utilizzato per l\'acquisto. Cercheremo di risolvere il problema il prima possibile.</p>',
));

?>