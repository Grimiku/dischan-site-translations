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
	'newMessagesBefore'	=> 'Você têm',
	'newMessagesAfter'	=> 'novas mensagens',
	'newPM'				=> 'Nova Mensagem Privada',
	'subject'			=> 'Assunto',
	'from'				=> 'De',
	'dismiss'			=> 'Fechar',
	'dismissAll'		=> 'Fechar Tudo',
	'newTR'				=> 'Novas Repostas a Tópicos',
	'thread'			=> 'Tópico',
	'lastPost'			=> 'Último Post em',
	'newNotification'	=> 'Nova Notificação',
	'visitInbox'		=> 'Visite a sua caixa de entrada',
	'noNewMessages'		=> 'Sem mensagens novas!',
	'user'				=> 'Utilizador',
	'inbox'				=> 'Caixa de entrada',
	'library'			=> 'Biblioteca',
	'logout'			=> 'Sair',
	'usernameEmail'		=> 'Nome de utilizador/Email',
	'password'			=> 'Password',
	'login'				=> 'Entrar',
	'register'			=> 'Registrar',
	'username'			=> 'Nome de utilizador',
	'email'				=> 'Email',
	'confirmPassword'	=> 'Confirme a Password',
	'subscribeNews'		=> 'Subscrever ao boletim informativo da Dischan?',
	'registerTOS'		=> 'Nota: Ao registrar uma conta dischan, concorda com os nossos <a target="_blank" href = "termsandconditions.php">Termos de Serviço</a> e <a target="_blank" href = "privacypolicy.php">Política de Privacidade</a>.',
	'backtotop'			=> 'regressar ao topo',
	'caseSensitive'		=> 'sensível a maiúsculas, mín. 8 caracteres',
	'show'		=> 'Mostrar',
	'showLwr'		=> 'mostrar',
	'page'		=> 'Página',
	'bottom'		=> 'Fundo',
	'top'		=> 'Topo',
	'contents'		=> 'Conteúdo',
	'usernameNotes'		=> 'A-Z, 0-9, e _- insensível a maiúsculas',
	'forgotPass'		=> 'Esqueceu-se da password?',
	'sortBy'		=> 'ordenar por',
	'newest'		=> 'mais recente',
));

?>