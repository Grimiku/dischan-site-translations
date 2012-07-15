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
	'internationalTrans'=> 'Internazionalizzazione e Traduzioni',
	'internationalPara'	=> '<p>Dischan cerca di essere il più internazionale possibile, e di condividere i suoi prodotti nel maggior numero di lingue possibile. Per fare questo, abbiamo bisogno del tuo aiuto.
							Se sei confidente nelle tue abilità di traduttore, e noti che una lingua è stata trascurata, puoi <a href = "contact.php">contattarci</a>. Ci piacerebbe molto collaborare con te per tradurre il nostro sito o uno dei nostri prodotti.</p>
							<br />
							<p>Per assicurarci delle tue capacità, ti chiediamo di completare questo <a href="files/translatorspack.zip">test di traduzione</a>, che consiste nel tradurre varie
								spezzoni della sceneggiatura della demo di Cradle Song. Ti chiederemo di mandarcelo dopo che ci avrai contattati, perciò completalo prima di scriverci.</p>',
	'qualityControl'	=> 'Controllo della qualità',
	'qualityControlPara'=> '<p>Anche se cerchiamo di fare del nostro meglio, Dischan può solo garantire la qualità del sito e delle sceneggiature originali, in inglese. Se trovi errori di battitura, errori grammaticali, o traduzioni imprecise, puoi
							<a href = "contact.php">contattarci</a> e farcelo sapere.</p>',
));

?>