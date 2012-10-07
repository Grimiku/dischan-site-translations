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
	'positions'			=> 'Posities',
	'positionsPara'		=> 'Dischan is altijd geïnteresseerd in mogelijk talent, maar hieronder staan de posities die we het liefst gevuld willen hebben.
                            Let op dat op het moment deze posities op vrijwilligersbasis zijn. Als er echter geld wordt verdiend met je werk, wordt je daar natuurlijk
                            voor gecompenseerd, doorgaans met een percentage van de winst.',
	'graphicDesigner'	=> 'Grafisch ontwerper',
	'graphicDesignPara'	=> '<p>Dischan is op zoek naar een grafisch ontwerper voor taken zoals::</p>
							<ul>
								<li>Ontwerpen voor fictionele universums brainstormen (logo's, borden, zegels, etc.)</li>
								<li>Webdesign</li>
								<li>Gebruikersinterfacedesign</li>
							</ul>
							<p>Als je denkt dat je tot een of meerdere van de bovenstaande taken in staat ben, zouden we dolgraag met je willen werken.
							Kandidaten moeten een link naar hun portfolio meesturen. Hoe meer hoe beter,
							maar voel je vrij om enkele werken aan te duiden waar je in het bijzonder trots op bent..
							<br/><br/>
							<a href = "apply.php?position=gd"><b>Solliciteer</b></a></p>',
	'artist'			=> 'Artiest',
	'artistPara'		=> '<p>Dischan is op zoek naar artiesten die kunnen helpen met het tekenen van conceptkunst, sprites en achtergronden. Enkele vaardigheden waar we op zoek naar zijn, zijn:
							<ul>
								<li>Bekwaamheid in Photoshop</li>
								<li>Ervaring met het ontwerpen en aanpassen van digitale kunst</li>
							</ul>
							Kandidaten moeten hun portfolio meesturen, als een bijlage of als een link naar een website.
							<br/><br/>
							<a href = "apply.php?position=ar"><b>Solliciteer</b></a></p>',
));

?>
