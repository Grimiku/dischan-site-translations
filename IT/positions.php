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
	'positions'			=> 'Posizioni',
	'positionsPara'		=> 'Nonostante noi di Dischan siamo sempre interessati a ogni tipo di potenziale talento, qua sotto abbiamo elencato alcuni dei
							posti vacanti che ci piacerebbe particolarmente riemipire. Vorremmo far notare che questi incarichi al momento sono volontari,
							cioè non retribuiti. Tuttavia, se riusciremo a guadagnare qualcosa grazie al tuo lavoro, sarai compensato adeguatamente, di solito
							con una percentuale della rendita in questione.',
	'graphicDesigner'	=> 'Graphic Designer',
	'graphicDesignPara'	=> '<p>Dischan sta cercando un graphic designer che possa svolgere incarichi come:</p>
							<ul>
								<li>Buttare giù idee e designs per mondi immaginari (loghi, insegne, sigilli, etc)</li>
								<li>Web design</li>
								<li>Design dell\'interfaccia di utente</li>
							</ul>
							<p>Se pensi di riuscire a svolgere incarichi come quelli elencati qui sopra, allora ci piacerebbe moltissimo lavorare con te.
							Coloro che desiderano ricopire questa posizione dovrebbero allegare alla loro richiesta un link al loro portfolio. Più lavori ci sono meglio è,
							ma sentiti libero di mostrarci i lavori di cui vai più fiero.
							<br/><br/>
							<a href = "apply.php?position=gd"><b>Apply</b></a></p>',
	'artist'			=> 'Artista',
	'artistPara'		=> '<p>Dischan sta cercando un artista che possa dare una mano a disegnare concept art, sprites, e fondali. Alcune delle competenze che richiediamo sono:
							<ul>
								<li>Familiarità con Photoshop</li>
								<li>Esperienza nel creare e modificare arte digitale</li>
							</ul>
							Coloro che desiderano ricoprire questa posizione dovrebbero includere un portfolio dei loro lavori più recenti come allegato, o come link.
							<br/><br/>
							<a href = "apply.php?position=ar"><b>Apply</b></a></p>',
));

?>