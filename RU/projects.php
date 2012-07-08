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
	'posts'				=> 'Посты',
	'projects'				=> 'Проэкты',
	'disMAEPara'		=> '<p>DisMAE, или Dischan Mobile Animation Engine, это кастомный движок для визуальных новелл для iOS созданный с помощью <a href = "http://www.cocos2d-iphone.org/" target="_blank">Cocos2D</a>.</p>
							<br />
							<p>DisMAE очень удобен в том что он может понимать многие команды <a href = "http://www.renpy.org/" target="_blank">Ren\'Py</a> напрямую, значительно облегчая портирование Ren\'Py игр на iOS.</p>
							<br />
							<p>В данный момент, движок можем использовать только мы, хотя может быть лицензирован в будущем.</p>',
	'juniperPara'	=> '<p>Juniper\'s Knot короткая и бесплатная визуальная новелла созданная студией Dischan для NaNoReNo 2012 (NaNoReNo это ежегодный вызов по созданию визуальной новеллы в течение Марта).</p>
						<br />
						<p>Это история о встрече мальчика и демона. Вы можете скачать её <a href = "http://junipersknot.<?php echo $settings[siteAddress]; ?>/">здесь</a> для Windows, Mac, Linux, и iOS. Немного ниже вы найдёте рекламный материал к игре.</p>',
	'cradlePara'			=> '<p>Cradle Song это визуальная новелла над которой Dischan работает с момента её основания в 2009 году.</p>
							<br />
							<p><a href = "http://cradle-song.com/story.php">Синопсис истории</a> доступен на <a href = "http://cradle-song.com/"> официальном сайте Cradle Song</a> как и <a href = "http://cradle-song.com/characters.php">описания некоторых персонажей</a> из игры.</p>
							<br />
							<p>В 2011 году, мы выпустили превью которое вы можете <a href = "http://cradle-song.com/download.php">загрузить</a> и попробывать. Трейлер можно найти ниже.</p>',
	'projectsPara'		=> '<p>В данный момент, главный проект Dischan это визуальная новелла "Cradle Song". Пожалуйста посетите <a href = "projects.php?p=1">страницу Cradle Song</a> чтобы узнать больше.</p>
							<br />
							<p>Dischan так же закончила короткую визуальную новеллу "Juniper\'s Knot" для NaNoReNo 2012. Пожалуйста посетите <a href = "projects.php?p=2">страницу Juniper\'s Knot</a> чтобы узнать больше.</p>',
));

?>