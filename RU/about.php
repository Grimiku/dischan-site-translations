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
	'aboutFirstPara'	=> '<h1>Кто мы?</h1>
							<hr />
							<div class = "leftContentText">
								<p>Dischan Media - это интернациональная студия фокусирующаяся на создании картин, музыки, литературы и дизайна предельного превосходства. Jeremy Miller основал студию летом 2009 года, пытаясь создать совместную, высоко качественную визуальную новеллу (visual novel) для западного рынка.</p>
								<br />
								<p>С тех пор, студия выросла как и в числе персонала так и в значимости. Dischan теперь состоит из нескольких талантливых лиц с общей целью: предоставлять прекрасные ощущения всем и везде.</p>
							</div>',
	'aboutSecondPara'	=> '<h1>Разработчики</h1>
							<hr />
							<div class = "leftContentText">
								<p>Текущие основные члены команды включают:</p>
								<ul>
			    					<li>Jeremy (Dani) Miller - Писатель/Программист/Руководитель (<a href = "http://jeremyrmiller.com">Сайт</a>)</li>
			    					<li>Saimon (Doomfest) Ma - Арт-директор (<a href = "http://doomfest.com">site</a>)</li>
			   						<li>Terrence (Swifdemon) Smith - Писатель/Программист</li>
			    					<li>Cherisse (Null Dizzy) Smith - Редактор</li>
			    					<li>Kristian (CombatPlayer) Jensen - Музыкант</li>
			    					<li>Anton (Guy-kun) Prydatko - iOS Программист</li>
			    				</ul>
							</div>'
));

?>
