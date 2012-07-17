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
	'frequentlyAskedQ'	=> 'Perguntas Frequentes',
	'freqPara'				=> '<p>
								<a href = "#release">Quando será lançado o Cradle Song?</a><br />
								<a href = "#commercial">O Cradle Song será um jogo comercial?</a><br />
								<a href = "#mature">O Cradle Song irá conter conteúdo adulto?</a><br />
								<a href = "#join">Posso-me juntar à Dischan?</a><br />
								<a href = "#translate">Posso traduzir um produto ou o website da Dischan?</a><br />
								<a href = "#problems">Tenho um problema com um produto ou com o website da Dischan, o que devo fazer?</a><br />
								<a href = "#language">Qual é o propósito da configuração de língua na minha conta?</a><br />
								<a href = "#languageMissing">A minha língua preferida não está listada como uma escolha, porque não?</a><br />
								<a href = "#languageErrors">Reparei num erro de escrita/gramática/tradução num produto ou no website da Dischan, o que devo fazer?</a>
							</p>
							<br />
							<br />
							<p id = "release"><b>Quando será lançado o Cradle Song?</b></p>
							<p>ainda não há data específica para o lançamento do Cradle Song, mas queremos lançar uma demo em 2012, e com sorte, iremos lançar o jogo no ano seguinte.</p>
							<br />
							<p id = "commercial"><b>O Cradle Song será um jogo comercial?</b></p>
							<p>Sim. Porém, queremos que as pessoas o joguem mais do que queremos fazer muito dinheiro, portanto não será caro de todo. Definitivamente menos que 10 dólares Americanos.</p>
							<br />
							<p id = "mature"><b>O Cradle Song irá conter conteúdo adulto?</b></p>
							<p>Sim, o Cradle Song irá conter violência, sangue, palavrões, e conteúdo sexual nalguns caminhos. Os jogadores devem ter 17 anos ou mais para poder jogar.</p>
							<br />
							<p id = "join"><b>Posso-me juntar à Dischan?</b></p>
							<p>Existe um formulário de candidatura online <a href = "apply.php">aqui</a>.</p>
							<br />
							<pid = "translate"><b>Posso traduzir um produto ou o website da Dischan?</b></p>
							<p>Sim, porém trabalhar com tradutores para produzir boas traduções pode ser difícil e demorado, portanto temos um teste de tradução que queremos que complete antes de nos contactar.
							Pode encontrá-lo <a href = "internationalization.php">aqui</a>.</p>
							<br />
							<p id = "problems"><b>Tenho um problema com um produto ou com o website da Dischan, o que devo fazer?</b></p>
							<p>Por favor visite a nossa página de <a href = "support.php">suporte</a>.</p>
							<br />
							<p id = "language"><b>Qual é o propósito da configuração de língua na minha conta?</b></p>
							<p>Nós usamos a configuração de língua da sua conta para o seguinte:</p>
							<ol>
								<li>Permitir à loja listar os downloads dos jogos e de outros produtos na sua língua em primeiro lugar, se houver uma tradução (caso contrário a versão Inglesa será listada primeiro, e as línguas restantes em ordem alfabética).</li>
								<li>Mostrar componentes do site na sua língua, se houver uma tradução disponível.</li>
								<li>Entregar boletins informativos e emails de notificações na sua língua, se houver uma tradução disponível</li>
							</ol>
							<p id = "languageMissing"><b>A minha língua preferida não está listada como uma escolha, porque não?</b></p>
							<p>Isto é provavelmente porque não temos nenhuma tradução para a sua língua, portanto a escolha não teria efeito. Se você fala Inglês e a sua língua preferida fluentemente, e gostaria de ajudar a traduzir um site ou produto para a sua língua, por favor visite a nossa página de <a href = "internationalization.php">Internacionalização e Traduções</a>.</p>
							<br />
							<p id = "languageErrors"><b>Reparei num erro de escrita/gramática/tradução num produto ou no website da Dischan, o que devo fazer?</b></p>
							<p>Por favor <a href = "contact.php">reporte-nos o erro</a>. Tentaremos resolvê-lo.</p>',
));

?>