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
	'details'				=> 'dettagli',
	'confirmation'				=> 'conferma',
	'payment'	=> 'pagamento',
	'finish'		=> 'finisci',
	'thankYouExcl'		=> 'Grazie!',
	'youreAwesome'		=> 'Sei <i>un grande</i>.',
	'loggedInPurchaseConf'	=> 'Una ricevuta è stata inviata all\'email associata al tuo account Dischan. Tutti i prodotti digitali saranno disponibili nella tua <a href = "library.php">libreria</a> appena la transizione sarà completata.<br /><br />
							E\' un piacere fare affari con te! E se hai qualche problema, non esitare a <a href = "http://dischan.org/contact.php">contattarci</a>.',
	'guestPurchaseConf'		=> 'Una ricevuta è stata inviata all\'email associata al tuo account PayPal, con incluso il serial e il link per il download nel caso tu abbia acquistato un prodotto digitale.<br /><br />
							E\' un piacere fare affari con te! E se hai qualche problema, non esitare a <a href = "http://dischan.org/contact.php">contattarci</a>.',
	'returnToStore'		=> 'ritorna al negozio',
	'comfirmationUppr'		=> 'Conferma',
	'shippingHandlingCost'		=> 'spese di spedizione e trasporto',
	'total'		=> 'Totale',
	'reviewOrder'		=> 'Controlla accuratamente il tuo ordine prima di procedere.',
	'dischanCartPaypal'		=> 'Il tuo acquisto sarà visualizzato su PayPal come \'Carrello Dischan (Dischan Cart)\'.',
	'purchaseTOS'		=> 'Nota: acquistando un prodotto 
									nel negozio di Dischan, accetti i nostri <a target="_blank" href = "../termsandconditions.php">termini di servizio</a> e la nostra <a target="_blank" href = "../privacypolicy.php">policy sulla privacy</a>.',
	'giftCaps'		=> 'REGALA',
	'cartEmpty'		=> 'Sembra che il tuo carrello sia vuoto! Torna al <a href = "index.php">negozio</a> per riempirlo. Se pensi di aver ricevuto questa notifica per errore, puoi <a href = "http://dischan.org/contact.php">contattarci.</a>',
	'signUp'		=> 'Registrati',
	'checkoutLoginMsg'		=> 'Effettuando un acquisto dopo aver eseguito l\'accesso al tuo profilo o dopo esserti registrato ci consentirai di associare i tuoi acquisti al tuo account e di disporli nella tua libreria. Così sarà molto più facile per te scaricare i tuoi giochi, la tua musica e/o altri prodotti in seguito.',
	'guestCheckout'		=> 'Compra come ospite',
	'guestCheckMsg1'		=> 'Un account ospite utilizzerà la tua email di paypal per eseguire la transizione. Tutti i prodotti digitali richiederanno
					che tu inserisca il serial corrispondente e il tuo indirizzo email prima di essere scaricati. Ti consigliamo comunque di registrarti o di eseguire l\'accesso
					prima di fare un acquisto.',
	'guestCheckMsg2'		=> 'Nota: in qualsiasi momento dopo aver effettuato il tuo acquisto potrai creare un account e associare ad esso i tuoi prodotti usando 
					la tua email di paypal e i tuoi serial.',
					
));

?>