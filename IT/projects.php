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
	'posts'				=> 'Post',
	'projects'				=> 'Progetti',
	'disMAEPara'		=> '<p>DisMAE, o Dischan Mobile Animation Engine, è un motore grafico per visual novel per iOS costruito usando il framework <a href = "http://www.cocos2d-iphone.org/" target="_blank">Cocos2D</a>.</p>
							<br />
							<p>DisMAE è particolarmente utile per la sua abilità di riconoscere molte delle linee di comando di <a href = "http://www.renpy.org/" target="_blank">ren\'py</a> direttamente, semplificando notevolmente la conversione di giochi creati con ren\'py su iOS.</p>
							<br />
							<p>Al momento, questo motore grafico è utilizzabile solo dai membri di Dischan, ma potrebbe essere rilasciato su licenza in futuro.</p>',
	'juniperPara'	=> '<p>Juniper\'s Knot è una breve visual novel completamente gratuita creata da Dischan per l\'evento NaNoReNo 2012 (NaNoReNo è una sfida che si tiene ogni anno a Marzo che consiste nel creare una visual novel in un solo mese).</p>
						<br />
						<p>Narra della storia dell\'incontro tra un demone e un ragazzo. Puoi scaricarla <a href = "http://junipersknot.dischan.org/">qui</a> per Windows, Mac, Linux, e iOS. Qua sotto puoi trovare un pò di materiale promozionale del gioco.</p>',
	'cradlePara'			=> '<p>Cradle Song è una visual novel su cui Dischan sta lavorando dalla sua nascita, nel 2009.</p>
							<br />
							<p>Una <a href = "http://cradle-song.com/story.php">sinossi della storia</a> è disponibile sul <a href = "http://cradle-song.com/">sito ufficiale di Cradle Song</a>, insieme ai <a href = "http://cradle-song.com/characters.php">profili
							di alcuni dei personaggi</a> del gioco.</p>
							<br />
							<p>Nel 2011, abbiamo rilasciato un\'antemprima che puoi <a href = "http://cradle-song.com/download.php">scaricare</a> e provare gratuitamente. Qua sotto puoi trovare un trailer dell\'anteprima.</p>',
	'projectsPara'		=> '<p>In questo momento, il progetto principale di Dischan è una visual novel intitolata "Cradle Song". Visita la <a href = "projects.php?p=1">pagina di Cradle Song</a> per saperne di più.</p>
							<br />
							<p>Dischan ha anche recentemente completato una breve visual novel intitolata "Juniper\'s Knot" in occasione di NaNoReNo 2012. Visita la <a href = "projects.php?p=2">pagina di Juniper\'s Knot</a> per saperne di più.</p>',
));

?>