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
	'press'				=> 'Imprensa',
	'pressPara'				=> '<p>Está a fazer um documentário sobre romances visuais? Interessado em escrever sobre a Dischan ou algum dos seus produtos? Se tiver dúvidas, ou quiser uma entrevista com um dos membros da equipa, por favor envie-nos uma mensagem através do nosso <a href = "contact.php">formulário de contacto</a>.</p>
							<br />
							<p>Também temos um <a href = "files/press_package.zip">pacote de imprensa</a> que pode transferir. Contém alguns gráficos que pode usar, bem assim como um conjunto simples de informação sobre a Dischan e os seus produtos.</p>',
));

?>