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
	'support'				=> 'Supporto',
	'supportPara'			=> '<p>Hai qualche problema con un prodotto o un servizio Dischan? Se è così, prova a dare un\'occhiata alla <a href = "http://www.dischan.org/forum/viewforum.php?c=3&f=8">sezione "supporto" del nostro forum</a>. Se il problema da te riscontrato
								non è presente, sentiti libero di cominciare una nuova discussione per parlarne. Gli screenshot sono apprezzati.</p>
								<br />
								<p>Per problemi più delicati, come problemi di sicurezza, con il tuo profilo, o con gli acquisti nel negozio, puoi usare il nostro <a href = "contact.php">modulo per contattarci</a>.</p>',
));

?>